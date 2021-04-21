<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\Account;

class MailController extends Controller
{
    public function sendEmail($id){
        $account = Account::findOrFail($id);


        Mail::to($account->email)->send(new TestMail($account));
        return "Email send";
    }
}
