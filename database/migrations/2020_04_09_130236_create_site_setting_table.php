<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->default('اسم الموقع')->nullable();
            $table->string('name')->default('siteName');
            $table->string('address')->default('address');
            $table->string('image')->default('default.png');
            $table->string('slider')->default('default.png');
            $table->string('value')->default('موقع عقارات');
            $table->integer('type')->default(0);
            $table->string('footer')->default('برمجه موقع عقارات');

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
        Schema::dropIfExists('site_setting');
    }
}
