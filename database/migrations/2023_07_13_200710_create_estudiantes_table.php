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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('paterno', 50);
            $table->string('materno', 50);
            $table->string('nombres', 50);
            $table->string('ci', 50);
            $table->string('zona', 100);
            $table->string('direccion', 100);
            $table->string('telefono', 20);
            $table->string('NomPadre', 50);
            $table->string('NomMadre', 50);
            $table->string('ocupacion', 200);

            $table->date('fecnac');
            $table->string('lugarnac', 200);
            $table->boolean('genero');
            $table->string('lugarEstu', 100);
            $table->string('email', 100);
            $table->smallInteger('añoEscolar');
            $table->smallInteger('añoBachiller');

            $table->unsignedBigInteger('asignacions_id');
            $table->foreign('asignacions_id')->references('id')->on('asignacions');









            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
