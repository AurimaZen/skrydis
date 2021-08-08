<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkrydisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skrydis', function (Blueprint $table) {
            $table->id();
            $table->string('kodas', 100)->nullable()->index();
            $table->string('vardas', 50)->nullable();
            $table->string('pastas', 50)->nullable(false);
            $table->string('telefonas', 50)->nullable(false);
            $table->string('vieta', 50)->nullable()->index();
            $table->string('laikas', 50)->nullable()->index();
            $table->enum('busena',\App\Models\Skrydis::STATES);
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
        Schema::dropIfExists('skrydis');
    }
}
