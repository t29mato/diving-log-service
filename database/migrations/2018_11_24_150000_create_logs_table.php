<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->bigInteger('spot_id');
            $table->bigInteger('point_id');
            $table->bigInteger('instructor_id');
            $table->integer('entry_pressure');
            $table->integer('exit_pressure');
            $table->string('weather_type');
            $table->integer('wave_height');
            $table->string('tide_type');
            $table->string('wind_type');
            $table->string('gas_type');
            $table->string('tank_type');
            $table->integer('visibility');
            $table->integer('temperature');
            $table->integer('water_temperature');
            $table->timestamp('entried_at');
            $table->timestamp('exited_at');
            $table->integer('max_depth');
            $table->integer('average_depth');
            $table->integer('weight');
            $table->integer('tank_volume');
            $table->integer('altitude');
            $table->text('memo');
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
        Schema::dropIfExists('logs');
    }
}
