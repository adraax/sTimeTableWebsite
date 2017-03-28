<?php

namespace App\Http\Controllers;

class ErrorMessageController extends Controller
{
    public function index()
    {
        return view('errors.404');
    }
}
