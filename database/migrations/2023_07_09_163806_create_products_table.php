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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->double('price', 12, 2);
            $table->string('dimensi', 255);
            $table->unsignedBigInteger("type_id");
            $table->foreign("type_id")->references("id")->on("types");
            $table->unsignedBigInteger("brand_id");
            $table->foreign("brand_id")->references("id")->on("brands");
            $table->string("photourl", 300);
            $table->timestamps();
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
    }
}
