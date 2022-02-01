<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetAssignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_assignment', function (Blueprint $table) {
            $table->id();

            $table->text('asset_id');
            $table->text('assignment_date');
            $table->text('status');
            $table->text('is_due');
            $table->text('due_date');
            $table->text('assigned_user_id');
            $table->text('assigned_by');
            
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
        Schema::dropIfExists('asset_assignment');
    }
}
