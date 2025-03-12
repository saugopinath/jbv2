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
        Schema::create('incomplete_ben_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ben_id');
            $table->unsignedSmallInteger('incomplete_type');
            $table->foreign('ben_id')->references('ben_id')->on('beneficiary_personals')->name('ben_id_fk');
            $table->foreign('incomplete_type')->references('id')->on('codemasters')->name('incomplete_type_fk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomplete_ben_lists');
    }
};
