<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_ads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("AdName");
            $table->String("AdImage");
            $table->String("AdStatus")->default(0);
            $table->String("AdValue")->nullable();
            $table->String("AdView");
            $table->String("AdClick");
            $table->BigInteger("SiteId")->unsigned()->index();
            $table->foreign('SiteId')->references('id')->on('blaxk_sites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_ads');
    }
}
