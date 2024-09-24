<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function mail_send(Request $request)
    {
    $validatedData = $request->validate([
        'fname' => 'required|string',
        'lname' => 'required|string',
        'company' => 'nullable|string',
        'title' => 'nullable|string',
        'email' => 'required|email',
        'phone' => 'nullable|string',
        'inquirytype' => 'required|string',
        'message' => 'required|string',
    ]);

    $user = (object) $validatedData;
    Mail::to('admin@tdicav.com')->send(new ContactMail($user));

    // Flash success message
    session()->flash('success', 'Email sent successfully!');
    return redirect()->back();
    }
}