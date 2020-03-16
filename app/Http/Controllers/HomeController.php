<?php

namespace App\Http\Controllers;

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
                return redirect('/customer/upcoming-boxes');
            } else if ($user_type == 'stylist') {
                return redirect('/stylist');
            }
        }

        $stylists = Upload::where('collection' ,'stylist')->orderBy('extra')->get();
        $itineraries = Upload::where('collection' ,'itinerary')->orderBy('extra')->get();
        $hero = Upload::where('collection' ,'hero')->where('extra',1)->first();
        // dd($hero);
        return view('com.home', [
            'stylists' => $stylists,
            'itineraries' => $itineraries,
            'hero' => $hero,
        ]);
    }

    public function checkAccess(Request $request)
    {
        $access_code = $request->input('access_code');
        if($access_code == 'LOCALAWAY20'){
            return "true";
        }
        else{
            return "false";
        }
    }

    public function about()
    {
        $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();

        return view('frontend.about');
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
}
