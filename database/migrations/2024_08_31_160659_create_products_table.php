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
        Schema::create('products', function (Blueprint $table) {
            // id do registro, autoincrement e primary key
            $table->id();

            // Nome do porduto (name) - string
            $table->string('name');

            // Código do produto - string - não pode repetir (code)
            $table->string('code')->unique();

            // quantidade do produto - int - por default quantidade = 0
            $table->integer('quantity')->default(0);

            // observações sobre o produto - text - pode ser null (obs)
            $table->text('obs')->nullable();

            // quando o registro foi criado e quanto foi atualizado
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
        Schema::dropIfExists('products');
    }
};
