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
        // database/migrations/xxxx_create_group_course_table.php
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Clave primaria automática
            $table->string('course_key')->unique();
            $table->string('course_name');
            $table->foreignId('parent_course_id') // ⬅ Nombre correcto para autorreferencia
                  ->nullable()
                  ->constrained('courses'); // Referencia a la misma tabla
            $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
