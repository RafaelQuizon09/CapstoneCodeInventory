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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id'); // Use bigIncrements for consistency
            $table->unsignedBigInteger('business_id');
            $table->foreign('business_id')->references('business_Id')->on('business')->onDelete('cascade');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_price');
            $table->string('product_category');
            $table->string('product_image');
            $table->string('product_expiry_date');
            $table->string('product_status');
            $table->string('amount_sold');
            $table->string('product_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
