<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function mail(Request $request)
    {

        $to      = "gabindepaire@gmail.com";
        $subject = "this is a test";
        $message = "Bonjour !";
        $headers = "From:Test@test.com";
   
        $check = mail($to, $subject, $message, $headers);

        var_dump($check);
        exit;
        //return redirect('/contact')->withinfo('mail envoyé');

    }
}
