<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->constrained()->cascadeOnDelete();;
            $table->string('name');
            $table->string('email');
            $table->string('message');
            $table->string('donationAmount')->nullable();
            $table->boolean('workWithUs')->nullable();
            $table->boolean('getLegalAdvice')->nullable();
            $table->boolean('advirtiseWithUs')->nullable();
            $table->boolean('publishWithUs')->nullable();
            $table->boolean('takePicture')->nullable();
            $table->boolean('Donate')->nullable();
            $table->boolean('WatchEpisodes')->nullable();
            $table->boolean('butAbook')->nullable();
            $table->boolean('translate')->nullable();
            $table->boolean('other')->nullable();
            $table->string('transactionId');
            $table->string('paymentBrand');
            $table->string('amount');
            $table->string('currency');
            $table->string('result');
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
        Schema::dropIfExists('donate');
    }
};
