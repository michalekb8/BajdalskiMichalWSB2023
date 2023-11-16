<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function secondPage(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');

        session(['name' => $name]);
        session(['email' => $email]);

        return view('second_page', ['name' => $name, 'email' => $email]);
    }

    public function thirdPage()
    {
        session()->flush();
        $name = session('name');
        //session()->forget('email');
        $email = session('email');
        $email = session(['email' => $email ?? 'Brak danych']);
        $email = session('email');
        return view('third-page', ['name' => $name, 'email' => $email]);
    }
}
