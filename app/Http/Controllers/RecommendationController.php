<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class RecommendationController extends Controller
{
    public function recommend(Request $request)
    {
        // Validasi input
        $request->validate([
            'keyword' => 'required|string',
        ]);

        // Ambil input dari pengguna
        $keyword = strtolower($request->input('keyword'));

        // Tentukan kategori berdasarkan kata kunci
        $recommendedLaptops = Laptop::query();

        // Contoh pencocokan kata kunci
        if (strpos($keyword, 'desain grafis') !== false) {
            $recommendedLaptops->where('ram', '>=', 16)
                ->where('gpu_type', 'like', '%GTX%');
        } elseif (strpos($keyword, 'gaming') !== false) {
            $recommendedLaptops->where('ram', '>=', 8)
                ->where(function ($query) {
                    $query->where('gpu_type', 'like', '%GTX%')
                          ->orWhere('gpu_type', 'like', '%RTX%');
                });
        } elseif (strpos($keyword, 'office') !== false) {
            $recommendedLaptops->where('ram', '>=', 4)
                ->where('cpu_frequency', '>=', 2.0);
        } elseif (strpos($keyword, 'programming') !== false) {
            $recommendedLaptops->where('ram', '>=', 8)
                ->where('cpu_frequency', '>=', 2.5);
        }

        // Ambil hasil rekomendasi
        $recommendedLaptops = $recommendedLaptops->get();

        return view('recommendation', compact('recommendedLaptops'));
    }
}
