<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkCustsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_custs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('CustFullName');
            $table->String('CustUserName');
            $table->String('CustMail');
            $table->String('CustPass');
            $table->integer('CustStatus')->default(0);
            $table->String('CustActiveToken');
            $table->String('CustCountry');
            $table->String('CustAddress');
            $table->bigInteger('SiteId')->unsigned()->index();
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
        Schema::dropIfExists('blaxk_custs');
    }
}
