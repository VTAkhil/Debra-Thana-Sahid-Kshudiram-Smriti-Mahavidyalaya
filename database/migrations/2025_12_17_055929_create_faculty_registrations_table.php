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
        Schema::create('faculty_registrations', function (Blueprint $table) {
            $table->id();
            $table->string("faculty_name");
            $table->string("faculty_email");
            $table->string("faculty_mobile");
            $table->string("year_of_passing");
            $table->string("faculty_institute");
            $table->string("subject_id");
            $table->string("faculty_designation");
            $table->string("faculty_type");
            $table->string("faculty_employee_id");
            $table->string("faculty_specialization");
            $table->string("area_of_research");
            $table->string("faculty_image");
            $table->enum('status', ['0', '1', '2'])->comment('0 => Inactive, 1 => Active, 2 => Delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_registrations');
    }
};
