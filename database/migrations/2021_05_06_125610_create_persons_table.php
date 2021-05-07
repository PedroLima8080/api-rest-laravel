<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('cpf', 14)->unique();
            $table->string('cep', 10);
            $table->string('street', 100);
            $table->string('neighborhood', 100);
            $table->string('city', 100);
            $table->string('house_number', 10);
            $table->string('phone', 15);
            $table->timestamps();
        });
    }
    /**
     * 
     */
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
