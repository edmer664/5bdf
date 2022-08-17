<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Franchise extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;
    public $pdf_attachment;
    public $pdf_name;
    public $subject;
    public $message;
    public $pdf_path;
    public function __construct($request, $pdf_name, $subject, $message,$pdf_path)
    {
        $this->request = $request;
        
        $this->pdf_name = $pdf_name;
        $this->subject = $subject;
        $this->message = $message;
        $this->pdf_path = $pdf_path;
    }
    
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@5bdf.ph', '5BDF Website')
            ->subject($this->subject)
            ->view('emails.franchise',['request' => $this->request,'message' => $this->message])
            ->attach($this->pdf_path, [
                'as' => $this->pdf_name,
                'mime' => 'application/pdf',
            ]);
    }
}
