<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'emailto' => 'required|email',
            'subject' => 'required|string',
            'email' => 'required|string',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048'
        ]);

        $emailTo = $request->input('emailto');
        $subject = $request->input('subject');
        $emailBody = $request->input('email');

        $email = new SendMail($subject, $emailBody);

        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $email->attach($attachment->getRealPath(), [
                'as' => $attachment->getClientOriginalName(),
                'mime' => $attachment->getMimeType(),
            ]);
        }

        Mail::to($emailTo)->send($email);

        session()->flash('success', 'Email berhasil dikirim');
        return redirect('/email');
    }

    public function showForm()
    {
        return view('email');
    }
}
