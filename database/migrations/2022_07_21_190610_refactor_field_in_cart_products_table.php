<?php

use App\Models\Cart;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RefactorFieldInCartProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('cart_products', 'cart_id'))
        Schema::table('cart_products', function (Blueprint $table) {
            $table->foreignIdFor(Cart::class, 'cart_id')->constrained()->onDelete('cascade');
        });

        if(Schema::hasColumn('cart_products', 'product_size'))
        Schema::table('cart_products', function (Blueprint $table) {
            $table->dropColumn('product_size');
        });

        if(Schema::hasColumn('cart_products', 'product_color'))
        Schema::table('cart_products', function (Blueprint $table) {
            $table->dropColumn('product_color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn('cart_products', 'cart_id'))
        Schema::table('cart_products', function (Blueprint $table) {
            $table->dropColumn('cart_id');
        });

        if(!Schema::hasColumn('cart_products', 'product_size'))
        Schema::table('cart_products', function (Blueprint $table) {
            $table->dropColumn('product_size');
        });

        if(!Schema::hasColumn('cart_products', 'product_color'))
        Schema::table('cart_products', function (Blueprint $table) {
            $table->string('product_color');
        });
    }
}
