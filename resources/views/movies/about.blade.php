@extends('layouts.app')

@section('content')
<div class="about-container">
    <!-- Header Title -->
    <h2 class="about-title">Tentang Aplikasi</h2>
    <div class="title-divider mb-4"></div>
    
    <!-- Teks Pembuka Kasual Tanpa Simbol Markdown -->
    <p class="about-text">
        Web Portal Film Lokal ini dibuat khusus untuk memenuhi tugas project Ujian Tengah Semester (UTS) pada mata kuliah Rekayasa Web di Universitas Pamulang. 
    </p>

    <!-- Grid Fitur / Teknologi Modern -->
    <div class="tech-grid mt-4 mb-4">
        <div class="tech-card">
            <div class="tech-icon">🚀</div>
            <h5>Framework</h5>
            <p>Laravel 11</p>
        </div>
        <div class="tech-card">
            <div class="tech-icon">💾</div>
            <h5>Database</h5>
            <p>MySQL</p>
        </div>
        <div class="tech-card">
            <div class="tech-icon">🎨</div>
            <h5>Antarmuka</h5>
            <p>Cinematic Dark</p>
        </div>
    </div>

    <!-- Teks Penutup Tanpa Simbol Markdown -->
    <p class="about-text text-secondary">
        Sistem ini dirancang untuk menampilkan data film lokal pilihan secara dinamis. Konsep interface-nya sengaja dibuat dengan tema gelap (dark mode) supaya memberikan pengalaman visual yang nyaman dan mirip seperti platform streaming bioskop modern saat ini.
    </p>
    
    <!-- Tombol Aksi Kembali -->
    <div class="text-start mt-4">
        <a href="{{ route('movies.index') }}" class="btn-back">
            ⬅ Kembali ke Beranda
        </a>
    </div>
</div>

<!-- STYLE PREMIUM HALAMAN ABOUT -->
<style>
    .about-container {
        background: #1f1f1f; 
        border: 1px solid #2d2d2d; 
        border-radius: 16px; 
        max-width: 750px; 
        margin: 40px auto;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    .about-title {
        color: #ffffff; 
        font-weight: 800;
        font-size: 28px;
        margin-bottom: 8px;
    }
    .title-divider {
        width: 60px;
        height: 4px;
        background-color: #e50914;
        border-radius: 2px;
    }
    .about-text {
        color: #cccccc; 
        font-size: 15px; 
        line-height: 1.7;
        text-align: justify;
    }
    .text-secondary {
        color: #aaaaaa;
        font-size: 14.5px;
    }
    
    /* Tech Stack Grid */
    .tech-grid {
        display: flex;
        gap: 15px;
        margin: 25px 0;
    }
    .tech-card {
        flex: 1;
        background: #141414;
        border: 1px solid #2d2d2d;
        border-radius: 10px;
        padding: 20px 15px;
        text-align: center;
        transition: transform 0.2s ease;
    }
    .tech-card:hover {
        transform: translateY(-3px);
        border-color: #444;
    }
    .tech-icon {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .tech-card h5 {
        color: #888888;
        font-size: 12px;
        text-transform: uppercase;
        margin-bottom: 5px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }
    .tech-card p {
        color: #ffffff;
        font-size: 15px;
        font-weight: 700;
        margin: 0;
    }

    /* Button Back */
    .btn-back {
        display: inline-block; 
        background-color: #e50914; 
        color: white; 
        padding: 12px 24px; 
        border-radius: 6px; 
        text-decoration: none; 
        font-weight: 700; 
        font-size: 14px;
        transition: background-color 0.2s;
    }
    .btn-back:hover {
        background-color: #b80710;
        color: white;
    }

    /* Responsive untuk HP */
    @media (max-width: 576px) {
        .tech-grid { flex-direction: column; }
        .about-container { padding: 25px; }
    }
</style>
@endsection
