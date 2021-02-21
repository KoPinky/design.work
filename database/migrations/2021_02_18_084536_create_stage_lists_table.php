<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_lists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_order_id')->references('id')->on('services_order');
            $table->bigInteger('stage_id')->references('id')->on('stages');
            $table->string('status')->references('id')->on('statuses');;
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
        Schema::dropIfExists('stage_lists');
    }
}
