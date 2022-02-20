<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('file_in', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("user_id");
            $table->unsignedInteger("workplace_id");
            $table->foreign("user_id")->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("workplace_id")->references('id')->on('workplaces')->onDelete("cascade")->onUpdate("cascade");
            $table->string("entry_date");
            $table->string("departure_date");
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
        Schema::dropIfExists('file_in');
    }
}
