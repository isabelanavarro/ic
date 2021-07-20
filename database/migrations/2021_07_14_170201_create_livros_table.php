<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
 
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            /*Auth::user()->id;*/

            $table->text('namel');
            $table->string('autor');
            $table->string('editora');
            $table->string('categoria');
            $table->string('classificação');
            $table->text('descricao');
            $table->string('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
