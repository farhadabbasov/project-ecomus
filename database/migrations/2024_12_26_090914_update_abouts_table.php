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
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('content');
            $table->dropColumn('about');
            $table->dropColumn('title2');
            $table->dropColumn('title3');
            $table->dropColumn('title4');
            $table->dropColumn('title5');
            $table->dropColumn('title6');
            $table->dropColumn('title7');
            $table->dropColumn('title8');
            $table->dropColumn('title9');
            $table->dropColumn('title10');
            $table->dropColumn('title11');
            $table->dropColumn('title12');
            $table->dropColumn('title13');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            //
        });
    }
};
