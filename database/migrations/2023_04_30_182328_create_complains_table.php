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
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->date('complaint_date');
            $table->longText('complaint_description');
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->date('resolved_date')->nullable();
            $table->longText('resolution_description')->nullable();
            $table->timestamps();
            $table->foreign('assigned_to')->on('support_teams')->references('id')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complains');
    }
};
