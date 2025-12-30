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
        Schema::create('committee_assigns', function (Blueprint $table) {
            $table->id();
            $table->integer("faculty_id");
            $table->integer("subject_id");
            $table->string("faculty_new_designation");
            $table->string("committee_sl_no");
            $table->integer("committee_id");
            $table->enum('status', ['0', '1', '2'])->comment('0 => Inactive, 1 => Active, 2 => Delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committee_assigns');
    }
};
