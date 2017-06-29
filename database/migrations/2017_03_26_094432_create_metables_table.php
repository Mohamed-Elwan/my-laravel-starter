<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metables', function (Blueprint $table) {
            $table->integer('meta_id')->unsigned();
            $table->integer('metable_id')->unsigned();
            $table->integer('metable_type')->unsigned();

            $table->timestamps();

            $table->primary(['meta_id', 'metable_id', 'metable_type']);
            $table->foreign('meta_id')->references('id')->on('metas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metables');
    }
}
