<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonWorkHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_work_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('source')->nullable();
            $table->string('name')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('person_id')->nullable();
            $table->unsignedBigInteger('org_id')->nullable();
            $table->smallInteger('start_mm')->nullable();
            $table->smallInteger('start_yyyy')->nullable();
            $table->smallInteger('end_mm')->nullable();
            $table->smallInteger('end_yyyy')->nullable();
            $table->string('job_title')->nullable();
            $table->longtext('job_description')->nullable();
            $table->uuid('uuid')->nullable();

            $table->foreign('person_id')->references('id')->on('person');
            $table->foreign('org_id')->references('id')->on('organization');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_work_history');
    }
}
