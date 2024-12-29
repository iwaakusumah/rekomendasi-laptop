@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Rekomendasi Laptop</h1>
    <form action="/recommend" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="keyword" class="form-label">Masukkan kata kunci:</label>
            <input type="text" id="keyword" name="keyword" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cari Laptop</button>
    </form>

    @if(isset($recommendedLaptops))
        <h2 class="mt-5">Hasil Rekomendasi</h2>
        @if($recommendedLaptops->isEmpty())
            <div class="alert alert-warning mt-3">Tidak ada laptop yang sesuai dengan kriteria Anda.</div>
        @else
            <ul class="list-group mt-3">
                @foreach($recommendedLaptops as $laptop)
                    <li class="list-group-item">
                        <strong>{{ $laptop->company }} {{ $laptop->product }}</strong><br>
                        Prosesor: {{ $laptop->cpu_type }}<br>
                        GPU: {{ $laptop->gpu_type }}<br>
                        RAM: {{ $laptop->ram }}GB<br>
                        Penyimpanan: {{ $laptop->memory }}<br>
                        Berat: {{ $laptop->weight }} kg<br>
                        Harga: €{{ number_format($laptop->price, 2) }}
                    </li>
                @endforeach
            </ul>
        @endif
    @endif
</div>
@endsection