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
        Schema::create('about_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('about_id'); // Foreign key to 'headers'
            $table->string('locale');

            $table->string('title');
            $table->text('content');
            $table->string('about');
            $table->string('title2');
            $table->string('title3');
            $table->string('title4');
            $table->string('title5');
            $table->string('title6');
            $table->string('title7');
            $table->string('title8');
            $table->string('title9');
            $table->string('title10');
            $table->string('title11');
            $table->string('title12');
            $table->string('title13');

            $table->foreign('about_id')->references('id')->on('abouts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_translations');
    }
};
