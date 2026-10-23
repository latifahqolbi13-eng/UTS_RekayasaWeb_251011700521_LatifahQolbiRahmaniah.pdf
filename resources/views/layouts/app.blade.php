<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Film Lokal</title>
    <!-- Memanggil Bootstrap Lokal -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root {
            --bg-color: #141414;
            --card-bg: #1f1f1f;
            --text-color: #ffffff;
            --text-muted: #aaaaaa;
            --accent-color: #e50914; 
            --accent-hover: #b80710;
        }
        body { 
            font-family: '-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; 
            background-color: var(--bg-color); 
            color: var(--text-color); 
            margin: 0;
            padding: 0;
        }
        
        /* Flexbox Navbar Manual Berwarna Hitam Pekat */
        .custom-navbar {
            background-color: #000000;
            border-bottom: 2px solid #2d2d2d;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1050;
        }
        .nav-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-logo {
            color: var(--accent-color) !important;
            font-weight: 900;
            font-size: 24px;
            text-decoration: none;
            letter-spacing: 1px;
        }
        .nav-links-group {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 30px;
        }
        .nav-item-link {
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            transition: color 0.2s ease;
        }
        .nav-item-link:hover, .nav-item-link.active {
            color: var(--accent-color);
        }

        .container { width: 90%; margin: 0 auto; max-width: 1200px; }
        footer { 
            margin-top: 80px; 
            padding: 30px 0; 
            border-top: 1px solid #2d2d2d; 
            color: var(--text-muted); 
        }
    </style>
</head>
<body>

    <!-- NAVBAR PREMIUM TANPA ALERT POPUP -->
    <nav class="custom-navbar">
        <div class="nav-container">
            <a href="{{ route('movies.index') }}" class="nav-logo">🎬 BIOSKOP LOKAL</a>
             <ul class="nav-links-group">
                <li><a href="{{ route('movies.index') }}" class="nav-item-link">Beranda</a></li>
                <li><a href="{{ route('movies.about') }}" class="nav-item-link">About</a></li>
                <li><a href="{{ route('movies.catalog') }}" class="nav-item-link">Movie</a></li>
                <li><a href="{{ route('movies.profile') }}" class="nav-item-link">Profile</a></li>
            </ul>


        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="text-center">
        <div class="container">
            &copy; 2026 - UTS Rekayasa Web &bull; Latifah Qolbi Rahmaniah &bull; NIM 251011700521
        </div>
    </footer>

</body>
</html>
