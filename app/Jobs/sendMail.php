<?php

namespace App\Jobs;

use App\Mail\RegisterData;
use App\Mail\RegisterMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendMail implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $validData;
    public $allData;
    public function __construct($validData, $allData) {
        $this->validData = $validData;
        $this->allData = $allData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void {
        // $user=User::all();

        // $email = new RegisterMail();

        Mail::to($this->request->email)->send(new RegisterMail($this->validData));
        Mail::to('lanzu@gmail.com')->send(new RegisterData($this->allData));
    }
}
