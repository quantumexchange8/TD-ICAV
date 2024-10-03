<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\AutoReplyMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function mail_send(Request $request)
    {
    Mail::to('admin@tdicav.com')->send(new ContactMail($request));
    Mail::to($request->input('email'))->send(new AutoReplyMail($request));

    // Flash success message
    session()->flash('success', 'Email sent successfully!');
    return redirect()->back();
    }
}