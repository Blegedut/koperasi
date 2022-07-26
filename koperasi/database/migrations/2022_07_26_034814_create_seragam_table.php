<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seragam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('ukuran', ['S', 'M', 'XL', 'XXL', 'XXXL']);
            $table->date('tanggal');
            $table->enum('jenis', ['kemeja', 'pramuka', 'olahraga', 'koko', 'batik']);
            $table->string('harga');
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
        Schema::dropIfExists('seragam');
    }
};
