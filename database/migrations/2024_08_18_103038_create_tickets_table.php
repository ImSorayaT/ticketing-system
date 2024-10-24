<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TicketsStatus;
use App\Enum\TicketStatus;
use App\Enum\TicketPriority;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('status', array_column(TicketStatus::cases(), 'value'))->default(TicketStatus::Open->value);
            $table->enum('priority', array_column(TicketPriority::cases(), 'value'))->default(TicketPriority::Medium->value);
            $table->integer('requester')->unsigned();
            $table->foreign('requester')->references('id')->on('users'); 
            $table->integer('assignee')->unsigned()->nullable();
            $table->foreign('assignee')->references('id')->on('users'); 
            $table->longText('request_content');
            $table->string('threadId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
