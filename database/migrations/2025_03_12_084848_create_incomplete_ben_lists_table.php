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
            $table->bigInteger('ben_id');
            $table->SmallInteger('scheme_id');
            $table->SmallInteger('incomplete_type');
            $table->foreign('ben_id','ben_id_fk')->references('id')->on('beneficiary_idserials');
            $table->foreign('scheme_id','scheme_id_fk')->references('id')->on('schemes');
            $table->foreign('incomplete_type','incomplete_type_fk')->references('id')->on('codemasters');
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
