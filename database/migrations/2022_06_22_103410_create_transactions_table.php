<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('cart_id')->nullable();
            $table->unsignedBigInteger('cart_detail_id')->nullable();
            $table->unsignedBigInteger('perpustakaan_id')->nullable();
            $table->foreign('perpustakaan_id')->references('id')->on('perpustakaans');
            $table->foreign('cart_detail_id')->references('id')->on('cart_details');
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('total_deposito', 12, 2)->default(0);
            $table->string('status_pembayaran');
            $table->string('no_invoice');
            $table->date('tanggal_pengembalian');
            $table->integer('counter');
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
        Schema::dropIfExists('transactions');
    }
}
