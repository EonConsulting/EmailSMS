<?php

namespace EONConsulting\PHPStencil\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use EONConsulting\PHPStencil\Http\Requests\MailFormValidationRequest;
use EONConsulting\PHPStencil\Http\Requests\SmsFormValidationRequest;
use Session;
use Mail;
use EONConsulting\PHPStencil\Mail\Reminder;
use Log;
use DB;
use EONConsulting\LaravelLTI\Http\Controllers\LTIBaseController;
//use EONConsulting\PHPStencil\Http\Controllers\MailController;

class MailController extends LTIBaseController
{

 protected $hasLTI = false;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function _construct() 
    {
       $this ->middleware('guest');
    }
    public function index()
    {
        return view('ph::mail.sendnewemail');
      //  return view('sms.sendnewsms');

    }
 public function sms()
    {
        return view('ph::sms.sendnewsms');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ph::sms.sendnewsms');
    }
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendmail(MailFormValidationRequest $request, \Illuminate\Mail\Mailer $mailer)
    {

        
if($request->has('message') && ($request->has('email')))
{

$mailer->to($request->email)
           ->queue(new \EONConsulting\PHPStencil\Mail\Reminder($request->subject));
           Log::useDailyFiles(storage_path().'/logs/Emails.log');
 Log::info('Emails Sent',   ['Email Sent To'=>$request->email,
                            'Subject'=>$request->subject,
                            'Email Content'=>$request->message
                            ]);

   Session::flash('flashmessage', 'Email sent successfuly.');
           return redirect('mail');
}


    }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendsms (SmsFormValidationRequest $request)
    {
        
if($request->has('textmessage') && ($request->has('to')))
{

      $to   =  $request->to;
     // $from = $request->from;
      $from = '27731510003';
      $text = $request->textmessage;
$date = new \DateTime;
 $nexmo = app('Nexmo\Client');
 $nexmo->message()->send([
 
    'to'   =>$to,
    'from' =>$from,
    'text' =>$text
    
 // return view('welcome');
   
 
]);
 // inserting the message into the database  
DB::insert("INSERT INTO sms_log (sent_on,phone_number,message) VALUES (?, ?, ?)", array(
            $date,
            $to,
            $text
            
        ));
// writing to the log file 
 Log::useDailyFiles(storage_path().'/logs/SMS.log');
 Log::info('SMS Sent',   ['SMS Sent To'=>$request->to,
                          'SMS Content'=>$request->textmessage
                            ]);


   Session::flash('flashmessage', 'Sms sent successfuly.');
    return redirect('sms');
}

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kusender() 
    {
        
    }
}
