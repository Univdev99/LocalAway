<?php

namespace App\Http\Controllers;

use App\Survey_person;
use App\NewsUser;
use Illuminate\Http\Request;
use App\Upload;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();
        View::share('logo', $logo);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->check()) {
            $user_type = auth()->user()->user_type;
            if (auth()->user()->id <=3){
                return redirect('/dashboard');
            }
            if ($user_type == 'customer') {
                return redirect()->route('customer.signup.tracking');
                // return redirect()->route('com.customer.upcoming-boxes');
            } else if ($user_type == 'stylist') {
                return redirect('/stylist');
            }
        }

        $stylists = Upload::where('collection' ,'stylist')->orderBy('extra')->get();
        $itineraries = Upload::where('collection' ,'itinerary')->orderBy('extra')->get();
        $hero = Upload::where('collection' ,'hero')->where('extra',1)->first();
        $hero_type = strtolower(pathinfo($hero->filename)['extension']);
        $hero_type = in_array($hero_type, ['mp4', 'avi']) ? 'video' : 'image';
        
        return view('com.home', [
            'stylists' => $stylists,
            'itineraries' => $itineraries,
            'hero' => $hero,
            'hero_type' => $hero_type
        ]);
    }

    public function checkAccess(Request $request)
    {
        $access_code = $request->input('access_code');
        if(Survey_person::where('access_code', $access_code)->first() || $access_code == 'LOCALAWAY20'){
            return "true";
        }
        return "false";
    }

    public function about()
    {
        $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();

        return view('com.frontend.about');
    }

    public function showAnswer(Request $request)
    {
        $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();
        // $hero = Upload::where('collection' ,'hero')->where('extra',1)->first();
        $event = $request->get('event');
        $location = $request->get('location');
        return view('com.answer', [
            'event' => $event,
            'location' => $location,
            // 'hero' => $hero,
        ]);
    }

    public function saveNewsEmail(Request $request)
    {
        $email = $request->input('email');
        if(NewsUser::where('email', $email)->first()){
            return;
        }
        $news = new NewsUser;
        $news->email = $email;
        $news->save();
    }
}
