<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class fileResponController extends Controller
{
    public function show()
    {
        $filePath = 'public/example.pdf';
        
        if (!Storage::exists($filePath)) {
            return response()->json(['message' => 'File not found.'], 404);
        }

        $fileContent = Storage::get($filePath);
        $mimeType = Storage::mimeType($filePath);

        return response($fileContent, 200)
            ->header('Content-Type', $mimeType);
    }
}
