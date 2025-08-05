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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->json('what_you_learn')->nullable();
            $table->decimal('video_hours', 5, 2)->default(0);
            $table->foreignId('instructor_id')->constrained('users')->onDelete('cascade');
            $table->float('rating', 2, 1)->default(0);
            $table->integer('review_count')->default(0);
            $table->integer('student_count')->default(0);
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('original_price', 10, 2)->nullable();
            $table->unsignedTinyInteger('discount_percent')->nullable();
            $table->boolean('certificate')->default(true);
            $table->integer('resource_count')->default(0);
            $table->string('thumbnail')->nullable();
            $table->enum('type', ['self-paced', 'private', 'group', 'club', 'podcast', 'workshop'])->default('self-paced');
            $table->enum('level', ['beginner', 'intermediate', 'advanced'])->default('beginner');
            $table->string('language')->default('Swahili');
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
