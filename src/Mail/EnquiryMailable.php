<?php

namespace Jyou\Enquiry\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnquiryMailable extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name;
    public $email;
    public $question;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $question)
    {
        $this->name = $name;
        $this->email = $email;
        $this->question = $question;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('enquiry::enquiry.email')->with([
        		'name' => $this->name,
        		'email' => $this->email,
        		'question' => $this->question
        ]);
    }
}
