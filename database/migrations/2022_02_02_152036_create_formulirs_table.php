<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->onDelete('cascade');;
            $table->string('nama');
            $table->string('nik');
            $table->string('nomor_kk');
            $table->string('nomor_hp');
            $table->string('nisn');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->tinyInteger('anak_ke');
            $table->string('tinggal_bersama');
            $table->string('pendidikan_terakhir');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->text('alamat');
            $table->text('kode_pos');
            $table->enum('mondok', ['Ya', 'Tidak']);
            $table->enum('jenis_pendaftaran', ['Baru', 'Mutasi']);
            $table->string('lembaga');
            $table->string('jurusan');
            $table->string('ukuran_seragam');
            $table->string('pendidikan_nonformal')->nullable();
            $table->string('nomor_un')->nullable();
            $table->string('nama_lembaga')->nullable();
            $table->text('alamat_lembaga')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->date('tanggal_masuk_pesantren')->nullable();
            $table->string('pendidikan_tambahan')->nullable();
            $table->string('pendidikan_formal')->nullable();
            $table->string('kelas_pendidikan_formal')->nullable();
            $table->string('diniyyah')->nullable();
            $table->string('kelas_diniyyah')->nullable();
            $table->string('nama_kepala_keluarga')->nullable();
            $table->string('status_kepala_keluarga')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('status_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('nomor_hp_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('status_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('nomor_hp_ibu')->nullable();
            $table->string('wali_yang_bertanggungjawab')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('nomor_hp_wali')->nullable();
            $table->string('status_pendaftaran')->default('proses');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('formulirs');
    }
}
