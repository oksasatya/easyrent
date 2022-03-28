<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class testController extends Controller
{
    public function index()
    {
        return view('test.index');
    }
}
