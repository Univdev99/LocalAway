<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stylists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stylist_type');
            $table->string('location');
            $table->integer('work_hour');
            $table->string('stylist_name');
            $table->string('stylist_email');
            $table->string('resume');
            $table->string('coverletter');
            $table->string('linkedin');
            $table->string('relevant_link1');
            $table->string('relevant_link2');
            $table->string('relevant_link3');
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
        Schema::dropIfExists('stylists');
    }
}
