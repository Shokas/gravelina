<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();;
            $table->string('location');
            $table->float('distance')->nullable();;
            $table->float('elevation_gain')->nullable();
            $table->string('difficulty')->nullable();
            $table->string('type');
            $table->string('organizer');
            $table->string('website')->nullable();
            $table->string('registration_link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
