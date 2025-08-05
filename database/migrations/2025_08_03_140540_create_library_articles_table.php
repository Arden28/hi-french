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
        Schema::create('library_articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('library_categories')->onDelete('cascade');
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('cover')->nullable();
            $table->string('slug')->unique();
            $table->decimal('price', 12, 2)->nullable();
            $table->decimal('discount', 12, 2)->nullable()->default(0);
            $table->text('description')->nullable();
            $table->longText('content')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('library_articles');
    }
};
