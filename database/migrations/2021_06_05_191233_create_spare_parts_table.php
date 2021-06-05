<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSparePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spare_parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->text('images')->nullable();
            $table->bigInteger('spare_part_type_id')->nullable();
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
        Schema::dropIfExists('spare_parts');
    }
}
