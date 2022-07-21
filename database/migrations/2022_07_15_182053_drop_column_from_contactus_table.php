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
        Schema::table('contactus', function (Blueprint $table) {
            $table->dropColumn('workWithUs');
            $table->dropColumn('getLegalAdvice');
            $table->dropColumn('advirtiseWithUs');
            $table->dropColumn('publishWithUs');
            $table->dropColumn('takePicture');
            $table->dropColumn('Donate');
            $table->dropColumn('WatchEpisodes');
            $table->dropColumn('butAbook');
            $table->dropColumn('translate');
            $table->dropColumn('other');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactus', function (Blueprint $table) {
            //
        });
    }
};
