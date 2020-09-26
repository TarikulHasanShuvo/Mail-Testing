<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendMail(Request $request){

        $inputs = [
            'name'=> $request->input('name'),
            'mail'=> $request->input('email'),
            'msg'=> $request->input('message'),
        ];

        Mail::send('mail',['data' => $inputs],function ($mail) use ($inputs) {
            $mail->from($inputs['mail'])
                ->to('tarikulhasanshuvo7944@gmail.com')
                ->subject('Test Mail');
        });

        return redirect()->back()->with('success', true);
    }
}
