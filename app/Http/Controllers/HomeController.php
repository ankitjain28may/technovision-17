<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(
            'verify',
            [
                'except' => [
                    'logout'
                ]
            ]
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function patientLogin()
    {
        return view('patient.login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function doctorLogin()
    {
        return view('doctor.login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function patientLoginPost(Request $request)
    {
        $this->validate(
            $request, [
                'email' => 'required|email|max:255',
                'password' => 'required|min:6',
            ]
        );

        $patient = Input::all();
        if (Auth::guard('patient')->attempt($patient)) {
            return Redirect::to('/dashboard');
        }
        return Redirect::back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function doctorLoginPost(Request $request)
    {
        $this->validate(
            $request, [
                'email' => 'required|email|max:255',
                'password' => 'required|min:6',
            ]
        );

        $doctor = Input::all();
        if (Auth::guard('doctor')->attempt($doctor)) {
            return Redirect::to('/dashboard');
        }
        return Redirect::back();
    }
}
