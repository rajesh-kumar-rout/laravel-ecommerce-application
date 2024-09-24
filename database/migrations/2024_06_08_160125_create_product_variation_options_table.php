<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_variation_options', function (Blueprint $table) {
            $table->foreignId('product_attribute_option_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('product_variation_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_variation_options');
    }
};