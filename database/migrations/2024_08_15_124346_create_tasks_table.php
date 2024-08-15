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
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->enum('status', ['approved', 'progress', 'canceled']);
            $table->date('start_date');
            $table->date('end_date');
            $table->uuid('categorie_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('categorie_id')->references('id')->on('categories')->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
