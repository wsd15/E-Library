<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buku');
            $table->string('penerbit');
            $table->string('penulis');
            $table->unsignedBigInteger('perpustakaan_id')->nullable();
            $table->foreign('perpustakaan_id')
                  ->references('id')
                  ->on('perpustakaans')
                  ->onDelete('set null');
            $table->string('isbn');
            $table->string('tahun_terbit');
            $table->integer('stok');
            $table->integer('deposit');
            $table->longText('deskripsi');
            $table->string('file_path')->nullable();
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
        Schema::dropIfExists('books');
    }
}
