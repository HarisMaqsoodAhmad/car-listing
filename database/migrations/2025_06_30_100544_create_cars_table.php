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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->decimal('price', 10, 2);
            $table->string('vin');
            $table->integer('mileage');
            $table->string('address', 255);
            $table->string('phone', 45);
            $table->longText('description')->nullable();
            $table->foreignId('car_type_id')->constrained('car_types')->onDelete('cascade');
            $table->foreignId('fuel_type_id')->constrained('fuel_types')->onDelete('cascade');
            $table->foreignId('city_id')->contrained('cities')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('maker_id')->constrained('makers')->onDelete('cascade');
            $table->foreignId('model_id')->constrained('models')->onDelete('cascade');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
