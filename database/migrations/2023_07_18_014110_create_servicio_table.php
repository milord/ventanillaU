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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('nombres_alumno');
            $table->string('domicilio');
            $table->integer('cp');
            $table->foreignId('especialidade_id')->constrained()->onDelete('cascade');
            $table->date('inicia_servicio');
            $table->date('termina_servicio');
            $table->integer('entregado')->default(1);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('servicios')) {
            Schema::table('servicios', function (Blueprint $table) {
                $table->dropForeign('servicios_especialidade_id_foreign');
                $table->dropForeign('servicios_user_id_foreign');
                $table->dropColumn(['apaterno', 'amaterno', 'nombres_alumno', 'domicilio', 'cp', 'especialidade_id',
                'inicia_servicio', 'termina_servicio', 'entregado', 'user_id']);
            });
            Schema::dropIfExists('servicios');
    
        }
    }
};
