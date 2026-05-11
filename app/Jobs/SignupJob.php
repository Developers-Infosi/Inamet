<?php

namespace App\Jobs;

use App\Mail\MailSignUp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SignupJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 3;
    private $signup;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($signup)
    {
        $this->signup = $signup;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new MailSignUp($this->signup);
        Mail::to($this->signup['email'])->send($email);
        
    }
}
