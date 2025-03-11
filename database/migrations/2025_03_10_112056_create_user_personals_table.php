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
        Schema::create('user_personals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('full_name_as_in_aadhar')->nullable();
            $table->string('picture')->nullable();
            $table->date('date_hired')->nullable();
            $table->unsignedSmallInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->name('department_fk');
            $table->foreignId('user_id')->constrained()->index();
            $table->smallInteger('is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_personals');
    }
};
