<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {

            $table->bigincrements('id');
            $table->string('pTitle');
            $table->string('pDescription');
            $table->integer('pPrice');
            $table->string('pAvailability');
            $table->string('pCategory');
            $table->string('pManufacturer');
            $table->string('pChipset');
            $table->string('pSize');
            $table->string('pResolution');
            $table->string('pScreenSize');
            $table->string('pPanelType');
            $table->string('pRefreshRate');
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
        Schema::dropIfExists('items');
    }
}
