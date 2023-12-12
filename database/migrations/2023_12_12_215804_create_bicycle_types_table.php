<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBicycleTypesTable extends Migration
{
    public function up()
    {
        Schema::create('bicycle_types', function (Blueprint $table) {
            // Use PHP's multiline syntax correctly
            $table->id();
            $table->string('short_name')->unique();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bicycle_types');
    }
}
