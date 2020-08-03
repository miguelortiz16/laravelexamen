<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('producto', function (Blueprint $table) {
    
            $table->increments('SKU');
            $table->string('nombre');
            $table->string('idTiend');
            $table->string('descripcion');
            $table->string('	valor');
            $table->string('tienda');
            $table->string('imagen');
          
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
}
