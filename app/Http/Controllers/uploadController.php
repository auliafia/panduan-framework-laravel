<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        return view('uploadFile');
    }

    public function uploadFile(Request $request)
    {
        $uploadFile = $request->file('file');
        $path = $uploadFile->store('uploads');

        return response()->json(['file_path' => $path]);
    }
}