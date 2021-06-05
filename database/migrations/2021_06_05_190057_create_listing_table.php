<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id')->nullable();
            $table->bigInteger('model_id')->nullable();
            $table->bigInteger('series_id')->nullable();
            $table->text('year_of_manufacture')->nullable();
            $table->text('description')->nullable();
            $table->text('price')->nullable();
            $table->text('engine_size')->nullable();
            $table->text('images')->nullable();
            $table->text('mileage')->nullable();
            $table->bigInteger('insurance_listing_id')->nullable();
            $table->bigInteger('color_id')->nullable();
            $table->bigInteger('listing_type_id')->nullable();
            $table->bigInteger('transmission_id')->nullable();
            $table->bigInteger('fuel_type_id')->nullable();
            $table->bigInteger('body_type_id')->nullable();
            $table->bigInteger('duty_type_id')->nullable();
            $table->bigInteger('interior_listing_id')->nullable();
            $table->bigInteger('exterior_listing_id')->nullable();
            $table->bigInteger('feature_listing_id')->nullable();
            $table->bigInteger('performance_listing_id')->nullable();
            $table->bigInteger('contact_id')->nullable();
            $table->text('number_of_passengers')->nullable();
            $table->bigInteger('driver_style_id')->nullable();
            $table->bigInteger('performance_type_id')->nullable();
            $table->bigInteger('service_listing_id')->nullable();
            $table->bigInteger('listing_status_id')->nullable();
            $table->timestamp('date_posted')->nullable();
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
        Schema::dropIfExists('listing');
    }
}
