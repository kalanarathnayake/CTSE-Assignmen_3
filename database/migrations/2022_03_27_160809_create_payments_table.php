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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('nic');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('bank');
            $table->string('dob');
            $table->integer('card_number' );
            $table->string('name_on_card');
            $table->double('amount');
            $table->string('address');
            $table->integer('cvc');
            $table->string('expire_year');
            $table->string('expire_month');
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
        Schema::dropIfExists('payments');
    }
};
