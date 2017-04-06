<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('pseudo');
            $table->string('mdp');
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedTinyInteger('statut')
                ->default(1);
            $table->enum('civilite', ['m', 'f'])
                ->default('m');
            $table->string('email')->unique();
            $table->rememberToken();


            $table->timestamps(); // creer un champ created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
