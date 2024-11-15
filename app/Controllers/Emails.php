<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\EmailService;

class Emails extends BaseController
{

    public function send()
    {

        $email = new EmailService();

        $result = $email->sendEmail('carlsonmagtalas@gmail.com', 'Sample message with library', 'Testing phase');

        if ($result == true) {
            echo 'Emailed success';
        } else {
            echo 'failed to send email';
        }
    }
}
