<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('course_code', 10)->primary();
            $table->string('course_name_thai', 100);
            $table->string('course_name_english', 100);
            $table->integer('credits');
            $table->string('year', 100);
            $table->string('category_id', 50);
            $table->string('branch_id', 50);
            $table->unsignedBigInteger('professor_id');
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('course_types');
            $table->foreign('branch_id')->references('branch_id')->on('branches');
            $table->foreign('professor_id')->references('professor_id')->on('professors');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}