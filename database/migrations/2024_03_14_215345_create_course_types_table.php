<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTypesTable extends Migration
{
    public function up()
    {
        Schema::create('course_types', function (Blueprint $table) {
            $table->string('category_id', 50)->primary();
            $table->string('category_name', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_types');
    }
}
