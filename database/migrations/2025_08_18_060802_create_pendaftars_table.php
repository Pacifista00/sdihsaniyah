<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nisn');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu']);
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('bahasa');
            $table->integer('berat');
            $table->integer('tinggi');
            $table->string('riwayat_penyakit');
            $table->string('hobi');
            $table->string('bakat');
            $table->text('alamat');
            $table->foreignId('angkatan_id')->constrained()->onUpdate('cascade');
            $table->enum('jenis_kelas', ['intensif', 'bilingual']);
            $table->enum('asal_pendidikan', ['tk', 'ra', 'kb', 'sps', 'paud', 'tpa']);
            $table->string('nama_sekolah');
            $table->text('alamat_sekolah');
            // ayah
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->text('alamat_ayah');
            $table->string('no_telepon_ayah');
            $table->string('email_ayah');
            // ibu
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->text('alamat_ibu');
            $table->string('no_telepon_ibu');
            $table->string('email_ibu');
            // berkas
            $table->string('berkas_kk');
            $table->string('berkas_akta');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
