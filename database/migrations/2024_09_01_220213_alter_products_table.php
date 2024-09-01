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
        // Acessar a tabela "products", e nela criar uma coluna "min_quantity""
        Schema::table('products', function(Blueprint $table) {
            $table->integer('min_quantity') // nome da coluna
                ->default(1) // valor default
                ->after('quantity'); //depois da coluna quantity
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Faz a exclusão desta coluna.
        Schema::table('products', function(Blueprint $table){
            $table->dropColumn('min_quantity');
        });
    }
};
