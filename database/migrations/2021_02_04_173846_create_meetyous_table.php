<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetyousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetyous', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('goal_fisrt')->nullable();
            $table->text('goal_second')->nullable();
            $table->text('goal_third')->nullable();

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
        Schema::dropIfExists('meetyous');
    }
}
