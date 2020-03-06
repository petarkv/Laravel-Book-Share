<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    /*public function __construct($data)
    {
        $this->data = $data;
    }*/

    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        /*return $this->view('view.name');*/
        return $this->from('bookshareonline@gmail.com')->subject('Newsletter
        Subscribe')->view('dynamic_email_template')->to($request->email)->with('data', $this->data);

    }
}
