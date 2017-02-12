<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // User interests
        Schema::table('user_interests', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('interest_id')->references('interest_id')->on('interests')->onDelete('cascade');
        });

        // Paths
        Schema::table('paths', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });

        // Matches
        Schema::table('matches', function (Blueprint $table) {
            $table->foreign('user_id_one')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('user_id_two')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // User interests
        Schema::table('user_interests', function (Blueprint $table) {
            $table->dropForeign('user_interests_user_id_foreign');
            $table->dropForeign('user_interests_interest_id_foreign');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('interest_id')->references('interest_id')->on('interests')->onDelete('cascade');
        });

        // Paths
        Schema::table('paths', function (Blueprint $table) {
            $table->dropForeign('paths_user_id_foreign');
        });

        // Matches
        Schema::table('matches', function (Blueprint $table) {
            $table->dropForeign('matches_user_id_one_foreign');
            $table->dropForeign('matches_user_id_two_foreign');
        });
    }
}
