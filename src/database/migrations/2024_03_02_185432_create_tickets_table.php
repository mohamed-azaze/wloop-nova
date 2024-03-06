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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('subject');
            $table->unsignedBigInteger('departments_id');
            $table->unsignedBigInteger('statuses_id');
            $table->unsignedBigInteger('priorities_id');
            $table->string('body');
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
        Schema::dropIfExists('tickets');
    }
};