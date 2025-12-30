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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->integer("faculty_id");
            $table->integer("subject_id");
            $table->string("publications_paper_title");
            $table->string("publications_name");
            $table->date("publications_date");
            $table->string("publications_category");
            $table->string("published_in");
            $table->string("volume");
            $table->string("issn_no");
            $table->string("publications_paper_link");
            $table->string("publications_file")->nullable();
            $table->string("publications_link")->nullable();
            $table->string("sort_by");
            $table->enum('status', ['0', '1', '2'])->comment('0 => Inactive, 1 => Active, 2 => Delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
