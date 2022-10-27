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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default('Pendiente');
            $table->unsignedBigInteger('sesion_id');
            $table->unsignedBigInteger('collaborator_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('sesion_id')->on('sesions')->references('id')->onDelete('cascade');
            $table->foreign('collaborator_id')->on('collaborators')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitations');
    }
};
