<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_lines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ref')->index();
            $table->integer('quantity');
            $table->double('price',8,3);
            $table->foreignId('command_id');
            $table->foreign('command_id')->references('id')->on('commands');
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
        Schema::dropIfExists('command_line');
    }
}
