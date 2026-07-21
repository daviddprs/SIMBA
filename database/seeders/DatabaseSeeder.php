<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin SIMBA',
            'email' => 'admin@simba.com',
            'password' => bcrypt('password'),
        ]);

        // Create dummy data
        \App\Models\Pegawai::insert([
            ['nip' => '198001012005011001', 'nama' => 'Budi Santoso', 'jabatan' => 'Kepala Bagian Tata Usaha'],
            ['nip' => '198205122008012002', 'nama' => 'Siti Aminah', 'jabatan' => 'Analis Kepegawaian'],
            ['nip' => '199008172015021001', 'nama' => 'Andi Wijaya', 'jabatan' => 'Staf Administrasi'],
        ]);

        \App\Models\SuratMasuk::insert([
            ['nomor_surat' => '001/SM/2026', 'tanggal' => '2026-07-20', 'pengirim' => 'Gubernur Jatim', 'perihal' => 'Undangan Rapat Koordinasi'],
            ['nomor_surat' => '002/SM/2026', 'tanggal' => '2026-07-21', 'pengirim' => 'Dinas Pendidikan', 'perihal' => 'Laporan Bulanan'],
        ]);

        \App\Models\SuratKeluar::insert([
            ['nomor_surat' => '001/SK/2026', 'tanggal' => '2026-07-21', 'tujuan' => 'Bupati Madiun', 'perihal' => 'Pemberitahuan Kunjungan Kerja'],
        ]);

        \App\Models\Agenda::insert([
            ['nama_kegiatan' => 'Rapat Paripurna', 'tanggal' => '2026-08-01 09:00:00', 'lokasi' => 'Ruang Rapat Utama Bakorwil'],
            ['nama_kegiatan' => 'Kunjungan Lapangan', 'tanggal' => '2026-08-05 10:00:00', 'lokasi' => 'Kabupaten Ponorogo'],
        ]);
    }
}
