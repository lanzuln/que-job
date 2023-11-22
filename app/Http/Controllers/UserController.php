<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\sendMail;
use App\Mail\RegisterData;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller {
    public function create(Request $request) {
        return view("register");
    }
    public function store(Request $request) {

        $data = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
        ]);
        if ($data) {

            $allData = User::get();

            dispatch(new sendMail($request->all(), $allData));

            // event(new PaymentProcessed($payment_data));

            // Mail::to($request->email)->send(new RegisterMail($request->all()));

            // Mail::to('lanzu@gmail.com')->send(new RegisterData($allData));

            // SendMail::dispatch($request->all(), $allData)->onQueue('emails');
        }

        return redirect()->back()->with('success', 'Registration successfull');
    }
}
