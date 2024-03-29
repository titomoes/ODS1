<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecomendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recomends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('genery');
            $table->integer('hobby');
            $table->integer('travel');
            $table->integer('drink');
            $table->unsignedBigInteger('id_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recomends');
    }
}
