<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountInfoController extends Controller
{
    public function index(){
        $accounts = Account::all();
        return view('info.accounts',[
            'accounts' => $accounts
        ]);
    }
}
