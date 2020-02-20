<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;


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
            if (auth()->user()->id <=2){
                return redirect('/dashboard');
            }
            if ($user_type == 'customer') {
                return redirect('/customer/first-time-flow');
            } else if ($user_type == 'stylist') {
                return redirect('/stylist');
            }
        }

        $stylists = Upload::where('collection' ,'stylist')->orderBy('extra')->get();
        $itineraries = Upload::where('collection' ,'itinerary')->orderBy('extra')->get();
        $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();
        $hero = Upload::where('collection' ,'hero')->where('extra',1)->first();
        // dd($hero);
        return view('home', [
            'stylists' => $stylists,
            'itineraries' => $itineraries,
            'logo' => $logo,
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

        return view('frontend.about', [
            'logo' => $logo,
        ]);
    }

    public function showAnswer(Request $request)
    {
        $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();
        // $hero = Upload::where('collection' ,'hero')->where('extra',1)->first();
        $event = $request->get('event');
        $location = $request->get('location');
        return view('answer', [
            'logo' => $logo,
            'event' => $event,
            'location' => $location,
            // 'hero' => $hero,
        ]);
    }
}
