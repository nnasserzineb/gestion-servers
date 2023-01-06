<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('team_provider', function (Blueprint $table) {
            $table->increments('id');
            $table->bigIncrements('id');
        $table->string('team_id');
        $table->foreign('team_id')
              ->references('id')
              ->on('teams')->onDelete('cascade');
       $table->string('provider_id');
      $table->foreign('provider_id')
              ->references('id')
              ->on('providers')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('team_provider');
    }
};
