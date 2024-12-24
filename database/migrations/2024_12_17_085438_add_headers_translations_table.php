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
        Schema::table('headers_translations', function (Blueprint $table) {
            $table->unsignedBigInteger('header_id'); // Foreign key to 'headers'
            $table->string('locale');
            $table->string('title');

            $table->foreign('header_id')->references('id')->on('headers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('headers_translations', function (Blueprint $table) {
            //
        });
    }
};
