<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('setting_key');
            $table->string('setting_value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('website_settings');
    }
}
