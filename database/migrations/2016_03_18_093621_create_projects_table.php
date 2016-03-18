<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('author_name');
            $table->string('author_address');
            $table->string('author_email');
            $table->string('author_phone')->nullable();
            $table->string('contact_name');
            $table->string('contact_address');
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->longText('identity_card');
            $table->string('category', 255);
            $table->longText('context');
            $table->longText('application');
            $table->longText('goals');
            $table->longText('informations');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('status')->default(0)->unsigned();
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
        Schema::drop('projects');
    }
}
