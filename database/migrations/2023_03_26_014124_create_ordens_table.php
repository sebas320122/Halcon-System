<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //2 establecer atributos
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('num_cliente');
            $table->unsignedInteger('num_factura');
            $table->String('empresa');
            $table->String('datos_fiscales');
            $table->String('direccion');
            $table->String('estado');
            //4.8 agregar fotos de carga y entrega
            //7.4 modificar atributos de fotos
            $table->String('foto_carga')->nullable();
            $table->String('foto_entrega')->nullable();

            $table->unsignedBigInteger('material_id'); 
            $table->foreign('material_id')
              ->references('id') 
              ->on('materials') 
              ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordens');
    }
};
