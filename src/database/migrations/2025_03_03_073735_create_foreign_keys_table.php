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
        Schema::table('departments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('departments_id')->references('id')->on('departments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('statuses_id')->references('id')->on('statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('priorities_id')->references('id')->on('priorities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('labels_id')->references('id')->on('labels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('cannedReplies_id')->references('id')->on('canned_replies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
        Schema::dropIfExists('tickets');

    }
};