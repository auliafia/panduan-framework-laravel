<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jsonController extends Controller
{
    public function getJsonResponse()
    {
        $data = [
            'success' => true,
            'message' => 'This is a JSON response',
            'data' => [
                'id' => 1,
                'name' => 'Arsanta Mahardika',
                'email' => 'arsantamahardika@gmail.com'
            ]
        ];

        return response()->json($data);
    }
}
