<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 55)->nullable();
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->string('residence')->nullable();
            $table->integer('discipline_id')->unsigned()->nullable();
            $table->string('client', 55)->nullable();
            // $table->softDeletes();
            $table->timestamps();
        });

        // foreign key
        Schema::table('projects', function($table) {
            // $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}