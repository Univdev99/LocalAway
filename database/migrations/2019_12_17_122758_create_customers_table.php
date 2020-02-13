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
            $table->string('hear_us')->nullable();
            $table->string('dress')->nullable();
            $table->string('gender')->nullable();
            $table->boolean('metric')->nullable();
            $table->integer('height_feet')->nullable();
            $table->integer('height_inch')->nullable();
            $table->boolean('mother')->nullable();
            $table->string('women_body_type')->nullable();
            $table->string('photo')->nullable();
            $table->string('casual_shirts')->nullable();
            $table->string('button_up_shirts')->nullable();
            $table->string('bra')->nullable();
            $table->string('waist')->nullable();
            $table->string('inseams')->nullable();
            $table->string('jeans')->nullable();
            $table->string('skirt')->nullable();
            $table->string('dress_style')->nullable();
            $table->string('shorts')->nullable();
            $table->string('shoe')->nullable();
            $table->string('men_body_type')->nullable();
            $table->string('dislike_color')->nullable();
            $table->string('dislike_material')->nullable();
            $table->string('dislike_pattern')->nullable();
            $table->string('capsule')->nullable();
            $table->string('capsule_spend')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('notes')->nullable();
            $table->string('plan')->nullable();
            $table->string('card_number')->nullable();
            $table->string('expiration_date')->nullable();
            $table->string('cvv')->nullable();
            $table->string('paypal')->nullable();
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
