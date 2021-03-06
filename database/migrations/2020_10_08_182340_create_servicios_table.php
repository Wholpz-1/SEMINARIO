<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('url')->nullable();   
            $table->enum('estado',['Habilitado','Deshabilitado'])->default('Deshabilitado');         
            $table->text('requisitos')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->foreignId('icono_id')->nullable()->references('id')->on('iconos')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('servicios');
    }
}
