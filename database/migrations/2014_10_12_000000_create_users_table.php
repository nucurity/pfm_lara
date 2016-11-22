<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('categoryId');
            $table->string('categoryName');
        });

        Schema::create('debits', function (Blueprint $table) {
            $table->increments('debitId');
            $table->integer('debitUserId')->unsigned()->default(0);
            $table->string('debitName');
            $table->integer('debitCategoryId')->unsigned()->default(0);
            $table->integer('debitAmount');
            $table->timestamps();
            $table->foreign('debitUserId')->references('id')->on('users');
            $table->foreign('debitCategoryId')->references('categoryId')->on('categories');
        });

        Schema::create('credits', function (Blueprint $table) {
            $table->increments('creditId');
            $table->integer('creditUserId')->unsigned()->default(0);
            $table->string('creditName');
            $table->integer('creditCategoryId')->unsigned()->default(0);
            $table->integer('creditAmount');
            $table->timestamps();
            $table->foreign('creditUserId')->references('id')->on('users');
            $table->foreign('creditCategoryId')->references('categoryId')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
