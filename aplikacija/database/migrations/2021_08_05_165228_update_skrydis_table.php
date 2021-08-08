<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSkrydisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skrydis', function (Blueprint $table) {
            $table->dropColumn('laikas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skrydis', function (Blueprint $table) {
            $table->dateTime('laikas')->nullable()->after('vieta');
        });
    }
}
