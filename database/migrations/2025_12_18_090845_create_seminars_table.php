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
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->integer("faculty_id");
            $table->integer("subject_id");
            $table->string("seminar_title");
            $table->string("enter_level");
            $table->string("organiser");
            $table->string("invited_speaker");
            $table->string("wheather_present_paper");
            $table->string("paper_title");
            $table->string("seminar_link")->nullable();
            $table->string("seminar_file")->nullable();
            $table->enum('status', ['0', '1', '2'])->comment('0 => Inactive, 1 => Active, 2 => Delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminars');
    }
};
