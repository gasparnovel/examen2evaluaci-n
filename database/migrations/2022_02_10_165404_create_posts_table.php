<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // Creamos un id foraneo
            $table->foreignId('user_id')->nullable()
                // referenciamos el id foraneo con el id de la tabla users
                ->constrained('users')
                // la actualizacion será en cascada
                ->cascadeOnUpdate()
                // la eliminacion convertirá en null
                ->nullOnDelete();
            // Añadimos informacion que recogeremos con el formulario
            $table->string('titulo', 50);
            $table->string('extracto', 50);
            $table->string('contenido', 50);
            $table->boolean('caducable')->default(0);
            $table->boolean('comentable')->default(0);
            $table->enum('acceso', ['privado', 'publico'])->nullable();
            $table->timestamps();  
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
