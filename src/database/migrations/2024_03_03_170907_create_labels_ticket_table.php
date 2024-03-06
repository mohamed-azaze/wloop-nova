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
        Schema::create('labels_ticket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id')->nullable();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->unsignedBigInteger('departments_id')->nullable();
            $table->unsignedBigInteger('statuses_id')->nullable();
            $table->unsignedBigInteger('priorities_id')->nullable();
            $table->unsignedBigInteger('labels_id')->nullable();
            $table->unsignedBigInteger('cannedReplies_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labels_ticket');
    }
};