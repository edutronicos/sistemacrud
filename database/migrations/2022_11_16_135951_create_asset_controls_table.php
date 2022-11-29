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
        Schema::create('asset_controls', function (Blueprint $table) {
            $table->id();
            $table->string('grupo');
            $table->string('setor');
            $table->string('codigo');
            $table->string('produto');
            $table->string('marca')->nullable();
            $table->string('cor')->nullable();
            $table->string('perifericos')->nullable();
            $table->date('data_entrada');
            $table->text('descricao')->nullable();
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
        Schema::dropIfExists('asset_controls');
    }
};
