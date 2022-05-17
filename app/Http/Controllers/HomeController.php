<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Form;
use App\Models\Rent;
=======
>>>>>>> b2264fc3b8dc11a0a5b55922be9d37987dabac92
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $rent = Rent::get();

        return view('index', ['rent' => $rent]);
    }

    public function showform($id)
    {
        $rent = Rent::where('id', $id)->get();
        return view('index', compact('rent'));
=======
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
>>>>>>> b2264fc3b8dc11a0a5b55922be9d37987dabac92
    }
}
