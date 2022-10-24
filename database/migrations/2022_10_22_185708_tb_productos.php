<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('tb_productos', function(Blueprint $table ){
            $table->bigincrements('id_producto');
            $table->string('nombre', 100);
            $table->string('descripcion', 100);
            $table->text('foto')->nullable();
            $table->decimal('precio_normal');
            $table->decimal('precio_rebajado');
            $table->boolean('cantidad');
            $table->boolean('id_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('tb_productos');
    }
}