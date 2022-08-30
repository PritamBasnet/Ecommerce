<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class Mails extends Controller
{
    //
    public function sendMail(Request $request)
    {
        $mail_data =
        [
            'reciever' => 'coderpritam951@gmail.com',
            'from' => $request->email,
            'fromName' => $request->name,
            'subject' => $request->subject,
            'body' => $request->body,
        ];
        Mail::send('email-template',$mail_data,function ($message) use($mail_data) {
            $message->to($mail_data['reciever'])
            ->from($mail_data['from'],$mail_data['fromName'])
            ->subject("forgot password code is =>".$mail_data['subject']);
        });
    }
}
