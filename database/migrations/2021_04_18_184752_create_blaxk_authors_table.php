<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_authors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("AuthorName");
            $table->String("AuthorPic");
            $table->String("AuthorDesc");
            $table->BigInteger("SiteId")->unsigned()->index();
            $table->foreign('SiteId')->references('id')->on('blaxk_sites')->onDelete('cascade');
            $table->Integer("ItemNum")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_authors');
    }
}
