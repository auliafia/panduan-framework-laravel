<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TeacherSubjectController extends Controller
{
    // Menampilkan form untuk menambah guru dan mata pelajaran
    public function index()
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();
        return view('teacher_subject.index', compact('teachers', 'subjects'));
    }

    // Menyimpan data guru dan relasi mata pelajaran
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_ids' => 'required|array',
            'subject_ids.*' => 'exists:subjects,id',
        ]);

        $teacher = Teacher::create([
            'name' => $request->name,
        ]);

        $teacher->subjects()->attach($request->subject_ids);

        return redirect()->route('teacher_subject.index');
    }

    // Menampilkan form untuk menambah mata pelajaran
    public function createSubject()
    {
        return view('teacher_subject.create_subject');
    }

    // Menyimpan mata pelajaran baru
    public function storeSubject(Request $request)
    {
        $request->validate([
            'subject_name' => 'required|string|max:255',
        ]);

        Subject::create([
            'name' => $request->subject_name,
        ]);

        return redirect()->route('teacher_subject.index');
    }

    // Menampilkan hasil inner join guru dan mata pelajaran
    public function results()
    {
        $results = Teacher::with('subjects')->get();
        return view('teacher_subject.results', compact('results'));
    }
}
