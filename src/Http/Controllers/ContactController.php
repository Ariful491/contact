<?php

namespace Ariful\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Ariful\Contact\Mail\ContactMailable;
use Ariful\Contact\Models\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
         Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
           Contact::create($request->all());

    }

}
