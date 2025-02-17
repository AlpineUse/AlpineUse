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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['general', 'plugin'])->default('general');
            $table->foreignId('plugin_id')->nullable();

            $table->string('title')->nullable();
            $table->longText('body')->nullable();
            $table->longText('url')->nullable();

            $table->enum('status', ['active', 'non-active'])->default('non-active');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
