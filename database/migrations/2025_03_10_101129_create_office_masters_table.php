<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use App\Models\Codemaster;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('office_masters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('zip')->nullable();;
            $table->timestamps();
            $table->unsignedSmallInteger('office_type');
            $table->unsignedSmallInteger('state_id');
            $table->unsignedSmallInteger('district_id')->nullable();
            $table->unsignedSmallInteger('subdivisions_id')->nullable();
            $table->unsignedInteger('municipalitiy_id')->nullable();
            $table->unsignedInteger('ward_id')->nullable();
            $table->unsignedSmallInteger('block_id')->nullable();
            $table->unsignedInteger('panchayat_id')->nullable();
            $table->foreign('office_type')->references('id')->on('codemasters')->name('office_type_key');
            $table->foreign('state_id')->references('id')->on('states')->name('state_id_fk');
            $table->foreign('district_id')->references('id')->on('districts')->name('district_id_fk');
            $table->foreign('subdivisions_id')->references('id')->on('subdivisions')->name('subdivisions_id_fk');
            $table->foreign('municipalitiy_id')->references('id')->on('municipalitiy_id')->name('municipalitiy_id_fk');
            $table->foreign('ward_id')->references('id')->on('wards')->name('ward_id_fk');
            $table->foreign('block_id')->references('id')->on('blocks')->name('block_id_fk');
            $table->foreign('panchayat_id')->references('id')->on('panchayats')->name('panchayat_id_fk');

            $table->smallInteger('is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_masters');
    }
};
