<?php

namespace App\Mail;

use App\Models\Response;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $msgResponse;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Response $msgResponse)
    {
        $this->msgResponse = $msgResponse;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from Usman Raza')
            ->view('emails.response');
    }
}
