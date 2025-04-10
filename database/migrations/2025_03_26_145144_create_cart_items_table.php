<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User's Cart
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Product
            $table->string('storage')->default('Default Storage'); // Storage Option (e.g., 128GB, 256GB)
            $table->integer('quantity')->default(1); // Quantity
            $table->decimal('price', 10, 2); // Product Price
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
};
