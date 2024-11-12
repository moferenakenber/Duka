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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customerFirstName');
            $table->string('customerLastName');
            $table->string('city')->nullable();
            $table->string('customerEmail')->unique();
            $table->string('customerPhoneNo');
            //$table->string('customerCreatedBy');
            $table->unsignedBigInteger('user_id'); // Foreign key column
            // Reference to the user who created the customer
            //$table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
