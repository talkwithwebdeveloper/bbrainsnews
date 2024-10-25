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
		Schema::create('posts', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('content');
			$table->string('image');
			$table->boolean('active')->default(false);
			$table->boolean('allowed_comment')->default(true);
			$table->text('meta_title');
			$table->text('meta_description');
			$table->text('meta_keywords');
			$table->string('custom_header')->nullable();
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('posts');
	}
};
