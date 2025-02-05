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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',20);
        });

        Schema::table('alumnos',function(Blueprint $table){
            $table->unsignedBigInteger('equipo_id');
            $table->foreign('equipo_id')->references('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alumnos',function(Blueprint $table){
            
            $table->dropForeign('equipo_id');
            
        });
        Schema::dropIfExists('equipos');
    }
};
