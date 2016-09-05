<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tracker'); #RGN..
            $table->string('barcode');
            # $table->string('accountability');
            $table->string('name');
            $table->string('brand');
            # $table->string('user_id');#name of the user
            # $table->string('borrowTime');#time
            # $table->string('returnTime');#time
            $table->string('status');
            $table->string('condition');
            $table->string('model');
            $table->string('resolution');
            $table->string('processor');
            $table->string('ram');
            $table->string('os');
            $table->string('chipset');
            $table->string('gpu');
            $table->string('bit');# x32/x64
            $table->string('screenSize');
            $table->string('graphics'); #hardware
            $table->string('internalStorage');
            $table->string('simSupport');
            $table->string('arrivalDate');
            $table->string('arrivalNotes');
            $table->string('mac');
            $table->string('serial');
            $table->string('assetType');
            $table->string('subAsset');
            $table->string('imei');
            $table->string('storageAllocation');
            $table->string('category');
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
        Schema::drop('assets');
    }
}
