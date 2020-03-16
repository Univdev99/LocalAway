<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Stevebauman\Location\Location;
use App\Survey_person;
use App\Question;
use App\Survey;
use App\Answer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use App\Mail\sendRequestAccessMail;

class NewlandingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function survey(Request $request)
    {
        $expire = $request->input('expires');
        $token = $request->input('token');
        $json = json_decode(Crypt::decrypt($token));

        $person = Survey_person::where(['email' => $json->email, 'name' => $json->name])->get();
        if($expire < time() || count($person) != 1){
            return view('ai.mailSent');
        }

        $array = $this->makeQuestionAnswerArray();
        return view('ai.surveys',
            ['question_list' => $array,
            'person_id' => $person[0]->id,
        ]);
    }

    public function makeQuestionAnswerArray()
    {
        $question_array = [];

        foreach( Question::all() as $question)
        {

            $answer_array = [];
            foreach( $question->answers as $answer)
            {
                $answer_item = [
                    'answer_id' => $answer->id,
                    'answer_text' => $answer->answer
                ];
                array_push($answer_array, $answer_item);
            }
            $question_item = [
                'question_id' => $question->id,
                'question_text' => $question->question,
                'question_type' => $question->type,
                'answers' => $answer_array
            ];
            array_push($question_array, $question_item);
        }

        return $question_array;
    }

    public function saveRequestInfo(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $person_type = $request->input('person_type');
        $note = $request->input('note');
        $location = new Location();
        $position = $location->get($request->ip());
        if ($position) {
            $request->merge(['country' => $position->countryName.", ".$position->cityName]);
        } else {
            $request->merge(['country' => 'Undefined Country']);
        }
        $access_code = md5($email);
        $access_code = substr($access_code, 0, 5);

        $person = Survey_person::updateOrCreate(['email' => $email],
            ['name' => $name, 'phone' => $phone, 'person_type' => $person_type, 'location' => $request->input("country"), 'note' => $note, 'access_code' => $access_code]
        );

        return $access_code;
    }


    public function saveSurveyInfo(Request $request)
    {
        $info = $request->input('info');
        $input_info = $request->input('input_info');
        $person_id = $request->input('person_id');
        $question_id = $request->input('question_id');
        $type = $request->input('type');

        $this->deletePastSurvey($person_id, $question_id);

        $token = strtok($info, ",");
        $info_list = [];
        $input_field = "";
        while ($token !== false)
        {
            if($type == 'input' || Answer::where('id', $token)->first()->answer == 'Other')
                $input_field = $input_info;
            Survey::updateOrCreate(['person_id' => $person_id, 'answer_id' => $token], ['input_field' => $input_field]);
            $token = strtok(",");
        }

    }

    public function deletePastSurvey($person_id, $question_id)
    {
        $answer_list = Question::where('id', $question_id)->first()->answers->pluck('id');
        $past_survey = Survey::where('person_id', $person_id)->whereIn('answer_id', $answer_list)->get();
        foreach($past_survey as $survey)
        {
            $survey->delete();
        }
    }

    public function sendRequestMail(Request $request) {
        $name = $request->input('name', 'Localaway');
        $email = $request->input('email', 'localaway@team.com');
        $access_code = $request->input('access_code');

        $expire_time = time() + 24 * 60 * 60;
        $json = json_encode(['name'=>$name, 'email'=>$email]);
        $token = Crypt::encrypt($json);
        $link = env('APP_URL') . '/survey' . '?expires=' . $expire_time . '&token=' . $token;
        Mail::to($email)->send(new sendRequestAccessMail($name, $link, $access_code));
    }
}
