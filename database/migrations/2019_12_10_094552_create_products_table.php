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
            $table->bigIncrements('id');
            $table->string('product_title');
            $table->longText('product_details');
            $table->longText('product_details_ban');
            $table->string('product_photo');

            $table->integer('product_id');
            $table->string('title');
            $table->longText('dis');
            $table->string('titleBan');
            $table->longText('disBan');

            $table->string('title');
            $table->longText('dis');
            $table->string('titleBan');
            $table->longText('disBan');


            $table->softDeletes();
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
