<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userbook_id')->unsigned();
            $table->integer('owner_id')->unsigned();
            $table->integer('request_user_id')->unsigned();
            $table->timestamp('date_requested');
            $table->date('loan_start_date');
            $table->date('due_date');
            $table->timestamps();

            $table->foreign('owner_id')->references('user_id')->on('userbook');
            $table->foreign('userbook_id')->references('id')->on('userbook');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
