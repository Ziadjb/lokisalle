<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id')
                ->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade'); // no action, restrict, cascade, set null

            $table->unsignedInteger('salle_id')
                ->nullable();

            $table->foreign('salle_id')
                ->references('id')->on('salles')
                ->onDelete('cascade')
                ->onUpdate('cascade'); // no action, restrict, cascade, set null

            $table->text('commentaire')
                ->nullable();

            $table->unsignedInteger('note')
                ->nullable();

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
        Schema::dropIfExists('avis');
    }
}
