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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->text('descripcion')->nullable();
            $table->float('precio')->nullable();
            $table->string('cantidad')->nullable();
            // $table->text('usos')->nullable();
            // $table->text('preparacion')->nullable();
            // $table->text('beneficios')->nullable();
            // $table->text('cuidados')->nullable();
            // $table->string('ubicacion')->nullable();
            // $table->string('tiempo_germinacion')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
           
          $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
         $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
