<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_sites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('SiteName');
            $table->String('SiteType');
            $table->Integer('PlanType');
            $table->String('SiteUser');
            $table->String('ClientToken');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_sites');
    }
}
