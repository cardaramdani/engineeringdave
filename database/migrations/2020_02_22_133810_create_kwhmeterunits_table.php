<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKwhmeterunitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwhmeterunits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Unit')->uniqid();
            $table->string('NoSeri')->uniqid();
            $table->string('Daya');
            $table->integer('StandAwal');
            $table->integer('StandAkhir');
            $table->date('TanggalBAST');
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
        Schema::dropIfExists('kwhmeterunits');
    }
}
