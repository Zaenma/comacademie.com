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
        Schema::create('childsubcategories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcategorie_id');
            $table->string('childsubcategorie_nom');
            $table->text('childsubcategorie_description')->nullable();
            $table->string('childsubcategorie_slug')->unique();
            $table->enum('childsubcategorie_status', ['active', 'inactive'])->default('active');
            $table->foreign('subcategorie_id')
                ->references('id')
                ->on('subcategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childsubcategories');
    }
};