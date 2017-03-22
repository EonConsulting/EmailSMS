<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/28
 * Time: 9:36 AM
 */

namespace EONConsulting\EmailSMS\src\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyTable
 * @package EONConsulting\PHPStencil\src\Models
 */
class EmailSMS extends Model {

    public $incrementing = true;
    protected $table = 'lti_sms_log';
    protected $primaryKey = 'id';
    protected $fillable = ['sent_on', 'phone_number', 'message'];

}