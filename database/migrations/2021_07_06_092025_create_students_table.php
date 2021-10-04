<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('branch_id');
            $table->integer('batch_id');
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->string('address');
            $table->string('fathers_name');
            $table->string('fathers_number');
            $table->string('mothers_name');
            $table->string('image');
            $table->integer('course_id');
            $table->integer('education');
            $table->integer('session');
            $table->integer('b_group');
            $table->integer('nid');
            $table->integer('certificate');
            $table->integer('special_discount');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('students');
    }
}
