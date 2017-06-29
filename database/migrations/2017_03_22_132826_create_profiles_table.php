<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->text('about');
            $table->text('skills');

            // business data
            $table->string('job_title');
            $table->string('company');
            $table->string('business_email');


            // personal data
            $table->string('phone1');
            $table->string('phone2');

            $table->string('address1');
            $table->string('address2');

            $table->string('facebook');
            $table->string('twitter');

            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
