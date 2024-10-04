<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFireIncidentsTable extends Migration
{
    public function up()
    {
        Schema::table('fire_incidents', function (Blueprint $table) {
            // Ensure gps_address is nullable
            $table->string('gps_address')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('fire_incidents', function (Blueprint $table) {
            // Revert gps_address to non-nullable
            $table->string('gps_address')->nullable(false)->change();
        });
    }
}
