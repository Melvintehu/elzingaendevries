<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 55)->nullable();
            $table->mediumText('body')->nullable();
            $table->integer('page_id')->unsigned();

            // cms related columns
            $table->integer('page_position')->nullable();

           $table->foreign('page_id')
                  ->references('id')
                  ->on('pages')
                  ->onDelete('cascade');
                  
            $table->softDeletes();
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
        Schema::table('sections', function (Blueprint $table) {
           $table->dropForeign('sections_page_id_foreign');
           $table->dropColumn('page_id');

        });
        Schema::drop('sections');
    }
}