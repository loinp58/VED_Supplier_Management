<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('department');
            $table->integer('user_id')->unsigned();
            $table->timestamp('create_day');
            $table->string('status_complete');
            $table->timestamp('deadline_complete');
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('request_orders');
    }
}
