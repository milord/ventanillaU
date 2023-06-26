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
        Schema::table('certificados', function (Blueprint $table) {
            $table->string('imagen')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('certificados')) {
            Schema::table('certificados', function (Blueprint $table) {
                $table->dropForeign('certificados_user_id_foreign');
                $table->dropColumn(['imagen', 'user_id']);
            });
            Schema::dropIfExists('certificados');
        }
    }
};
