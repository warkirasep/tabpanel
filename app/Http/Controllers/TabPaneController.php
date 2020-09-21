<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabPaneController extends Controller
{
    //
    public function panel()
    {
        return view('welcome');
    }

    public function index()
    {
        return redirect()->to('panel#home');
    }
}
