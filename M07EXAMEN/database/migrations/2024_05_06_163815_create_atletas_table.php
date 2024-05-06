<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtletasTable extends Migration
{
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(false);
            $table->string('cognoms')->nullable(false);
            $table->unsignedBigInteger('club_id');
            $table->timestamps();

            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('atletas');
    }
}
