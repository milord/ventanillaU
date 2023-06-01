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
            $table->foreignId('modalidade_id')->constrained()->onDelete('cascade');
            $table->boolean('tipo_solicitud');
            $table->string('nombre_alumno');
            $table->string('telefono_movil');
            $table->string('correo');
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
                $table->dropColumn(['tipo_solicitud', 'nombre_alumno', 'telefono_movil', 'correo']);
            });
            Schema::dropIfExists('certificados');
        }
    }
};
