<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Upload;
use App\Customer;
use App\Question;
use App\Answer;
use App\Survey;
use App\Survey_person;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            if (auth()->user()->id > 2) {
                return redirect('/');
            }
            
            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $images = Upload::where('collection', 'logo')->get();
        $collection = 'logo';
        return view('dashboard', [
            'title' => 'logo image edit page',
            'images' => $images,
            'collection' => $collection
        ]);
    }

    public function hero()
    {
        $images = Upload::where('collection', 'hero')->get();
        $collection = 'hero';
        return view('dashboard', [
            'title' => 'hero image edit page',
            'images' => $images,
            'collection' => $collection
        ]);
    }
    public function itinerary()
    {
        $images = Upload::where('collection', 'itinerary')->orderby('extra')->get();
        $collection = 'itinerary';
        return view('dashboard', [
            'title' => 'itinerary image edit page',
            'images' => $images,
            'collection' => $collection
        ]);
    }
    public function stylist()
    {
        $images = Upload::where('collection', 'stylist')->orderby('extra')->get();
        $collection = 'stylist';
        return view('dashboard', [
            'title' => 'stylist image edit page',
            'images' => $images,
            'collection' => $collection
        ]);
    }

    public function customers()
    {
        return view('dashboard-customer', [
            'customers' => Customer::all(),
            'title' => 'customer dashboard'
        ]);
    }

    public function survey()
    {
        $table = [];
        foreach (Survey_person::all() as $person)
        {
            $row = [];
            $question_id = 0;
            $item = "";
            foreach (Survey::where('person_id', $person->id)->get() as $survey)
            {
                $item = "";
                if($survey->answer->question->type == 'input'){
                    $item = $survey->input_field;
                }
                else{
                    if($survey->answer->answer == 'Other'){
                        $item = 'Other:' . $survey->input_field;
                    }
                    else{
                        $item = $survey->answer->answer;
                    }
                }
                if (isset($row[$survey->answer->question->id])){
                    $row[$survey->answer->question->id] = $row[$survey->answer->question->id] . ',' . $item;
                }
                else{
                    $row[$survey->answer->question->id] = $item;
                }
            }
            $table[$person->id] = $row;
        }
        return view('dashboard-survey', [
            'header' => Question::all(),
            'person' => Survey_person::all(),
            'list' => $table,
            'title' => 'Survey dashboard']);
    }
}
