<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptop;
use Maatwebsite\Excel\Facades\Excel;

class DatasetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path ke file CSV
        $filePath = resource_path('dataset/dataset.csv'); // Pastikan nama file benar

        // Baca file CSV
        $csvData = array_map('str_getcsv', file($filePath));

        // Lewati header CSV
        $header = array_shift($csvData);

        // Loop melalui setiap baris data
        foreach ($csvData as $row) {
            // Validasi data (pastikan jumlah kolom cocok dengan tabel)
            if (count($row) === 15) {
                Laptop::create([
                    'company' => $row[0],
                    'product' => $row[1],
                    'typename' => $row[2],
                    'inches' => $row[3],
                    'screenresolutions' => $row[4],
                    'cpu_company' => $row[5],
                    'cpu_type' => $row[6],
                    'cpu_frequency' => $row[7],
                    'ram' => $row[8],
                    'memory' => $row[9],
                    'gpu_company' => $row[10],
                    'gpu_type' => $row[11],
                    'os' => $row[12],
                    'weight' => $row[13],
                    'price' => $row[14],
                ]);
            }
        }
    }
}
