<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2021_02_18_033909_create_service_materials_table.php
class CreateServiceMaterialsTable extends Migration
=======
class CreateStatusesTable extends Migration
>>>>>>> перезалил миграции:database/migrations/2021_02_21_103932_create_statuses_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_02_18_033909_create_service_materials_table.php
        Schema::create('service_materials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->references('id')->on('services');
            $table->bigInteger('material_id')->references('id')->on('materials');
=======
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('statusName');
>>>>>>> перезалил миграции:database/migrations/2021_02_21_103932_create_statuses_table.php
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
<<<<<<< HEAD:database/migrations/2021_02_18_033909_create_service_materials_table.php
        Schema::dropIfExists('service_materials');
=======
        Schema::dropIfExists('statuses');
>>>>>>> перезалил миграции:database/migrations/2021_02_21_103932_create_statuses_table.php
    }
}
