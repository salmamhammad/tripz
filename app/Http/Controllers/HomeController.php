<?php

namespace App\Http\Controllers;
use App\About;
use App\Slider;
use App\Contact;
use Session;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
    public function index()
    {
        $abouts=About::find(1);
        $sliders=Slider::all();
        return view('welcome')->with('abouts',$abouts)->with('sliders',$sliders);
    }
    public function about()
    { $abouts=About::find(1);
        $sliders=Slider::find(1);
        return view('about')->with('abouts',$abouts)->with('sliders',$sliders);
    }
    public function contact()
    {
        $abouts=About::find(1);
        $sliders=Slider::find(1);
        return view('contact')->with('abouts',$abouts)->with('sliders',$sliders);
    }
    public function sendcontact()
    {
        $contact=new Contact;
        $contact->name=request()->name;
        $contact->email=request()->email;
        $contact->subject=request()->subject;
        $contact->text=request()->massege;
        $contact->save();
        Session::flash('success','Votre message a bien été envoyé ');

      
        return redirect()->back();
    }
  
}
