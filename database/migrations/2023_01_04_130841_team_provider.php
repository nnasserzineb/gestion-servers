<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('team_provider', function (Blueprint $table) {
            $table->id();
        $table->foreignId('team_id')->constrained()->onDelet('cascade');
      $table->foreignId('provider_id')->constrained()->onDelet('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('team_provider');
    }
};
