<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
       return view('contact-us');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        echo '<h2>Thanks for Contacting Us</h2>';
        echo '<h3>Your Message Has Been Sent</h3>';
        echo 'Name: ' . $name . '<br>';
        echo 'Email: ' . $email . '<br>';
        echo 'Message: ' . $message . '<br>';
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
