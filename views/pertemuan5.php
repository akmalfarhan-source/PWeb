<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if ($page == 'home') echo 'Daftar Smartphone - SmartStore';
        elseif ($page == 'products') echo 'Products - SmartStore';
        elseif ($page == 'about') echo 'About Us - SmartStore';
        elseif ($page == 'contact') echo 'Contact - SmartStore';
        ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Asets/style.css">
    <link rel="stylesheet" href="../Asets/navbar.css">

    <?php if ($page == 'about'): ?>
    <style>
        .partner-section {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
            margin-bottom: 4rem;
            border: 1px solid rgba(0, 0, 0, 0.02);
        }
        .partner-section h2 {
            font-size: 2.2rem;
            color: var(--text-primary);
            margin-bottom: 2.5rem;
            font-weight: 700;
        }
        .partner-section h2 span { color: var(--accent-color); }
        .partner-grid { display: flex; gap: 1.5rem; justify-content: space-between; flex-wrap: wrap; }
        .partner-card {
            flex: 1;
            min-width: 140px;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 2rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.3s ease;
            text-align: center;
        }
        .partner-card:hover {
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.15);
            border-color: var(--accent-color);
            transform: translateY(-5px);
        }
        .partner-logo { height: 60px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; }
        .partner-name { font-size: 1.1rem; font-weight: 700; color: var(--text-primary); margin-bottom: 0.85rem; }
        .partner-badge {
            background-color: #eff6ff;
            color: var(--accent-color);
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        @media (max-width: 992px) { .partner-grid { justify-content: center; } .partner-card { flex-basis: 40%; } }
        @media (max-width: 576px) { .partner-card { flex-basis: 100%; } }
    </style>
    <?php endif; ?>

    <?php if ($page == 'contact'): ?>
    <style>
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
        }
        .contact-form {
            background: white;
            padding: 3.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.02);
        }
        .form-group { margin-bottom: 1.5rem; }
        .form-label {
            display: block;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
            font-weight: 600;
            font-size: 0.95rem;
        }
        .form-control {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s;
            box-sizing: border-box;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }
        .contact-info { display: flex; flex-direction: column; gap: 2.5rem; justify-content: center; }
        .info-card {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            background: white;
            padding: 1.5rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.02);
            transition: transform 0.3s ease;
        }
        .info-card:hover { transform: translateX(10px); }
        .info-icon {
            font-size: 2rem;
            background: #f8fafc;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: var(--accent-color);
        }
        .info-text h4 { margin: 0 0 0.5rem 0; font-size: 1.2rem; color: var(--text-primary); }
        .info-text p { margin: 0; color: var(--text-secondary); font-size: 1.05rem; }
        @media (max-width: 992px) { .contact-grid { grid-template-columns: 1fr; } }
    </style>
    <?php endif; ?>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="pertemuan5.php" class="navbar-brand">Smart<span>Store</span></a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="pertemuan5.php?page=home" class="nav-link <?= ($page == 'home') ? 'active' : '' ?>">Home</a></li>
            <li class="nav-item"><a href="pertemuan5.php?page=products" class="nav-link <?= ($page == 'products') ? 'active' : '' ?>">Products</a></li>
            <li class="nav-item"><a href="pertemuan5.php?page=about" class="nav-link <?= ($page == 'about') ? 'active' : '' ?>">About Us</a></li>
            <li class="nav-item"><a href="pertemuan5.php?page=contact" class="nav-link <?= ($page == 'contact') ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </nav>

    <?php if ($page == 'home'): ?>
    <!-- ========== HOME ========== -->
    <main class="landing-main">
        <section class="hero-section">
            <div class="hero-content">
                <h1>Upgrade Your Digital Life with <span>SmartStore</span></h1>
                <p>Pusat koleksi smartphone flagship terbaik. Temukan gadget impian Anda dengan penawaran menarik,
                    garansi resmi, dan harga terbaik di pasaran.</p>
                <div class="hero-buttons">
                    <a href="pertemuan5.php?page=products" class="btn btn-primary">Lihat Produk</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?auto=format&fit=crop&w=800&q=80"
                    alt="Smartphone Collection">
            </div>
        </section>
    </main>

    <?php elseif ($page == 'products'): ?>
    <!-- ========== PRODUCTS ========== -->
    <div class="container">
        <div class="header-section">
            <h1>Daftar Smartphone Premium</h1>
            <p>Pilihan koleksi smartphone flagship terbaik dengan spesifikasi unggulan dan desain yang memukau</p>
        </div>
        <div class="table-wrapper">
            <table border="0">
                <tr>
                    <th colspan="4">Daftar Smartphone</th>
                </tr>
                <tr align="center">
                    <th>No</th>
                    <th>Nama Brand</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                </tr>
                <tr>
                    <td align="center" rowspan="3">1</td>
                    <td align="center" rowspan="3">Apple</td>
                    <td align="center" rowspan="3">
                        <img src="https://www.hellostore.id/cdn/shop/files/iPhone16ProMax_01.jpg?v=1756579921"
                            alt="Apple" width="100px" height="100px">
                    </td>
                    <td>iPhone 16 Pro Max</td>
                </tr>
                <tr>
                    <td>Dengan desain titanium yang memukau, Dolby Vision 4K 120fps, chip A18 Pro.</td>
                </tr>
                <tr>
                    <td>Rp 20.000.000</td>
                </tr>
                <tr>
                    <td align="center" rowspan="3">2</td>
                    <td align="center" rowspan="3">Samsung</td>
                    <td align="center" rowspan="3">
                        <img src="https://indodana-web.imgix.net/assets/samsung-galaxy-s24-ultra-thumbnail-titanium-gray.png?auto=compress"
                            alt="Samsung" width="100px" height="100px">
                    </td>
                    <td>Samsung galaxy s24 ultra</td>
                </tr>
                <tr>
                    <td>HP premium dengan layar besar, S Pen, kamera canggih, dan performa sangat mewah</td>
                </tr>
                <tr>
                    <td>Rp 18.000.000</td>
                </tr>
                <tr>
                    <td align="center" rowspan="3">3</td>
                    <td align="center" rowspan="3">Xiaomi</td>
                    <td align="center" rowspan="3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNnYjEF9JKZlHAe_8ldoDT42Vy88hUjfEtMA&s"
                            alt="Xiaomi" width="100px" height="100px">
                    </td>
                    <td>Xiaomi 12 8/256</td>
                </tr>
                <tr>
                    <td>Hp flangship dengan performa kencang, desain elegan, dan harga lebih terjangkau</td>
                </tr>
                <tr>
                    <td>Rp 8.000.000</td>
                </tr>
            </table>
        </div>
    </div>

    <?php elseif ($page == 'about'): ?>
    <!-- ========== ABOUT ========== -->
    <div class="container">
        <div class="header-section">
            <h1>Tentang SmartStore</h1>
            <p>Mengenal lebih dekat siapa kami dan jaringan kemitraan global kami untuk memenuhi kebutuhan teknologi Anda.</p>
        </div>
        <div class="partner-section">
            <h2>Brand <span>Partner</span> Resmi</h2>
            <div class="partner-grid">
                <!-- Apple -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <svg viewBox="0 0 384 512" style="height: 45px; fill: #2c2c2c;">
                            <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                        </svg>
                    </div>
                    <div class="partner-name">Apple</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
                <!-- Samsung -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <div style="color:#034ea2; font-weight:900; font-family: Arial, sans-serif; font-size: 1.1rem; letter-spacing: 1.5px;">SAMSUNG</div>
                    </div>
                    <div class="partner-name">Samsung</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
                <!-- Xiaomi -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <div style="background:#ff6900; color:white; width: 45px; height: 45px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-family: Arial, sans-serif; font-size: 1.25rem;">Mi</div>
                    </div>
                    <div class="partner-name">Xiaomi</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
                <!-- OPPO -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <div style="width: 45px; height: 45px; border-radius: 50%; border: 6px solid #2563eb; display: flex; align-items: center; justify-content: center; box-sizing: border-box;">
                            <div style="width: 14px; height: 14px; background: #2563eb; border-radius: 50%;"></div>
                        </div>
                    </div>
                    <div class="partner-name">OPPO</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
                <!-- Vivo -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <div style="background:#415fff; color:white; width: 55px; height: 35px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-family: Arial, sans-serif; font-size: 1.1rem; font-style: italic;">vivo</div>
                    </div>
                    <div class="partner-name">Vivo</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
            </div>
        </div>
    </div>

    <?php elseif ($page == 'contact'): ?>
    <!-- ========== CONTACT ========== -->
    <div class="container">
        <div class="header-section">
            <h1>Hubungi Kami</h1>
            <p>Punya pertanyaan atau butuh bantuan lebih lanjut? Jangan ragu untuk mengirim pesan kepada tim kami kapan saja.</p>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h4>Alamat</h4>
                        <p>Jl. Syekh Qodbuddin</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">📞</div>
                    <div class="info-text">
                        <h4>Telepon</h4>
                        <p>+62 813-1479-4762</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">✉️</div>
                    <div class="info-text">
                        <h4>Email Bantuan</h4>
                        <p>farhanakmal500@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label class="form-label" for="name">Nama Lengkap</label>
                        <input type="text" id="name" class="form-control" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Alamat Email</label>
                        <input type="email" id="email" class="form-control" placeholder="nama@email.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Pesan Anda</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Tuliskan keluhan atau pertanyaan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; border:none; padding: 1rem; font-size: 1.1rem; border-radius:12px;">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>

    <?php endif; ?>

</body>
</html>