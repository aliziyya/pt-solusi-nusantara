<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - PT Solusi Net Nusantara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        .navbar {
            background-color: white;
            padding: 5px 7%;
            box-shadow: 0 2px 5px #ddd;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            padding: 0;
        }

        .navbar-brand img {
            width: 130px;
            height: 130px;
            object-fit: contain;
        }

        .nav-link {
            color: #333;
            margin-left: 15px;
        }

        .nav-link:hover {
            color: #0878d1;
        }

        footer {
            background-color: #173f70;
            color: white;
            margin-top: 50px;
        }

        .footer-content {
            padding: 60px 7%;
        }

        .footer-logo {
            width: 55px;
            height: 55px;
            object-fit: contain;
            margin-right: 12px;
        }

        footer h5 {
            margin-bottom: 25px;
            font-weight: bold;
        }

        footer p {
            line-height: 1.5;
        }

        footer a {
            display: block;
            color: white;
            text-decoration: none;
            margin-bottom: 8px;
        }

        footer a:hover {
            color: #70d5e5;
        }

        .footer-map {
            width: 100%;
            height: 180px;
            border: 0;
            border-radius: 8px;
        }

        .copyright {
            background-color: #70d0df;
            color: #174477;
            text-align: center;
            padding: 18px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">
                <img src="{{ asset('image/logo PT.png') }}" alt="Logo PT Solusi Net Nusantara">
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/galeri">Galeri</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ms-lg-2" href="/register">
                                Register
                            </a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('langganan.history') }}">
                                Riwayat Langganan
                            </a>
                        </li>

                        <li class="nav-item">
                            <form action="/logout" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin logout?')">
                                @csrf

                                <button type="submit" class="btn btn-danger ms-lg-2">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container-fluid footer-content">
            <div class="row">

                <div class="col-md-3 mb-4">
                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('image/logo PT.png') }}"
                            class="footer-logo"
                            alt="Logo PT Solusi Net Nusantara">

                        <h4 class="mb-0">Solusi Net Nusantara</h4>
                    </div>

                    <p>
                        PT Solusi Net Nusantara menyediakan
                        layanan internet cepat dan stabil
                        untuk kebutuhan rumah maupun bisnis.
                    </p>
                </div>

                <div class="col-md-3 mb-4">
                    <h5>Alamat</h5>

                    <p>
                        SMK AK Nusa Bangsa<br>
                        Jl. KH. Sholeh Iskandar Km. 4,<br>
                        Cibadak, Tanah Sareal,<br>
                        Kota Bogor, Jawa Barat 16161.
                    </p>
                </div>

                <div class="col-md-2 mb-4">
                    <h5>Tentang Kami</h5>

                    <a href="/profile">Profile Perusahaan</a>
                    <a href="/produk">Produk & Layanan</a>
                    <a href="/galeri">Galeri</a>
                    <a href="/contact">Hubungi Kami</a>
                </div>

                <div class="col-md-2 mb-4">
                    <h5>Ikuti Kami</h5>

                    @if ($pengaturan)
                        <a href="{{ $pengaturan->instagram }}" target="_blank">
                            Instagram
                        </a>

                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $pengaturan->whatsapp) }}"
                            target="_blank">
                            WhatsApp
                        </a>
                    @endif
                </div>

                <div class="col-md-2 mb-4">
                    <h5>Lokasi Kami</h5>

                    <iframe
                        class="footer-map"
                        src="https://www.google.com/maps?q=SMK+AK+Nusa+Bangsa+Bogor&output=embed"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>

            </div>
        </div>

        <div class="copyright">
            Copyright &copy; 2026 PT Solusi Net Nusantara.
            All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
