<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('real_name')->nullable();
            $table->string('location')->nullable();
            $table->timestamp('profile_created')->nullable();
            $table->timestamp('last_online')->nullable();
            $table->boolean('banned')->default(0); // there is multiple bans, which one are we considering here?
            $table->timestamp('ban_date')->nullable();
            $table->bigInteger('steamid_64');
            $table->string('vanity_url')->nullable();
            $table->integer('steam_level')->nullable();
            $table->integer('profile_visibility');
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
        Schema::dropIfExists('bots');
    }
}
