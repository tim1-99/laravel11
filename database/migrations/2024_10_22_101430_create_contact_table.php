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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            //titre M. Mme (enum)
            $table->enum('titre' , ['M.', 'Mme']);
            //nom (varchar)
            $table->string('nom',40);
            //prenom (varchar)
            $table->string('prenom',40);
            //mail(varchar)
            $table->string('email',100);
            //tel (varchar)
            $table->string('tel',20);
            //message (text)
            $table->text('message');
            //date de reservation (datetime)
            $table->dateTime('date_reservation');
            //nombre de personnes (int)
            $table->unsignedTinyInteger('nombre_personnes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
