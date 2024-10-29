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
        Schema::create('tickets_messages', function (Blueprint $table) {
            $table->id();
            $table->string('threadId')->unsigned()->nullable();
            $table->foreign('threadId')->references('id')->on('tickets'); 
            $table->integer('from')->unsigned()->nullable();
            $table->foreign('from')->references('id')->on('users'); 
            $table->string('title')->nullable();
            $table->longText('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets_messages');
    }
};
