<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocs', function (Blueprint $table) {
            $table->string('code');
            $table->string('description');
            $table->string('qtdesolic');
            $table->string('street');
            $table->string('ua');
            $table->string('lote');
            $table->string('family');
            $table->string('cubt');

            
            $table->integer('r_auth')->nullable();
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
        Schema::dropIfExists('ocs');
    }
}
