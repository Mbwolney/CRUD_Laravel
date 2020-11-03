<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable()->default(NULL);;
            $table->string('email')->nullable()->default(NULL);;
            $table->string('senha')->nullable()->default(NULL);;
            $table->string('dataNascimento')->nullable()->default(NULL);;
            $table->string('endereco')->nullable()->default(NULL);;
            $table->string('telefone')->nullable()->default(NULL);;
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
        Schema::dropIfExists('cadastros');
    }
}
