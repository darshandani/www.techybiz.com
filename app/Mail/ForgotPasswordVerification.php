<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\AdminModel;

class ForgotPasswordVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data instance.
     *
     * @var studentPayment
     * @var isStudent
     */
    public $data;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, AdminModel $user)
    {

        $this->data = $data;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //    dd($this->data);

        $this->user->token = $this->data['token'];
        $subject = 'Email Verification For Forgot Password';

        return $this->view('backend.accounts.forgotPasswordVerificationEmail')->subject($subject);
    }
}
