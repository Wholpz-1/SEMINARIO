<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventanillas', function (Blueprint $table) {
            $table->id();
            $table->string('ventanilla')->nullable();
            $table->string('estado')->nullable();

            $table->foreignId('servcio_id')->references('id')->on('servicios')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('ventanillas');
    }
}
