<?php

namespace App\Mail;

use App\Bug;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BugCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $bug;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bug $bug)
    {
        $this->bug = $bug;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nouveau Bug')->markdown('emails.bug.created');
    }
}
