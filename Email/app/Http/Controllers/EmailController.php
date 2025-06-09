<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $recipient = 'sarathkumarr154@gmail.com';
        $message = 'This is a laravel test email message using mail function.';
        Mail::raw($message, function ($email) use ($recipient) {
            $email->to($recipient)->subject('Laravel Test Email');
        });
        return "Email sent successfully";
    }

        public function Email(Request $request)
        {
            $recipient = 'vishnupriyacs7@gmail.com'; 
            $attachment = $request->file('attachment');
            if ($attachment) {
                $attachmentPath = $attachment->getRealPath();
                $attachmentName = $attachment->getClientOriginalName();
                Mail::raw('Email content here', function ($email) use ($recipient, $attachmentPath,$attachmentName) {
                    $email	->to($recipient)
                            ->subject('Subject of the email')
                            ->attach($attachmentPath, ['as' => $attachmentName]);
                });
                return "Email sent successfully with the attachment";
            } else {
                return "no attachment";
            }
        }

        public function usingSend()
        {
            $data = ['name' => 'Anusha'];

            Mail::send('emails.welcome', $data, function ($email) {
                $email->to('miinu.anu@gmail.com')
                      ->subject('Welcome to Our Website!');
            });
            return "success";
        }

        public function index()
        {
            $users = User::all();
            return response()->json($users)
                             ->header('Access-Control-Allow-Origin', '*')
                             ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');;
        }


    
}
