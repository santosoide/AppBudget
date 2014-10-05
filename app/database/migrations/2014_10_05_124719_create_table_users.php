<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->engine = 'MyISAM';

            $table->string('_id', 36);
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('password');
            $table->string('remember_token')->nullable()->default(NULL);
            $table->string('activation_code')->nullable()->default(NULL);
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_active')->default(0);
            $table->string('organisasi_id', 36);
            $table->timestamps();
            $table->primary('_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('users');
    }

}
