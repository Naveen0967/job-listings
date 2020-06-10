<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->unsignedInteger('user_id');

            $table->foreign('user_id', 'user_id_fk_47617121')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
