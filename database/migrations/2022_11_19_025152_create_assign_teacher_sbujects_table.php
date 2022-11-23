<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_teacher_sbujects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assign_teacher_id')->constrained('assign_teachers');
            $table->foreignId('subject_id')->constrained('subjects')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_teacher_sbujects');
    }
};
