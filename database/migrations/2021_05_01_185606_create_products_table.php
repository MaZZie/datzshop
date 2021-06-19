<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_type_id')->constrained();
            $table->string('name');
            $table->string('slug');
            $table->decimal('price');
            $table->boolean('has_stock');
            $table->decimal('stock');
            $table->string('sku');
            $table->longText('description');
            $table->boolean('active')->default(false);
            $table->timestamp('active_from')->nullable();
            $table->timestamp('active_to')->nullable();
            $table->timestamp('preorder_from')->nullable();
            $table->timestamp('preorder_to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('variations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->string('name');
            $table->string('slug');
            $table->decimal('price');
            $table->boolean('has_stock');
            $table->decimal('stock');
            $table->string('sku');
            $table->longText('description');
            $table->boolean('active')->default(false);
            $table->timestamp('active_from')->nullable();
            $table->timestamp('active_to')->nullable();
            $table->timestamp('preorder_from')->nullable();
            $table->timestamp('preorder_to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('variant');
    }
}
