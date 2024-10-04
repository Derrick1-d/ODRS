<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRemarksToFireIncidentsTable extends Migration
{
    public function up()
    {
        Schema::table('fire_incidents', function (Blueprint $table) {
            $table->string('remarks')->nullable()->after('status');
        });
    }

    public function down()
    {
        Schema::table('fire_incidents', function (Blueprint $table) {
            $table->dropColumn('remarks');
        });
    }
}


