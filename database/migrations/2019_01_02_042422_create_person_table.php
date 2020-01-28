<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('source')->nullable();
            $table->string('name')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_init')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->longText('overview')->nullable();
            $table->string('work_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('languages_known')->nullable();
            $table->string('organization')->nullable();
            $table->unsignedBigInteger('org_id')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('street_address_1')->nullable();
            $table->string('street_address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state_province')->nullable();
            $table->string('zip_postal')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('skills')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->uuid('uuid')->nullable();

           // $table->foreign('org_id')->references('id')->on('organization');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
        Schema::dropIfExists('person');
    }
}
