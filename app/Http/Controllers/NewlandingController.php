<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Stevebauman\Location\Location;
use App\Survey_person;
use App\Question;
use App\Survey;
use App\Answer;

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
    public function index(Request $request)
    {
        $array = $this->makeQuestionAnswerArray();
        return view('surveys', ['question_list' => $array]);        
    }

    public function survey()
    {
        return view('survey');
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
    
    // public function checkEmail(Request $request)
    // {
    //     $email = $request->input('email');
    //     $name = $request->input('name');
    //     $row_number = $request->input('row_number');

    //     $flag=true;
    //     $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))->sheet('Name-Email')->get();
    //     if($row_number==0)
    //     {
    //         $row_number=count($sheets);
    //     }
    //     foreach ($sheets AS $data) {
    //         if(count($data) > 1){

    //             if($data[1]==$email){
    //                 $flag=false;
    //             }
    //         }
    //     }
    //     $this->saveName($email, $name, $row_number);
    //     if($flag==true)
    //     {
    //         return "true";
    //     }
    //     else
    //     {
    //         return "false";
    //     }
    // }

    public function saveEmail(Request $request)
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

        
        $person = Survey_person::updateOrCreate(['email' => $email],
            ['name' => $name, 'phone' => $phone, 'person_type' => $person_type, 'location' => $request->input("country"), 'note' => $note]
        );
        if($person->wasRecentlyCreated)
        {
            $isCreatedOrUpdated = "true";
        }
        else
        {
            $isCreatedOrUpdated = "false";
        }
        $questions = Question::all();
        $result = [
            'person_id' => $person->id,
            'isCreatedOrUpdated' => $isCreatedOrUpdated,
            'question_count' => $questions->count()
        ];
        return $result;
        
        // $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))->sheet('Name-Email')->get();
        // $count = count($sheets);
        // $time_now = now()->toDateTimeString();
        
        // Sheets::sheet('Name-Email')->range('A'.($count+1))->update([[$time_now,$email,$request->input("country")]]);
        // return ($count+1);
    }

    public function saveName($email, $name, $row_number)
    {
        $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
        ->sheet('Name-Email')->get();
        Sheets::sheet('Name-Email')->range('D'.$row_number)->update([[$name]]);
    }

    public function saveInfo(Request $request)
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
}
