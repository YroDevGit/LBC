<?php

// app/Mail/MyEmail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $message;
    public function __construct($subject, $message)
    {
        $this->subject = $subject;
        $this->message = $message;
    }

    public function build()
    {
        return $this->view('emails.template')
                    ->subject($this->subject)
                    ->from("tyronemalocon@gmail.com","Libacao Baptist Church")
                    ->with([
                        'text' => $this->message,
                        'subject' => $this->subject,
                    
                    ]);
    }
}

?>