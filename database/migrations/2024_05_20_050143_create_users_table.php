<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            // $table->id();
            // $table->bigInteger('user_id'); 
            $table->unsignedBigInteger('user_id')->nullable();

            // $table->unsignedBigInteger('user_id')->default(0);

            //here generate a column named id Primary key

            $table->string('name',50); //the string method creates a varcher equiivalent column of the given length.

            $table->date('date_of_birth');

            $table->boolean('status')->default(1)->comment('1:Active,0:Inactive');

            $table->timestamps(); //here is two columns named created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
