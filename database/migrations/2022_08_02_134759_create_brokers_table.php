<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brokers', function (Blueprint $table) {
            $table->id();
            $table->string('bc_name');
            $table->string('bc_number');
            $table->string('b_city');
            $table->string('b_name');
            $table->string('b_pass');
            $table->string('b_sname');
            $table->string('b_email');
            $table->string('b_phoneno');
            $table->string('is_member_of_fmi');
            $table->string('b_working_area');
            $table->string('b_customer_area');
            $table->enum('is_approved', array('0', '1'));
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
        Schema::dropIfExists('brokers');
    }
};
