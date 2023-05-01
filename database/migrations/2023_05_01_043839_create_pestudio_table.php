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
        Schema::create('pestudios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semestre_id')->constrained()->onDelete('cascade');
            $table->foreignId('especialidade_id')->constrained()->onDelete('cascade');
            $table->string('asignatura');
            $table->string('asignatura_completa');
            $table->string('horas_semana');
            $table->string('clave_asignatura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('pestudios')) {
            Schema::table('pestudios', function (Blueprint $table) {
                $table->dropForeign('pestudios_semestre_id_foreign');
                $table->dropForeign('pestudios_especialidade_id_foreign');
                $table->dropColumn(['semestre_id', 'especialidade_id', 'asignatura', 'asignatura_completa', 'horas_semana', 'clave_asignatura']);
            });
            Schema::dropIfExists('pestudios');
        }
    }
};
