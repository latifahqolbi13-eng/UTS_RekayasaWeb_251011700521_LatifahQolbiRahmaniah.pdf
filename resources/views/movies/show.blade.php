@extends('layouts.app')

@section('content')
<div class="card shadow border-0">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('assets/images/' . $movie->poster) }}" class="img-fluid rounded-start w-100 h-100" alt="{{ $movie->title }}" style="object-fit: cover;">
        </div>
        <div class="col-md-8">
            <div class="card-body p-4">
                <h2 class="card-title fw-bold mb-3">{{ $movie->title }}</h2>
                <table class="table table-borderless fs-6">
                    <tr>
                        <th style="width: 150px;">Sutradara</th>
                        <td>: {{ $movie->director }}</td>
                    </tr>
                    <tr>
                        <th>Pemeran</th>
                        <td>: {{ $movie->cast }}</td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <td>: {{ $movie->genre }}</td>
                    </tr>
                    <tr>
                        <th>Tahun Rilis</th>
                        <td>: {{ $movie->release_year }}</td>
                    </tr>
                    <tr>
                        <th>Durasi</th>
                        <td>: {{ $movie->duration }} Menit</td>
                    </tr>
                </table>
                <hr>
                <h5 class="fw-bold">Sinopsis:</h5>
                <p class="text-secondary" style="text-align: justify;">{{ $movie->synopsis }}</p>
                <a href="{{ route('movies.index') }}" class="btn btn-secondary mt-3">⬅ Kembali ke Daftar</a>
            </div>
        </div>
    </div>
</div>
@endsection
