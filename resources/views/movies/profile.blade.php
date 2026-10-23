@extends('layouts.app')

@section('content')
<div class="p-5 text-center shadow" style="background: #1f1f1f; border: 1px solid #2d2d2d; border-radius: 12px; max-width: 500px; margin: 40px auto;">
    
    <!-- Lingkaran Foto Avatar Profil -->
    <div style="width: 100px; height: 100px; background-color: #262626; border-radius: 50%; margin: 0 auto 20px auto; display: flex; align-items: center; justify-content: center; font-size: 38px; border: 2px solid #e50914; box-shadow: 0 4px 15px rgba(229, 9, 20, 0.2);">
        👩‍🎓
    </div>
    
    <!-- Judul Header -->
    <h3 style="color: #ffffff; font-weight: 800; margin-bottom: 5px; letter-spacing: 0.5px;">Profil Mahasiswa</h3>
    <p style="color: #e50914; font-weight: 700; font-size: 14px; margin-bottom: 30px; letter-spacing: 1px; text-uppercase: true;">Universitas Pamulang</p>
    
    <!-- Blok List Informasi Data Diri Gelap -->
    <div style="background: #141414; border: 1px solid #2d2d2d; border-radius: 8px; padding: 20px; text-align: left; margin-bottom: 30px;">
        <div style="margin-bottom: 12px; display: flex; justify-content: space-between; border-bottom: 1px solid #222; padding-bottom: 8px;">
            <span style="color: #aaaaaa; font-size: 14px; font-weight: 600;">Nama Lengkap</span>
            <span style="color: #ffffff; font-size: 14px; font-weight: 700;">Latifah Qolbi Rahmaniah</span>
        </div>
        <div style="margin-bottom: 12px; display: flex; justify-content: space-between; border-bottom: 1px solid #222; padding-bottom: 8px;">
            <span style="color: #aaaaaa; font-size: 14px; font-weight: 600;">NIM</span>
            <span style="color: #ffffff; font-size: 14px; font-weight: 700; letter-spacing: 0.5px;">251011700521</span>
        </div>
        <div style="margin-bottom: 12px; display: flex; justify-content: space-between; border-bottom: 1px solid #222; padding-bottom: 8px;">
            <span style="color: #aaaaaa; font-size: 14px; font-weight: 600;">Kelas</span>
            <span style="color: #ffffff; font-size: 14px; font-weight: 700;">03SIFE004</span>
        </div>
        <div style="margin-bottom: 12px; display: flex; justify-content: space-between; border-bottom: 1px solid #222; padding-bottom: 8px;">
            <span style="color: #aaaaaa; font-size: 14px; font-weight: 600;">Program Studi</span>
            <span style="color: #ffffff; font-size: 14px; font-weight: 700;">Sistem Informasi S1</span>
        </div>
        <div style="display: flex; justify-content: space-between; padding-bottom: 4px;">
            <span style="color: #aaaaaa; font-size: 14px; font-weight: 600;">Mata Kuliah</span>
            <span style="color: #ffffff; font-size: 14px; font-weight: 700;">Rekayasa Web</span>
        </div>
    </div>
    
    <!-- Tombol Navigasi Kembali -->
    <a href="{{ route('movies.index') }}" class="btn w-100 py-2.5" style="display: block; background-color: #e50914; color: white; border-radius: 6px; text-decoration: none; font-weight: 700; font-size: 14px; transition: background 0.2s;">
        ⬅ Kembali ke Beranda
    </a>
</div>
@endsection
