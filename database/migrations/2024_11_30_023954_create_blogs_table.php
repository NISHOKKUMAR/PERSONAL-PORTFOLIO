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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("author");

            // Define the user_id column as a foreign key
            $table->unsignedBigInteger('user_id')->nullable(); // unsigned integer column for user_id
            // Add the foreign key constraint
            $table->foreign('user_id') // reference the user_id column
                ->references('id')    // reference the 'id' column in the users table
                ->on('users')         // on the 'users' table
                ->onDelete('cascade'); // if a user is deleted, delete the associated blog posts

            $table->string("tags");
            $table->text('content');
            $table->string("image");
            $table->string('slug')->unique(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
