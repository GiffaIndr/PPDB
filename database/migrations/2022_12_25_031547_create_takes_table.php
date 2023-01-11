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
        Schema::create('takes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bank');
            $table->string('pemilik');
            $table->string('nominal');
            $table->string('bukti')->nullable();
            $table->date('done_time')->nullable();
            $table->enum('status', ['proses', 'validasi', 'tolak'])->default('proses');
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
        Schema::dropIfExists('takes');
    }
};
