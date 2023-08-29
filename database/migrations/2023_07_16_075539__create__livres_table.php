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
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('livre_titre');
            $table->unsignedBigInteger('livre_categorie_id');
            $table->unsignedBigInteger('livre_subcategorie_id')->nullable();
            $table->unsignedBigInteger('livre_childsubcategorie_id')->nullable();
            $table->string('livre_auteur')->nullable();
            $table->string('livre_langue')->default('Française');
            $table->integer('livre_telecharegement')->default(0);
            $table->string('livre_page_garde');
            $table->string('livre_pdf');
            $table->text('livre_description');
            $table->foreign('livre_categorie_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('livre_subcategorie_id')
                ->references('id')
                ->on('subcategories')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('livre_childsubcategorie_id')
                ->references('id')
                ->on('childsubcategories')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
