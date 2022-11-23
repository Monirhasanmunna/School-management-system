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
        Schema::create('admission_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ins_class_id')->constrained()->comment('class id');
            $table->string('gpa_name');
            $table->integer('range_from');
            $table->integer('range_to');
            $table->integer('gpa_point');
            $table->longText('comment')->nullable();
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
        Schema::dropIfExists('admission_grades');
    }
};
