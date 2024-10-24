<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\AutoReplyMail;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function mail_send(Request $request)
    {
        $request->validate([
            'recaptcha_token' => 'required'
        ]);

        $recaptchaResponse = $request->input('recaptcha_token');

        $client = new Client();
            // Verify the reCAPTCHA response
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $recaptchaResponse,
                    'remoteip' => $request->ip(),
                ]
            ]);
    
            $responseBody = json_decode((string) $response->getBody());
    
            if ($responseBody->success && $responseBody->score >= 0.5) {
                try {
                    Mail::to('admin@tdicav.com')->send(new ContactMail($request));
                    Mail::to($request->input('email'))->send(new AutoReplyMail($request));
                    
                    session()->flash('success', 'Email sent successfully!');
                } catch (\Exception $e) {
                    Log::error('Mail sending failed: ' . $e->getMessage());
                    session()->flash('error', 'There was an error sending your email. Please try again later.');
                }
            } else {
                session()->flash('error', 'reCAPTCHA verification failed. Please try again.');
            }  
        return redirect()->back();
    }
}