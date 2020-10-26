<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->date('fecha_finalizada')->nullable();
            $table->enum('estado',['Solicitada','Cancelada','Terminada','Proceso','Confirmada'])->default('Solicitada');
            $table->string('descripcion')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->foreignId('sucursal_id')->references('id')->on('sucursals')->constrained()->onDelete('cascade');
            $table->foreignId('ventanilla_id')->references('id')->on('ventanillas')->constrained()->onDelete('cascade');
            $table->foreignId('servcio_id')->references('id')->on('servicios')->constrained()->onDelete('cascade');
            $table->foreignId('horaventanilla_id')->references('id')->on('horaventanillas')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('citas');
    }
}
