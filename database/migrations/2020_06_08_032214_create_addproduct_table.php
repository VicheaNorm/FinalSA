<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addproduct', function (Blueprint $table) {
            $table->id();
            $table->integer('productcode');
            $table->string('name');
            $table->string('category');
            $table->float('price');
            $table->date('date');
            $table->integer('qty');
            $table->float('cost');
            $table->integer('unit');
            $table->mediumText('image')->nullable();
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
        Schema::dropIfExists('addproduct');
    }
}
