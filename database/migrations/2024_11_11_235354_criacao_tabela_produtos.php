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
            Schema::create('produtos', function(Blueprint $table) {
                $table->id();
                $table->string('nome');
                $table->text('descricao')->nullable();
                $table->string('tamanho')->nullable();
                $table->string('cor')->nullable();
                $table->decimal('preco', 8,2);
                $table->integer('quantidade');
                $table->string('imagem')->nullable();
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
        //
    }
};
