<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null');
            $table->string('nama_perpustakaan');
            $table->string('alamat_perpustakaan');
            $table->string('Kota')->nullable();
            $table->string('phonenumber_perpustakaan')->nullable();
            $table->string('email_perpustakaan')->unique();
            $table->string('link_google_maps')->nullable();
            $table->string('status_donasi')->nullable();
            $table->string('deskripsi_perpustakaan')->nullable();
            $table->string('foto_perpustakaan')->nullable();
            $table->string('dokumen_perpustakaan')->nullable();
            // $table->string('phonenumber_perpustakaan'); 
            // $table->string('donation_status');
            // $table->longText('deskripsi');
           
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
        Schema::dropIfExists('perpustakaans');
    }
}
