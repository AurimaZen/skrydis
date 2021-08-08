<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlyLocationDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fly_location_date', function (Blueprint $table) {
            $table->id();
            $table->string('laikas', 50)->nullable(false)->index();
            $table->string('vieta', 50)->nullable(false)->index();
            $table->string('busena', 50)->nullable(false)->index();
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
        Schema::dropIfExists('fly_location_date');
    }
}
