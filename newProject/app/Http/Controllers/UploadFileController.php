<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class UploadFileController extends Controller
{
    public function index() {
        return view('upload_file');
    }

    public function store(Request $request){
        $account = new Account();
        $account->name = $request->name;
        $account->surname = $request->surname;
        $account->email = $request->email;
        $account->filename = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/images/', $account->filename);
        $account->save();

        return redirect()->route('accounts');
    }
}
