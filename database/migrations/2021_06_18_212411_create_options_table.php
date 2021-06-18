<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_type_id')->constrained();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('option_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_id')->constrained();
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('option_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('option_value_variation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_value_id')->constrained();
            $table->foreignId('variation_id')->constrained();
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
        Schema::dropIfExists('options');
    }
}
