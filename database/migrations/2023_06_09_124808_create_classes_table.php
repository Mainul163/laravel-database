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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('students_id');
            $table->integer('teacher_roll')->nullable();
            $table->string('c_email',50)->nullable();
            $table->timestamps();
            $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};



//* ********** error sloved  *****************

// Error name :  SQLSTATE[42S01]: Base table or view already exists

// solved error command : php artisan migrate:fresh