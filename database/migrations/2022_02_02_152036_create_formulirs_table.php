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
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->string('nomor_kk')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('nisn')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->tinyInteger('anak_ke')->nullable();
            $table->string('tinggal_bersama')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->text('alamat')->nullable();
            $table->text('kode_pos')->nullable();
            $table->enum('mondok', ['Ya', 'Tidak'])->nullable();
            $table->enum('jenis_pendaftaran', ['Baru', 'Mutasi'])->nullable();
            $table->string('lembaga')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('ukuran_seragam')->nullable();
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
