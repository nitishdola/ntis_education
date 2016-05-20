<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 155);
            $table->string('father_name', 155);
            $table->string('sex', 15);
            $table->integer('course_id', false, true);
            $table->string('present_address', 255);
            $table->string('pin', 6); 
            $table->string('mobile_number', 10);
            $table->string('permanent_address', 255);
            $table->string('permanent_pin', 6); 
            $table->string('permanent_mobile_number', 10);
            $table->string('category');
            $table->date('dob');
            $table->string('religion', 50);
            $table->string('educational_qualification', 255);
            $table->string('year_of_passing', 4);
            $table->string('board', 50);
            $table->string('class', 50);
            $table->string('major', 150);
            $table->string('stream', 150);
            $table->date('apply_date');
            $table->string('photo', 127);

            $table->string('code_number', 127)->nullable();
            $table->string('center_name', 127)->nullable();
            $table->string('center_code', 50)->nullable();
            $table->string('student_code', 50)->nullable();
            $table->string('student_reg_number', 50)->nullable();
            $table->string('verified_by', 127);

            $table->tinyInteger('processed')->default(0);
            $table->tinyInteger('branch_apply')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applications');
    }
}
