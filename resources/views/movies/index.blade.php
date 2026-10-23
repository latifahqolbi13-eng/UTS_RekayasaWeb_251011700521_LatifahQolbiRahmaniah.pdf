@extends('layouts.app')

@section('content')
<!-- STRUKTUR TATA LETAK SPLIT DUAL-COLUMN -->
<div class="split-layout animate-fade-in">
    
    <!-- SISI KIRI: KONTEN TEKS & DUA TOMBOL AKSI -->
    <div class="content-side">
        <span class="uts-badge-neon">⚡ UTS REKAYASA WEB</span>
        <h1 class="premium-title mt-3">
            Welcome To<br>
            <span class="gradient-text">Bioskop Local</span>
        </h1>
        <p class="premium-desc">
            Selamat datang di platform kurasi film lokal pilihan. Temukan dan apresiasi berbagai karya kreatif sineas tanah air, mulai dari cerita drama yang hangat hingga ketegangan mistis yang ikonik.
        </p>
        
        <div class="action-buttons-group">
            <a href="{{ route('movies.catalog') }}" class="btn-neon-gold">Jelajahi Katalog 🎬</a>
            <a href="{{ route('movies.about') }}" class="btn-outline-dark">Detail Project</a>
        </div>
    </div>

    <!-- SISI KANAN: GRAFIS VISUAL COLLAGE DENGAN GAMBAR POSTER UTAMA -->
    <div class="visual-side">
        <!-- Menggunakan gambar poster.jpg sebagai latar belakang kotak utama -->
        <div class="decor-box-large" style="background-image: url('{{ asset('assets/images/poster.jpg') }}'); background-size: cover; background-position: center; border: 1px solid #fbbf24;">
            <div class="inner-badge" style="position: absolute; bottom: 20px; left: 20px;">TOP CINEMA</div>
        </div>
        <div class="decor-box-small shadow">
            <span>CINEMA</span>
        </div>
        <!-- Ornamen lingkaran cahaya abstrak di latar belakang -->
        <div class="glow-orb"></div>
    </div>

</div>
 <!-- Identitas Mahasiswa Terintegrasi Langsung di Teks Utama -->
        <div class="student-text-info mt-4">
            <div class="info-line">
                <span class="info-label">Nama Mahasiswa</span>
                <span class="info-value">: Latifah Qolbi Rahmaniah</span>
            </div>
            <div class="info-line">
                <span class="info-label">Nomor Induk Mahasiswa</span>
                <span class="info-value highlight-gold">: 251011700521</span>
            </div>
            <div class="info-line">
                <span class="info-label">Dosen Pengampu</span>
                <span class="info-value">: Pak Afif Efendi, S.Kom., M.Kom.</span>
            </div>
        </div>
    
<!-- STYLE ARSITEKTUR LAYOUT PREMIUM -->
<style>
    /* Animasi Lembut */
    @keyframes slideUpFade {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in { animation: slideUpFade 0.8s cubic-bezier(0.25, 1, 0.5, 1) forwards; }

    /* Split Container Layout */
    .split-layout {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 50px;
        margin: 40px 0 60px 0;
        min-height: 480px;
    }
    .content-side { flex: 1.2; }
    .visual-side { 
        flex: 0.8; 
        position: relative; 
        height: 400px; 
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Gaya Teks Premium */
    .uts-badge-neon {
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2px;
        color: #fbbf24;
        border-left: 3px solid #fbbf24;
        padding-left: 10px;
        display: inline-block;
    }
    .premium-title {
        font-size: 52px;
        font-weight: 900;
        line-height: 1.1;
        color: #ffffff;
        letter-spacing: -1px;
    }
    .gradient-text {
        background: linear-gradient(45deg, #fbbf24 0%, #f97316 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .premium-desc {
        color: #a1a1aa;
        font-size: 15px;
        line-height: 1.7;
        margin: 20px 0 30px 0;
        text-align: justify;
        max-width: 550px;
    }

    /* Tombol Aksi */
    .action-buttons-group { display: flex; gap: 15px; }
    .btn-neon-gold {
        background: #fbbf24;
        color: #000000 !important;
        padding: 14px 30px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        box-shadow: 0 4px 20px rgba(251, 191, 36, 0.25);
        transition: all 0.3s ease;
    }
    .btn-neon-gold:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(251, 191, 36, 0.4);
    }
    .btn-outline-dark {
        background: transparent;
        color: #ffffff !important;
        padding: 14px 30px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        border: 2px solid #27272a;
        transition: all 0.3s ease;
    }
    .btn-outline-dark:hover {
        border-color: #ffffff;
        background: rgba(255, 255, 255, 0.05);
    }

    /* Elemen Grafis Sisi Kanan */
    .decor-box-large {
        width: 240px;
        height: 320px;
        border-radius: 20px;
        transform: rotate(-6deg);
        position: relative;
        z-index: 2;
        box-shadow: 0 20px 40px rgba(0,0,0,0.6);
    }
    .inner-badge {
        background: rgba(0, 0, 0, 0.75);
        border: 1px solid #fbbf24;
        color: #fbbf24;
        padding: 4px 12px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        backdrop-filter: blur(3px);
    }
    .decor-box-small {
        width: 140px;
        height: 140px;
        background: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
        border-radius: 16px;
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 3;
        transform: rotate(12deg);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000000;
        font-weight: 900;
        font-size: 13px;
        letter-spacing: 2px;
    }
    .glow-orb {
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(217, 119, 6, 0.12) 0%, rgba(0,0,0,0) 70%);
        position: absolute;
        z-index: 1;
        top: 10%;
    }

    /* Identity Footer Bar */
    .identity-footer-bar {
        background: #18181b;
        border-radius: 16px;
        border: 1px solid #27272a;
    }
    .identity-flex-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
    .identity-item label {
        color: #52525b;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1px;
        display: block;
        margin-bottom: 3px;
    }
    .identity-item p {
        color: #ffffff;
        font-weight: 700;
        font-size: 15px;
        margin: 0;
    }
    .identity-item .highlight-gold { color: #fbbf24; }
    .text-right { text-align: right; }

    /* Responsive HP */
    @media (max-width: 768px) {
        .split-layout { flex-direction: column; text-align: center; gap: 40px; }
        .premium-title { font-size: 36px; }
        .premium-desc { text-align: center; margin: 20px auto; }
        .action-buttons-group { justify-content: center; }
        .visual-side { height: 300px; width: 100%; }
        .decor-box-large { width: 180px; height: 240px; }
        .decor-box-small { width: 100px; height: 100px; right: 40px; }
        .text-right { text-align: center; }
        .identity-flex-wrapper { flex-direction: column; gap: 15px; text-align: center; }
    }
</style>
@endsection
