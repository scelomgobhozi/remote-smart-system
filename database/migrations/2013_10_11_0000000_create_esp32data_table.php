<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsp32dataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esp32data', function (Blueprint $table) {
            $table->id();
            $table->float('Power')->default(12.080);
            $table->time('reading_time');
            $table->date('date');
            $table->float('Current')->default(0.015);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esp32data');
    }
}
