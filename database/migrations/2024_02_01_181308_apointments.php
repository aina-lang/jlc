<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apointments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->dateTime('date');
            $table->string('startHours');
            $table->string('endHours');
            $table->string('state');
            $table->foreignId('clients_id')->references('id')->on('clients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('telepros_id')->references('id')->on('telepros')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apointments');
    }
};
