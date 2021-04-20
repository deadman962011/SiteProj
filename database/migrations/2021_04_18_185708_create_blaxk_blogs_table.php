<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("BlogTitle");
            $table->text("BlogBody");
            $table->text('BlogDesc');
            $table->BigInteger("BlogCategory")->unsigned()->index();
            $table->foreign('BlogCategory')->references('id')->on('blaxk_categories')->onDelete('cascade');
            $table->BigInteger("BlogAuthor")->unsigned()->index();	
            $table->foreign('BlogAuthor')->references('id')->on('blaxk_authors')->onDelete('cascade');
            $table->BigInteger("SiteId")->unsigned()->index();
            $table->foreign('SiteId')->references('id')->on('blaxk_sites')->onDelete('cascade');
            $table->Integer("ViewNum");
            $table->String("BlogTags");
            $table->String('BlogThumb');
            $table->Integer('BlogStatus');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_blogs');
    }
}
