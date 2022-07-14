<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Product;
use App\Models\Category;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('categories', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->unsignedBigInteger('parent_id');
        //     $table->timestamps();
        // });

        // Schema::create('category_product', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
        //     $table->foreignIdFor(Product::class)->constrained()->cascadeOnDelete();
        //     $table->timestamps();
        // });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->timestamps();
        });

        // Schema::create('category_product', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
        //     $table->foreignIdFor(Product::class)->constrained()->cascadeOnDelete();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('category_product');
        Schema::dropIfExists('categories');
    }
}
