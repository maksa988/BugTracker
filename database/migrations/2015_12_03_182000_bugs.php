<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->increments('bug_id');
            $table->string('bug_name');
            $table->integer('bug_status');            
            $table->text('bug_text');            
            $table->integer('user_id');   
            $table->timestamp('bug_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bugs');
    }
}
