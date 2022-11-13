<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpreuvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('epreuve', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('lieu');
            $table->string('code');
            $table->timestamps();

            $table->unsignedBigInteger('codemat');
            $table->foreign('codemat')
                ->references('id')
                ->on('matiere')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epreuve');
    }
}
