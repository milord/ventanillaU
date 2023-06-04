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
        Schema::create('certificados', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_solicitud');
            $table->foreignId('modalidade_id')->constrained()->onDelete('cascade');
            $table->string('no_control');
            $table->string('especialidad');
            $table->foreignId('turno_id')->constrained()->onDelete('cascade');
            $table->string('nombre_alumno');
            $table->string('curp');
            $table->string('telefono');
            $table->string('correo');
            $table->string('folio_pago');
            $table->string('bachillerato_doc');
            $table->string('secundaria_doc');
            $table->string('nacimiento_doc');
            $table->string('curp_doc');
            $table->string('pago_doc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('certificados')) {
            Schema::table('certificados', function (Blueprint $table) {
                $table->dropForeign('certificados_modalidade_id_foreign');
                $table->dropForeign('certificados_turno_id_foreign');
                $table->dropColumn(
                    [
                        'tipo_solicitud', 
                        'no_control', 
                        'especialidad', 
                        'nombre_alumno', 
                        'curp', 
                        'telefono', 
                        'correo', 
                        'folio_pago',
                        'bachillerato_doc',
                        'secundaria_doc',
                        'nacimiento_doc',
                        'curp_doc',
                        'pago_doc'
                    ]);
            });
            Schema::dropIfExists('certificados');
        }
    }
};
