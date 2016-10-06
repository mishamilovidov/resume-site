<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    public function create()
    {
        return view('about.contact');
    }

    public function store(Requests\ContactFormRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $user_subject = $request->get('subject');

        \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_subject' => $request->get('subject'),
            'user_message' => $request->get('message')
        ), 
        function($message) use ($user_subject,$email)
        {
            $message->from($email);
            $message->to('m.milovidov@icloud.com', 'Misha Milovidov')->subject($user_subject);
        });

        return \Redirect::route('contact')->with('message', 'Thanks for contacting me! I\'ll respond to your message as soon as I can.');
    }
}
