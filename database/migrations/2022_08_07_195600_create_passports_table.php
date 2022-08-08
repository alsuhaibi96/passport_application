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
        Schema::create('passports', function (Blueprint $table) {
            $table->id();
            $table->integer('applicationNumber');
            $table->integer('passportNumber');
            $table->string('nationality');
            $table->string('dateOfBirth');
            $table->string('sex');
            $table->string('countryOfBirth');
            $table->string('passportExpiryDate');
            $table->string('englishName');
            $table->string('arabicName');
            $table->string('sponsorName');
            $table->string('visaNumber');
            $table->string('visaIssueDate');
            $table->string('visaExpiryDate');
            $table->string('visaStatus');
            $table->integer('periodOfStay');
            $table->integer('numberOfEntries');
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
        Schema::dropIfExists('passports');
    }
};
