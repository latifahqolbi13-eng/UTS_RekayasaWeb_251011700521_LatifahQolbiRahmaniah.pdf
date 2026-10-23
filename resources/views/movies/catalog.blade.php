@extends('layouts.app')

@section('content')
<!-- JUDUL KATALOG FILM -->
<div class="section-header mb-4" style="border-left: 4px solid #e50914; padding-left: 15px; margin-bottom: 30px;">
    <h2 class="section-title fw-bold" style="color: #ffffff; font-size: 26px; margin: 0;">Katalog Film Terbaru</h2>
    <p style="color: #aaaaaa; font-size: 14px; margin: 5px 0 0 0;">Menampilkan semua koleksi data film lokal pilihan terbaik</p>
</div>

<!-- GRID DAFTAR FILM -->
<div class="row">
    @foreach($movies as $movie)
    <div class="col-md-3">
        <div class="card">
            <div class="movie-img-container">
                <img src="{{ asset('assets/images/' . $movie->poster) }}" class="movie-img" alt="{{ $movie->title }}">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="text-muted-custom">{{ $movie->release_year }} &bull; {{ $movie->genre }}</p>
                <p class="card-text">{{ $movie->synopsis }}</p>
                <a href="{{ route('movies.show', $movie->id) }}" class="btn">Lihat Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
    .row { display: flex; flex-wrap: wrap; margin: -15px; }
    .col-md-3 { width: 25%; padding: 15px; box-sizing: border-box; }
    @media (max-width: 992px) { .col-md-3 { width: 50%; } }
    @media (max-width: 576px) { .col-md-3 { width: 100%; } }
    
    .card { background: #1f1f1f; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.3); border: 1px solid #2d2d2d; height: 100%; display: flex; flex-direction: column; }
    .card:hover { transform: translateY(-5px); border-color: #4a4a4a; transition: transform 0.2s ease; }
    .movie-img-container { width: 100%; height: 340px; overflow: hidden; background-color: #242424; }
    .movie-img { width: 100%; height: 100%; object-fit: cover; }
    .card-body { padding: 16px; flex-grow: 1; display: flex; flex-direction: column; }
    .card-title { font-size: 16px; margin: 0 0 6px 0; color: #ffffff; font-weight: 700; }
    .text-muted-custom { color: #aaaaaa; font-size: 12px; margin-bottom: 12px; }
    .card-text { font-size: 13px; color: #cccccc; line-height: 1.5; margin-bottom: 20px; flex-grow: 1; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
    .btn { display: block; background-color: #e50914; color: white; padding: 11px; border-radius: 6px; text-decoration: none; text-align: center; font-size: 13px; font-weight: 700; }
    .btn:hover { background-color: #b80710; color: white; }
</style>
@endsection
