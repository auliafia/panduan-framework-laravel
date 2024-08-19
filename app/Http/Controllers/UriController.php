<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    public function index(Request $request){
        // method path
        $path = $request->path();
        echo 'Method path: '.$path;
        echo '<br>';

        // method is
        $pattern = $request->is('admin/*');
        echo 'Method is: ' . $pattern;
        echo '<br>';

        // method url
        $ulr = $request->url();
        echo 'Method url: ' . $ulr;
        echo '<br>';

        // method full url
        $fullurl = $request->fullurl();
        echo 'Method ful URL: ' . $fullurl;
        echo '<br>';

        // Retrieving the request method
        $method = $request->method();
        echo 'Request Method: ' . $method;
        echo '<br>';

        // Cek bahwa request method yang digunakan apakah POST atau get
        if ($request->isMethod('post')) {
            echo 'Request method adalah POST';
        } else {
            echo 'Request method bukan POST';
        }
        echo '<br>';        
    }
};
