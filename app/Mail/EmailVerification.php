<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $new_user;
    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($new_user)
    {
        $this->new_user   =   $new_user;
        $this->token      =   encrypt($new_user->id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from('teams.vams@gmail.com', 'VAMS Fitness')
        ->subject('Verify Your VAMS Account')
        ->view('mail.verify',compact('new_user','token'));
    }
}
