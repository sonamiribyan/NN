<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\request1;

class RequestController extends Controller
{
    public function setStatuse(Request $request)
    {
        $token = md5(rand(1, 10) . microtime());
        request1::create(['name' => $request->name, 'email' => $request->email, 'statuscode' => false, 'token' => $token]);
        return redirect('/request');
    }
    public function verifyUser($id)
    {
        $req = request1::find($id);
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp',
            'token' => $req->token,
        ];
        \Mail::to($req->email)->send(new \App\Mail\MyTestMail($details));
        return redirect('/admin');
    }
}