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
        Schema::create('serves', function (Blueprint $table) {
            $table->id();
            $table->string('server_name');
            $table->text('Status');
            $table->char('IP');
            $table->string('Password');
            $table->foreignId('domain_id')->constrained('serves')->cascadeOnDelete();

            $table->date('DueDate');
            $table->date('datecreation');
            $table->integer('Price');
            $table->foreignId('provider_id')->constrained('providers')->cascadeOnDelete();
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
        Schema::dropIfExists('serves');
    }
};
