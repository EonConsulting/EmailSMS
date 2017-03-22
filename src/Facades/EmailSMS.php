<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/28
 * Time: 9:02 AM
 */

namespace Packages\EmailSMS\src\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class EmailSMS
 * @package Packages\EmailSMS\src\Facades
 */
class EmailSMS extends Facade {

    /**
     * @return string
     */
    public static function getFacadeAccessor() {
        return 'emailsms';
    }

}