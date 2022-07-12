<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_di_partenza', 40);
            $table->string('stazione_di_arrivo', 40);
            $table->date('data_partenza');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->unsignedSmallInteger('codice_treno');
            $table->unsignedTinyInteger('num_carrozze');
            $table->float('prezzo_biglietto', 2, 2);
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
}
