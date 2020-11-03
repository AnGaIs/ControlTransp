<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skuses', function (Blueprint $table) {
            $table->string('id_code');
            $table->string('description')->nullable();
            $table->string('family')->nullable();
            $table->string('peso')->nullable();
            $table->string('alt')->nullable();
            $table->string('lgr')->nullable();
            $table->string('cpm')->nullable();
            $table->string('cbg')->nullable();
            $table->string('paletization')->nullable();
            $table->string('qtdepallet')->nullable();
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
        Schema::dropIfExists('skuses');
    }
}
