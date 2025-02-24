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
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('adress');
            $table->string('email');
            $table->string('pass');
            $table->string('phoneno');
            $table->string('currentliving');
            $table->string('confirmCL');
            $table->string('Adults');
            $table->string('total_child');
            $table->string('city_where_buy_house');
            $table->string('area_of_house');
            $table->enum('is_garage', array('0', '1'));
            $table->enum('is_seaview', array('0', '1'));
            $table->text('budget');
            $table->enum('is_renovated', array('0', '1'));
            $table->string('new_house_move_time');
            $table->string('want_help_from_broker');
            $table->text('more_info');
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
        Schema::dropIfExists('customers');
    }
}
