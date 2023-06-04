<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * php artisan make:migration add_quantity_to_products_table --table=products
     * php artisan migrate
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('quantity')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('quantity');
        });
    }
};
