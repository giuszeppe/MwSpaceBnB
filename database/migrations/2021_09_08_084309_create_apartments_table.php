<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->integer('numero_stanze');
            $table->integer('numero_bagni');
            $table->integer('numero_letti');
            $table->integer('metri_quadrati');
            $table->string('indirizzo');
            $table->string('immagine');
            $table->boolean('active')->default(1);
            $table->decimal('latitude', 8, 6)->default(0);
            $table->decimal('longitude', 9, 6)->default(0);
            //comma separated value of additional services
            $table->text('servizi_aggiuntivi')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
