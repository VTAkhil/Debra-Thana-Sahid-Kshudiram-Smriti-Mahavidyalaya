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
        Schema::create('facalty_registrations', function (Blueprint $table) {
            $table->id();
            $table->integer("department_id");
            $table->string("faculty_name");
            $table->string("faculty_qualification");
            $table->string("faculty_type");
            $table->string("faculty_designation");
            $table->string("faculty_mobile");
            $table->string("faculty_email");
            $table->integer("faculty_employeeId");
            $table->string("faculty_specilization");
            $table->string("faculty_area_of_research");
            $table->enum('status', ['0', '1', '2'])->comment('0 => Inactive, 1 => Active, 2 => Delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facalty_registrations');
    }
};
