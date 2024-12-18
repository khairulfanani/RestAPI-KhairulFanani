<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Electronic', 'Fashion', 'Food', 'Home appliance', 'Health', 'Otomotif', 'Hobby', 'Toy'];

        $productNames = [
            'Electronic' => [
                'Smartphone Galaxy S21',
                'Laptop Dell XPS 13',
                'Headphone Sony WH-1000XM4',
                'Smart TV Samsung 55 inci',
                'Kamera Canon EOS 1500D',
                'Tablet iPad Pro',
                'Speaker JBL Flip 5',
                'Smartwatch Apple Watch Series 7',
            ],
            'Fashion' => [
                'Jaket Bomber Pria',
                'Kemeja Batik Wanita',
                'Sneakers Nike Air Max',
                'Tas Ransel Herschel',
                'Dress Pesta Elegan',
                'Kaos Polos Uniqlo',
                'Sepatu Hak Tinggi',
                'Sweater Rajut',
            ],
            'Food' => [
                'Kopi Arabica Premium',
                'Cokelat Dark 70%',
                'Minyak Zaitun Extra Virgin',
                'Teh Hijau Organik',
                'Biskuit Cokelat Chips',
                'Mie Instan Premium',
                'Selai Strawberry',
                'Kacang Almond Panggang',
            ],
            'Home appliance' => [
                'Blender Philips HR2105',
                'Kulkas LG Dual Inverter',
                'Microwave Panasonic NN-SN65',
                'Set Panci Stainless',
                'Vacuum Cleaner Dyson V11',
                'Rice Cooker Philips HD3037',
                'Lampu LED Philips Hue',
                'Dispenser Air Maspion',
            ],
            'Health' => [
                'Vitamin C 1000mg',
                'Suplemen Omega-3',
                'Termometer Digital',
                'Masker N95',
                'Sanitizer Hand Sanitizer',
                'Timbangan Digital',
                'Obat Flu Panadol',
                'Alat Ukur Tekanan Darah',
            ],
            'Otomotif' => [
                'Ban Michelin Pilot Sport',
                'Oli Motor Shell Helix',
                'Sarung Jok Mobil',
                'GPS Garmin Drive',
                'Car Cover WeatherTech',
                'Dashboard Camera BlackVue',
                'Pembersih Mobil Meguiar\'s',
                'Pengharum Mobil Air Spencer',
            ],
            'Hobby' => [
                'Set Alat Lukis Acrylic',
                'Drone DJI Mini 2',
                'Papan Selancar Length',
                'Rakit Balsa',
                'Model Kit Revell',
                'Buku Warna Crayola',
                'Perlengkapan Memancing Shimano',
                'Gitar Akustik Yamaha',
            ],
            'Toy' => [
                'Lego City Set',
                'Boneka Barbie Dreamhouse',
                'Puzzle 1000 Potongan',
                'Mobil Remote Control',
                'Permainan Board Monopoly',
                'Action Figure Marvel',
                'Play-Doh Kreatif',
                'Robot Interaktif',
            ],
        ];

        // Pilih kategori secara acak
        $category = $this->faker->randomElement($categories);

        // Pilih nama produk secara acak berdasarkan kategori
        $productName = $this->faker->randomElement($productNames[$category]);

        return [
            'product_name' => $productName,
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'category' => $category,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
