<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address',255);
            $table->string('city',75);
            $table->string('code',75);
            $table->string('country',75);
            $table->string('logo',75);
            $table->timestamp('created_by');
            $table->timestamp('deleted_at');
            $table->string('name',255);
            $table->timestamp('deleted_by',255);
            $table->string('description',255);
            $table->string('email',255);
            $table->string('fax',255);
            $table->string('location',255);
            $table->string('phone',75);
            $table->string('province',255);
            $table->string('rating',255);
            $table->string('website',255);
            $table->string('zipcode',255);
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
        Schema::dropIfExists('company');
    }
}
