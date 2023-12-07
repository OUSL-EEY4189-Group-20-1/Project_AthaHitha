<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Mail;
use App\Mail\VerificationEmail;

class MailController extends Controller
{
    public function mailform()
    {
        return view('mail');
    }
    public function maildata(Request $request)
    {
        $name    = $request->name;
        $email   = $request->email;
        $sub     = $request->sub;
        $mess    = $request->mess;
        $mailData = [
            'url' => '#',
        ];
        $send_mail = "athahithadonations@gmail.com";
        Mail::to($send_mail)->send(new SendMail($name, $email, $sub, $mess));
        
        $senderMessage = "thanks for your message , we will reply you in later";
        Mail::to( $email)->send(new   
           SendMessageToEndUser($name,$senderMessage,$mailData));

        return "Mail Send Successfully";
    }

    public function sendVerificationEmail(Request $request) {
        // Your verification logic
    
        // Send the verification email
        $userEmail = $request->input('email');
        Mail::to($userEmail)->send(new VerificationEmail());
    
        // Additional logic after sending the email
    }
}
