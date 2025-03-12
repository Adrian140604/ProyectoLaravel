<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('articulos', function (Blueprint $table) {
            $table->renameColumn('Serie o Pelicular', 'serie_o_pelicula'); // Renombrar la columna
        });
    }
    
    public function down()
    {
        Schema::table('articulos', function (Blueprint $table) {
            $table->renameColumn('serie_o_pelicula', 'Serie o Pelicular'); // Revertir el cambio
        });
    }
    
};
