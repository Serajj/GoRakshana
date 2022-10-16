<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('tamil_month')->nullable();
            $table->string('star')->nullable();
            $table->string('rasi')->nullable();
            $table->string('gothram')->nullable();
            $table->string('paksham')->nullable();
            $table->string('thidi')->nullable();
            $table->date('tamil_date')->nullable();
            $table->string('husband_star')->nullable();
            $table->string('husband_rasi')->nullable();
            $table->string('husband_gothram')->nullable();
            $table->string('wife_star')->nullable();
            $table->string('wife_rasi')->nullable();
            $table->string('name')->nullable();
            $table->string('go_pooja_reason')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('event_type')->nullable();
            $table->string('address')->nullable();
            $table->boolean('reminded')->default(false);
            
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
        Schema::dropIfExists('events');
    }
}
