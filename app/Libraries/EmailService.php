<?php

namespace App\Libraries;

use CodeIgniter\Email\Email;

class EmailService {
    protected $email;

    public function __construct()
    {
        $this->email = service('email');
    }

    public function sendEmail($to, $message, $subject, $from = 'seniorcitizensystem@gmail.com') {

        $this->email->setFrom($from, 'Your Name');
        $this->email->setTo($to);
        $this->email->setSubject($subject);
        $this->email->setMessage($message);

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }
}
