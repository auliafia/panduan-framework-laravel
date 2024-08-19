<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ifStatementController extends Controller
{
    public function if()
    {
        $nilai = 96;

        if ($nilai >= 90) {
            $grade = "Grade A";
        } elseif ($nilai >= 87) {
            $grade = "Grade B";
        } elseif ($nilai >= 70) {
            $grade = "Grade C";
        } else{
            $grade = "REMEDIAL!";
        }
        return view('ifData' , ['hasil' => $grade]);
    }
}
