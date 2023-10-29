<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use  App\Models\Message;

class ContactController extends Controller
{
    public function Create()
    {
        return view('contacts.create');
    }
    public function Store(ContactRequest  $request)
    {
//       $msg = new Message;
//        $msg->name = $request->name;
//        $msg->email = $request->email;
//        $msg->message = $request->message;
//        $msg->save();
        $msg= Message::create($request->only('name','email','message'));
        $mailable =new ContactMessageCreated($msg);
//        new MessageSended($request->name,$request->email, $request->message );
        //dd(config('laracarte.admin_support_email'));
        Mail::to('bousbelakebi@gmail.com')->send($mailable);
        return 'Done!';
    }
}
