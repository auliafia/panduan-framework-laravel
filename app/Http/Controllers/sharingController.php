<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class sharingController extends Controller
{
    public function __construct()
    {
        // Share data with all views
        View::share('sharedVariable', 'This is a shared variable for all views');
    }

    public function index()
    {
        return view('sharingData');
    }
}