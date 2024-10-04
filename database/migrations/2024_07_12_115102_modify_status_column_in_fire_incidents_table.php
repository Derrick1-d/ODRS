<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyStatusColumnInFireIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fire_incidents', function (Blueprint $table) {
            $table->string('status', 50)->change(); // Adjust the length as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fire_incidents', function (Blueprint $table) {
            $table->string('status', 20)->change(); // Revert back to original length if needed
        });
    }
}
