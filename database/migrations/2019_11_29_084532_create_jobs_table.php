<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference_id');
            $table->string('city', 255);
            $table->string('zip_postal')->nullable;
            $table->string('state_province')->nullable;
            $table->string('query', 255);
            $table->string('title', 2000);
            $table->string('company', 2000);
            $table->string('location', 255);
            $table->longtext('summary');
            $table->string('salary', 255);
            $table->string('url', 2000);
            $table->string('posting_date', 255);
            $table->longtext('details');
            $table->string('keywords_frequency', 2000);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('source')->nullable(); // Internal, Scraped, Tenant
            $table->string('type')->nullable(); // full-time, part-time, contracting
            $table->smallInteger('hourly_rate')->nullable();
            $table->unsignedBigInteger('org_id')->nullable();
            $table->uuid('uuid')->nullable();

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
        Schema::dropIfExists('jobs');
    }
}
