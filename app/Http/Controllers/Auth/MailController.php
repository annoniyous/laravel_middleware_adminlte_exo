<?php

namespace App\Http\Controllers;

use App\Mail\Mailsend;
use App\Models\SubjectMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $subjects = SubjectMail::all();
        return view("pages.contact", compact("subjects"));
    }
    public function store(Request $request){
        Mail::to("viovio@vio")->send(new Mailsend($request));
        return redirect()->back();
    }

    public function indexBackendMail(){
        return view("pages.mails.mails");
    }
}
