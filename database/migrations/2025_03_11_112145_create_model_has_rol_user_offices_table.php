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
        Schema::create('model_has_rol_user_office_mappings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('office_id');
            $table->unsignedSmallInteger('user_scheme_id');
            $table->foreign('user_id')->references('id')->on('users')->name('user_id_fk');
            $table->foreign('office_id')->references('id')->on('office_masters')->name('office_id_fk');
            $table->foreign('user_scheme_id')->references('id')->on('user_scheme_mappings')->name('user_scheme_id_fk');
            $table->smallInteger('is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_has_rol_user_office_mappings');
    }
};
