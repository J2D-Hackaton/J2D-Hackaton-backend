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
        Schema::create('multipolygons', function (Blueprint $table) {
            $table->id();
            $table->string('name_borough');
            $table->integer('code_borough');
            $table->string('name_district');
            $table->integer('code_district');
            $table->decimal('action_index', 10);
            $table->decimal('vegetation_index', 10);
            $table->integer('vulnerability_index');
            $table->text('coords');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
