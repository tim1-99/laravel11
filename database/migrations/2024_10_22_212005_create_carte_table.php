<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carte', function (Blueprint $table) {
            $table->id();
            //menu (varchar)
            $table->string('menu',25);
            //entrées (varchar)
         $table->string('entrées',70);
            //plats (varchar)
            $table->string('plats',100);
            //boissons (varchar)
            $table->string('boissons',80);
            //dessert(varchar)
            $table->string('dessert',60);
            //prix (varchar)
            $table->string('prix',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carte');
    }
};
