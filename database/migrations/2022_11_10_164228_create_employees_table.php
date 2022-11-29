<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('celular')   ->nullable();
            $table->string('setor');
            $table->string('ramal');
            $table->string('email1')    ->nullable();
            $table->string('email2')    ->nullable();
            $table->string('email3')    ->nullable();
            $table->string('email4')    ->nullable();
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
        Schema::dropIfExists('employees');
    }
};
