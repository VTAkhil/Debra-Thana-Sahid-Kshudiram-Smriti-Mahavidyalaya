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
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            $table->string("download_title");
            $table->date("download_date");
            $table->integer("subject_id");
            $table->string("download_file")->nullable();
            $table->string("download_link")->nullable();
            $table->string("download_value");
            $table->enum('status', ['0', '1', '2'])->comment('0 => Inactive, 1 => Active, 2 => Delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('downloads');
    }
};
