<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditStylistTableSecond extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stylists', function (Blueprint $table) {
            $table->string('stylist_name')->nullable()->change();
            $table->string('stylist_email')->nullable()->change();
            $table->string('resume')->nullable()->change();
            $table->string('coverletter')->nullable()->change();
            $table->string('relevant_link1')->nullable()->change();
            $table->string('relevant_link2')->nullable()->change();
            $table->string('relevant_link3')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
