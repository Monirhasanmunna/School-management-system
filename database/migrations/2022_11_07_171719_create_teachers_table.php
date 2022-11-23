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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->integer('branch_id')->nullable();
            $table->integer('designation_id')->nullable();
            $table->integer('instituition_id')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('gender')->nullable();
            $table->string('nid')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('joining_date')->nullable();
            $table->integer('blood_group')->nullable();
            $table->string('email')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('photo')->nullable();
            $table->string('socila_media_link')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};
