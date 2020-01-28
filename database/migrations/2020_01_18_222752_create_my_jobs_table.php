<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('source')->nullable();
            $table->string('name')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('person_id')->nullable();
            $table->boolean('initiate_sourcing');
            $table->boolean('send_automated_emails');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->uuid('uuid')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('person_id')->references('id')->on('person');
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_jobs');
    }
}
