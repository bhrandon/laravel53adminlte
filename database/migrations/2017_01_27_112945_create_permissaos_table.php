<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissaosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('permissaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('label', 200);
            $table->timestamps();
        });
        
        Schema::create('permissao_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permissao_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('permissao_id')
                    ->references('id')
                    ->on('permissao')
                    ->onDelete('cascade');

            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('permissao_role');
        Schema::dropIfExists('permissaos');
    }

}
