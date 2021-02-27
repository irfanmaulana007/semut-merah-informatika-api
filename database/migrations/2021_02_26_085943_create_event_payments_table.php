<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('payment_status_id')->unsigned();
            $table->string('registrant_code');
            $table->integer('amount');
            $table->string('note')->nullable();
            $table->date('payment_date');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        
        Schema::table('event_payments', function($table) {
            $table->foreign('payment_status_id')->references('id')->on('payment_status')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('registrant_code')->references('code')->on('event_registrants')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_payments');
    }
}
