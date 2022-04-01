<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index()
    {
        return view('pages.regulation.index');
    }

    public function internal()
    {
        return view('pages.regulation.internal_regulation.index');
    }

    public function normative()
    {
        return view('pages.regulation.normative_regulation.index');
    }
}

