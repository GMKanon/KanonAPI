<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->id();
            
            $table->text('type');
            $table->text('serial_number');
            $table->text('description');
            $table->text('fixed_or_movable');
            $table->text('picture_path');
            $table->text('purchase_date');
            $table->text('start_use_date');
            $table->text('purchase_price');
            $table->text('warranty_expiry_date');
            $table->text('degradation_in_years');
            $table->text('current_value_in_naira');
            $table->text('location');

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
        Schema::dropIfExists('asset');
    }
}
