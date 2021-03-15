<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("start_station_id");
            $table->foreign("start_station_id")
                ->references("id")->on("stations")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->unsignedBigInteger("end_station_id");
            $table->foreign("end_station_id")
                ->references("id")->on("stations")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();


            $table->foreignId("price_id")
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->date("departure_date");
            $table->time("departure_time");

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
        Schema::dropIfExists('tickets');
    }
}
