<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('specialty.index');
    }

    public function create(){
        return view('specialty.create');
    }
}
