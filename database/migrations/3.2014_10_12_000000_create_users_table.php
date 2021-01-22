<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->unsignedInteger('cicle_id');
            $table->foreign('cicle_id')->references('id')->on('cicles');
            $table->boolean('actived')->default(false);
            $table->string('email')->unique();
            $table->date('email_verified_at')->nullable();
            $table->string('password');
            $table->text('type')->dafault('al');
            $table->integer('num_offer_applied');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
