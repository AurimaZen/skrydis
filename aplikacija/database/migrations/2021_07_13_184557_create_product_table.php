<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('kodas', 10)->nullable()->index();
            $table->string('pavadinimas', 50)->nullable();
            $table->string('aprasymas', 500)->nullable();
            $table->string('paveikslelis', 500)->nullable();
            $table->integer('kaina')->nullable();
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
        Schema::dropIfExists('interface');
    }
}
