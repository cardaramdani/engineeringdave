<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHydrantboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hydrantboxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nama');
            $table->string('jadwalpm');
            $table->string('planpm');
            $table->string('lokasi_unit');
            $table->string('item_no');
            $table->string('l1');
            $table->string('l2');
            $table->string('l3');
            $table->string('l4');
            $table->string('l5');
            $table->string('l6');
            $table->string('l7');
            $table->string('l8');
            $table->string('l9');
            $table->string('l10');
            $table->string('l11');
            $table->string('l12');
            
            $table->string('l1k1');
            $table->string('l2k2');
            $table->string('l3k3');
            $table->string('l4k4');
            $table->string('l5k5');
            $table->string('l6k6');
            $table->string('l7k7');
            $table->string('l8k8');
            $table->string('l9k9');
            $table->string('l10k10');
            $table->string('l11k11');
            $table->string('l12k12');
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
        Schema::dropIfExists('hydrantboxes');
    }
}
