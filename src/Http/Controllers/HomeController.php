<?php

namespace EONConsulting\EmailSMS\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EONConsulting\LaravelLTI\Http\Controllers\LTIBaseController;


class HomeController extends LTIBaseController
{


  protected $hasLTI = false;

    public function _construct() 
    {
$this ->middleware('guest');
    }

    public function index()
    {
    	 return view ('ph::mail.home');
    	// echo PHPStencil::output(); 
    	// echo phpstencil()->output();
    	// return view ('mail.sendnewemail');

    }
    public function sms()
    {
        return view('ph::sms.sendnewsms');

    }

  public function store()
    {
        return view('ph::sms.sendnewsms');

    }


} 
