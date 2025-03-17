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
        Schema::create('ben_incomplete_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ben_id')->nullable();
            $table->unsignedSmallInteger('incomplete_type')->nullable();
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
        Schema::dropIfExists('ben_incomplete_details');
    }
};
