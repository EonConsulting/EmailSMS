<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lti_sms_log', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('sent_on');
            $table->string('phone_number');
            $table->text('message');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lti_sms_log');
    }
}
