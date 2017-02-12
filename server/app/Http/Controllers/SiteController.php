<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SiteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLandingPage()
    {

        if (Auth::check())

            return redirect()->route('people');
        
        else

            return view('pages.landing');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectLogin()
    {

        if (Auth::check())

            return redirect()->route('people');
        
        else

            return redirect()->route('landing');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showWelcomePage()
    {
        
        return view('pages.welcome');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPeoplePage()
    {
        
        return view('pages.people');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBasicInfo()
    {
        


    }

   
}
