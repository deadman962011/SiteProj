<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkPdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_pdfs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('BookName');
            $table->String('BookPic');
            $table->String("BookLink");
            $table->BigInteger("BlaxkCategory")->unsigned()->index();
            $table->foreign('BlaxkCategory')->references('id')->on('blaxk_categories')->onDelete('cascade');
            $table->BigInteger("BlaxkAuthor")->unsigned()->index();
            $table->foreign('BlaxkAuthor')->references('id')->on('blaxk_authors')->onDelete('cascade');
            $table->String("BookReview");
            $table->Text("BookDesc");
            $table->String("BookLang");
            $table->Integer("BookPagesNum");
            $table->Integer("BookSize");
            $table->String("BookRelaseDate");
            $table->Integer("ViewsNum");
            $table->Integer("DownloadsNum");
            $table->Integer("BookStatus");
            $table->String("BookFile");
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
        Schema::dropIfExists('blaxk_pdfs');
    }
}
