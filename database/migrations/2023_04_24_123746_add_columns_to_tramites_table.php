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
        Schema::table('tramites', function (Blueprint $table) {
            $table->integer('folio');
            $table->string('nombre');
            $table->string('nombre_tutor');
            $table->integer('telefono_tutor');
            $table->foreignId('semestre_id')->constrained()->onDelete('cascade');
            $table->foreignId('grupo_id')->constrained()->onDelete('cascade');
            /*$table->foreignId('especialidade_id')->constrained()->onDelete('cascade');*/
            $table->integer('dias_laborales');
            $table->date('inicia_ausencia');
            $table->date('termina_ausencia');
            $table->text('motivo_inasistencia');
            $table->string('imagen');
            $table->integer('entregado')->default(1);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('tramites')) {
            Schema::table('tramites', function (Blueprint $table) {
                $table->dropForeign('tramites_especialidade_id_foreign');
                $table->dropForeign('tramites_grupo_id_foreign');
                $table->dropForeign('tramites_semestre_id_foreign');
                $table->dropForeign('tramites_user_id_foreign');
                $table->dropColumn(['folio', 'nombre', 'nombre_tutor', 'telefono_tutor', 'semestre_id', 'grupo_id', 
                'especialidade_id', 'dias_laborales', 'inicia_ausencia', 'termina_ausencia', 'motivo_inasistencia', 
                'imagen', 'entregado', 'user_id']);
            });

            Schema::dropIfExists('tramites');    

        }
        
    }
};
