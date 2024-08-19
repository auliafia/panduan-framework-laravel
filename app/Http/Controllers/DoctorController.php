<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        $totalDoctors = Doctor::count();
        $totalExperience = Doctor::sum('experience_years');
        $minExperience = Doctor::min('experience_years');
        $maxExperience = Doctor::max('experience_years');
        $avgSalary = Doctor::avg('salary');

        return view('doctors.index', compact('totalDoctors', 'totalExperience', 'minExperience', 'maxExperience', 'avgSalary'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'experience_years' => 'required|integer|min:0',
            'salary' => 'required|numeric|min:0',
        ]);

        Doctor::create($request->all());

        return redirect('/doctors')->with('success', 'Doctor added successfully');
    }
}
