<?php

use App\Models\User;
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
        Schema::create('vocabularies', function (Blueprint $table) {
            $table->id();
            // Create a one to many relationship with users table
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('word');
            $table->string('translation');
            $table->string('meaning')->nullable();
            $table->string('synonym')->nullable();
            $table->string('antonym')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vocabularies');
    }
};
