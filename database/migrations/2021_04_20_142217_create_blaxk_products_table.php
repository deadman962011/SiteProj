<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ProductName');
            $table->integer('ProductPrice');
            $table->text('ProductDesc');
            $table->text('ProductBody');
            $table->string('ProductStatus');
            $table->bigInteger('SiteId')->unsigned()->index();
            $table->foreign('SiteId')->references('id')->on('blaxk_sites')->onDelete('cascade');
            $table->BigInteger('ProductCategory')->unsigned()->index();
            $table->foreign('ProductCategory')->references('id')->on('blaxk_categories')->onDelete('cascade');
            $table->BigInteger('ProductBrand')->unsigned()->index();
            $table->foreign('ProductBrand')->references('id')->on('blaxk_authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_products');
    }
}
