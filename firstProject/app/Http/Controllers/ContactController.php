<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    public function submit(ContactRequest $req) {
        // $validation = $req->validate([
        //     // "name" => "required|min:5|max:50",
        //     // "email" => "required|email",
        //     "subject" => "required|min:5|max:50",
        //     "message" => "required|min:50|max:500"
        // ]);
    }
}
