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
        Schema::create('platillo_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingrediente_id');
            $table->unsignedBigInteger('platillo_id');
            $table->timestamps();

            $table -> foreign('platillo_id') -> references('id')->on('platillos');
            $table -> foreign('ingrediente_id') -> references('id')->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platillo_ingredientes');
    }
};
