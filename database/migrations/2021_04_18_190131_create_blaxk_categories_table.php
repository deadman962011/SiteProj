<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("CategoryName");
            $table->String("CategoryIcon");
            $table->bigInteger("SiteId")->unsigned()->index();
            $table->foreign('SiteId')->references('id')->on('blaxk_sites')->onDelete('cascade');
            $table->Integer("ItemNum")->default(0);
            $table->String('CategoryColor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_categories');
    }
}
