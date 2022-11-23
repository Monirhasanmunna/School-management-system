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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('institution_id');
            $table->integer('seller_id');
            $table->integer('running_package');
            $table->string('title');
            $table->string('domain');
            $table->string('eiin')->nullable();
            $table->string('principal_name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('district');
            $table->integer('upazila');
            $table->integer('address')->nullable();
            $table->enum('payment_method', ['online', 'offline']);
            $table->date('activation_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('institutions');
    }
};
