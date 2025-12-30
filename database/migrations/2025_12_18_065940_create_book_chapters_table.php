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
        Schema::create('book_chapters', function (Blueprint $table) {
            $table->id();
            $table->integer("faculty_id");
            $table->integer("subject_id");
            $table->string("paper_title");
            $table->string("chapter_name");
            $table->year("publications_date");
            $table->string("volume");
            $table->string("isbn_no");
            $table->string("paper_link")->nullable();;
            $table->string("sort_by");
            $table->string("chapter_link")->nullable();;
            $table->string("chapter_file")->nullable();;
            $table->enum('status', ['0', '1', '2'])->comment('0 => Inactive, 1 => Active, 2 => Delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_chapters');
    }
};
