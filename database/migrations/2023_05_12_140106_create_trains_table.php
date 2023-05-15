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
        Schema::create('trains', function (Blueprint $table) {
            // $table->id();
            $table->string('agency', 50);
            $table->string('leaving_station', 50);
            $table->string('arrival_station', 50);
            $table->time('leaving_time');
            $table->time('arrival_time');
            $table->unsignedTinyInteger('train_code');
            $table->unsignedTinyInteger('wagon_number');
            $table->string('on_time', 3);
            $table->string('cancelled', 3);
            $table->date('train_date');

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
        Schema::dropIfExists('trains');
    }
};
