<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFireIncidentsTable extends Migration
{
    public function up()
    {
        Schema::create('fire_incidents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('mobile_number');
            $table->string('gps_address');
            $table->text('description');
            $table->string('media_path')->nullable();
            $table->enum('status', ['new', 'assigned', 'on_the_way', 'in_progress', 'completed'])->default('new');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fire_incidents');
    }
}
