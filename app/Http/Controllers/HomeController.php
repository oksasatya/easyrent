<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Rent;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $rent = Rent::get();

        return view('index', ['rent' => $rent]);
    }

    public function showform($id)
    {
        $rent = Rent::where('id', $id)->get();
        return view('index', compact('rent'));
    }
}
