<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paths', function (Blueprint $table) {

            $table->increments('path_id');
            $table->string('name', 24);
            $table->integer('user_id')->unsigned()->index();
            $table->enum('transport', ['subway', 'bus', 'shortdistancetrain']);
            $table->integer('from')->unsigned();
            $table->integer('to')->unsigned();
            $table->string('line', 50);
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
        Schema::dropIfExists('paths');
    }
}
