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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('sport',25);
            $table->string('club',80);
            $table->integer('salary')->nullable();
            $table->boolean('active');
            $table->date('date_of_birth');
            $table->integer('total_goals');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athletes');
    }
};
