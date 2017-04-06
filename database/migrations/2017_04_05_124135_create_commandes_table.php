<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id')
                ->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade'); // no action, restrict, cascade, set null

            $table->unsignedInteger('produit_id')
                ->nullable();

            $table->foreign('produit_id')
                ->references('id')->on('produits')
                ->onDelete('restrict')
                ->onUpdate('cascade'); // no action, restrict, cascade, set null

            $table->timestamps();

            Schema::enableForeignKeyConstraints();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('commandes');
    }
}
