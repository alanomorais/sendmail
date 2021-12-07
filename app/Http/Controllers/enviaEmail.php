<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class enviaEmail extends Controller
{
    public function sendMail(Request $request){
        $data = $request->all();

        $email = new stdClass();

        $email->name = "alano";
        $email->subject = "teste";

        Mail::send(new Mail($email));

        return back()->with('success','e-mail enviado com sucesso');
    }
}
