<?php

namespace Database\Factories;

use App\Models\Inovasi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InovasiFactory extends Factory
{
    protected $model = Inovasi::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'kategori' => fake('id_ID')->randomElement(['Pendidikan', 'Kesehatan', 'Teknologi', 'Lingkungan', 'Ekonomi']),
            'nama' => fake('id_ID')->sentence(2),
            'tahapan' => fake('id_ID')->randomElement(['Perencanaan', 'Pengembangan', 'Implementasi', 'Evaluasi']),
            'inisiator' => fake('id_ID')->firstName() . ' ' . fake('id_ID')->lastName(),
            'jenis_inovasi' => fake('id_ID')->randomElement(['Teknologi', 'Sistem', 'Metode', 'Produk']),
            'bentuk_inovasi' => fake('id_ID')->randomElement(['Aplikasi', 'Program', 'Proyek', 'Inisiatif']),
            'tematik' => fake('id_ID')->optional()->word(),
            'urusan' => fake('id_ID')->randomElement(['Pendidikan', 'Kesehatan', 'Sosial', 'Ekonomi']),
            'waktu_ujiCoba' => fake('id_ID')->optional()->date('Y-m-d'),
            'waktu_penerapan' => fake('id_ID')->optional()->date('Y-m-d'),
            'rancangan' => fake('id_ID')->paragraphs(3, true),
            'tujuan' => fake('id_ID')->randomElement([
                'Meningkatkan kesejahteraan masyarakat',
                'Mengurangi dampak lingkungan',
                'Meningkatkan sumber daya manusia',
                'Mendorong pertumbuhan ekonomi lokal',
                'Mempermudah akses layanan kesehatan'
            ]),
            'manfaat' => fake('id_ID')->randomElement([
                'Meningkatkan kualitas pendidikan',
                'Meningkatkan layanan kesehatan',
                'Mendorong pertumbuhan ekonomi',
                'Mengurangi kemiskinan',
                'Memperbaiki lingkungan hidup'
            ]),
            'hasil' => fake('id_ID')->paragraphs(3, true),
            'status' => fake('id_ID')->randomElement(['pending', 'approved', 'rejected']),
        ];

    }
}
