<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->email->get('subject'))
                    ->from(env('MAIL_USERNAME'),'IOTec Team')
                    ->setAddress(request()->get('email'),request()->get('first_name') . ' ' . request()->get('last_name'))
                    ->to(env('MAIL_USERNAME'),'IOTec Team')
                    ->view('mail.contact',[
                        'subject' => $this->email->get('subject'),
                        'content' => $this->email->get('message'),
                        'phone'   => $this->email->get('phone'),
                    ]);
    }
}
