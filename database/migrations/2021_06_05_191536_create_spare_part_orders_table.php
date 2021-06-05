<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSparePartOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spare_part_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('make_id')->nullable();
            $table->bigInteger('model_id')->nullable();
            $table->text('chassis_number')->nullable();
            $table->text('customer_name')->nullable();
            $table->text('customer_phone')->nullable();
            $table->text('customer_email')->nullable();
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
        Schema::dropIfExists('spare_part_orders');
    }
}
