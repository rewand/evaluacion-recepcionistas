<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recepcionista_id')->constrained('recepcionistas');
            $table->integer('amabilidad');
            $table->integer('eficiencia');
            $table->integer('presentacion');
            $table->integer('conocimiento_menu');
            $table->integer('tiempo_espera');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluaciones');
    }
};
