<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePejabatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pejabat', function (Blueprint $table) {
            $table->string('nip', 20)->primary();
            $table->string('kode_upbjj', 3);
            $table->string('nama_pegawai');
            $table->string('jabatan');
            $table->string('sub_bagian');
            $table->string('ttd_sertifikat');
            $table->string('file');
            $table->string('keterangan');
            $table->string('user_create');
            $table->string('user_update');
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
        Schema::dropIfExists('pejabats');
    }
}
