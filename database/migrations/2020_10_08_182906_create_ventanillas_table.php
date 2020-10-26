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
            $table->enum('estado',['Habilitada','Deshabilitada'])->default('Deshabilitada');
            $table->string('url')->nullable();
            $table->foreignId('sucursal_id')->references('id')->on('sucursals')->constrained()->onDelete('cascade');
            $table->timestamps();
        });


         //tabla pivote entre servicios y ventanillas
        Schema::create('servicio_ventanilla',function (Blueprint $table){
             $table->id();
             //ojo mas campos si se necesitan se agregan aqui. :)
             
             //relacion con blog y etiqueta muchos a muchos.
             $table->foreignId('servicio_id')->references('id')->on('servicios')->constrained()->onDelete('cascade');
             $table->foreignId('ventanilla_id')->references('id')->on('ventanillas')->constrained()->onDelete('cascade');
                          
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
