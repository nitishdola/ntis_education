<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('father_name');
            $table->integer('course_id');
            $table->string('address');
            $table->string('pin', 6);
            $table->string('mobile_number',10);
            $table->date('dob');
            $table->string('form');
            $table->string('student_code');
            $table->string('branch_name');
            $table->string('apply_date');
            $table->tinyInteger('status')->default(1);
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
        Schema::drop('branch_applications');
    }
}
