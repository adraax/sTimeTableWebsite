<?php

namespace App\Http\Controllers;

use App\ErrorMessage;
use Illuminate\Http\Request;

class ErrorMessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('add', 'store');
    }

    public function index()
    {
        $error = ErrorMessage::inRandomOrder()->first();
        return view('error.index', compact('error'));
    }

    public function add()
    {
        return view('error.add');
    }

    public function store(Request $request)
    {
        $error = new ErrorMessage();

        $error->author = $request->input('author');
        $error->quote = $request->input('quote');
        $error->save();

        return redirect('error');
    }
}
