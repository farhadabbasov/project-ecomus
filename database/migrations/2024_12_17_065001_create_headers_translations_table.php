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
        Schema::create('headers_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('header_id'); // Foreign key to 'headers'
            $table->string('locale');
            $table->string('title');
            $table->timestamps();

            $table->foreign('header_id')->references('id')->on('headers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers_translations');
    }
};
