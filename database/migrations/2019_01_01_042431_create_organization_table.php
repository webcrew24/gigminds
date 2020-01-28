<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('source')->nullable();
            $table->string('name')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('industry')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('dba')->nullable();
            $table->string('other_names')->nullable();
            $table->string('sales_phone')->nullable();
            $table->string('support_phone')->nullable();
            $table->string('hr_phone')->nullable();
            $table->string('other_phone')->nullable();
            $table->string('street_address_1')->nullable();
            $table->string('street_address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state_province')->nullable();
            $table->string('zip_postal')->nullable();
            $table->string('country')->nullable();
            $table->string('sales_email')->nullable();
            $table->string('support_email')->nullable();
            $table->string('hr_email')->nullable();
            $table->string('other_email')->nullable();
            $table->string('website')->nullable();
            $table->string('domain')->nullable();
            $table->uuid('uuid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('organization');
    }
}
