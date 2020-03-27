<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('receive_alert')->nullable();

            /////////////////// Basic /////////////////////////////
            $table->string('gender')->nullable();
            $table->integer('height_feet')->nullable();
            $table->integer('height_inch')->nullable();
            $table->string('age_range')->nullable();
            $table->date('capsule_date')->nullable();
            $table->string('ship_type')->nullable();
            $table->string('reservation_name')->nullable();
            $table->string('hotel_name')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->date('checkin')->nullable();
            $table->date('checkout')->nullable();
            $table->string('events')->nullable();

            /////////////////// Sizing ////////////////////////////
            $table->string('body_type')->nullable();
            $table->string('casual_shirt_size')->nullable();
            $table->string('casual_fit')->nullable();
            $table->string('buttonup_blouse_size')->nullable();
            $table->string('buttonup_blouse_fit')->nullable();
            $table->string('bra_size')->nullable();
            $table->string('bra_cup')->nullable();
            $table->string('dress_shirt_size')->nullable();
            $table->string('dress_shirt_collar_fit')->nullable();
            $table->string('dress_shirt_shoulder_fit')->nullable();
            $table->string('pant_waist_fit')->nullable();
            $table->string('pant_rise')->nullable();
            $table->string('pant_fit')->nullable();
            $table->string('pant_size')->nullable();
            $table->string('skirt_size')->nullable();
            $table->string('dress_style')->nullable();
            $table->string('waist_size')->nullable();
            $table->string('shorts_length')->nullable();
            $table->string('shoe_size')->nullable();

            //////////////////// Style ////////////////////////////////
            $table->string('style')->nullable();
            $table->string('dislike_color')->nullable();
            $table->string('dislike_material')->nullable();
            $table->string('dislike_pattern')->nullable();

            //////////////////// Almost done /////////////////////////
            $table->string('capsule')->nullable();
            $table->string('capsule_spend')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('notes')->nullable();
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
        //
    }
}
