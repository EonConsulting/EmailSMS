<?php
/**
 * Created by PhpStorm.
 * User: bmmuffy
 * Date: 2016/11/28
 * Time: 8:50 AM
 */

namespace EONConsulting\EmailSMS;


/**
 * Class EmailSMS
 * @package EONConsulting\EmailSMS
 */
use Log;

use EONConsulting\EmailSMS\src\Models\EmailSMSModel;

class EmailSMS {

    /**
     * @return mixed
     */

    public function mailapp() {
        return HomeController::index();
             // return view('ph::lecturer');
    }
    public function sendingemail($email, $subject, $message, $mailer) {


                 
                 $mailer->to($email)
                ->queue(new \EONConsulting\EmailSMS\Mail\Reminder($subject));
            Log::useDailyFiles(storage_path() . '/logs/Emails.log');
            Log::info('Emails Sent', ['Email Sent To' => $email,
                'Subject' => $subject,
                'Email Content' => $message
            ]);
    }

         public function sendingsms($textmessage, $to) {

                   $to = $to;
            // $from = $request->from;
            $from = '27731510003';
            $text = $textmessage;
            $date = new \DateTime;
            $nexmo = app('Nexmo\Client');
            $nexmo->message()->send([

                'to' => $to,
                'from' => $from,
                'text' => $text

                // return view('welcome');

            ]);
            // inserting the message into the database
            $q = new EmailSMSModel;
            $q->sent_on = $date;
            $q->phone_number = $to;
            $q->message = $text;
            $q->save();


// writing to the log file 
            Log::useDailyFiles(storage_path() . '/logs/SMS.log');
            Log::info('SMS Sent', ['SMS Sent To' => $to,
                'SMS Content' => $textmessage
            ]);

    }


}
