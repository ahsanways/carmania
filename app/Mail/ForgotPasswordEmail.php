<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ForgotPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Reset Password | Request';
        
        return $this->view('emails.forgotPassword')
                    ->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($this->request->email, "User")
                    ->subject($subject)
                    ->with([ 'password' => $this->request->password ]);
    }
}
