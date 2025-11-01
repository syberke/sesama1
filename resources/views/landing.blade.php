<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BAZMA Pertamina - Program Berbagi Kebaikan</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --bazma-blue: #0071bc;
      --bazma-green: #00a651;
      --text-dark: #1a1a1a;
      --text-light: #666;
      --bg-light: #f8f9fa;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background: #fff;
      color: var(--text-dark);
      overflow-x: hidden;
      line-height: 1.6;
    }

    /* NAVBAR */
    header {
      position: absolute;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
      z-index: 20;
      background: linear-gradient(to bottom, rgba(0,0,0,0.5), transparent);
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
      color: #fff;
      font-weight: 700;
      font-size: 20px;
      text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }
    .logo .mark {
      width: 48px; height: 48px; border-radius: 8px;
      background: linear-gradient(135deg, var(--bazma-blue), var(--bazma-green));
      display: flex; align-items: center; justify-content: center; color: #fff;
      font-size: 20px; font-weight: 800;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    nav { display: flex; align-items: center; gap: 32px; }
    nav a {
      color: #fff; text-decoration: none; font-weight: 600;
      transition: all 0.3s ease; font-size: 15px;
      text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }
    nav a:hover {
      color: #ffd700;
      transform: translateY(-2px);
    }

    /* HERO SLIDER */
    .hero {
      position: relative; height: 100vh; overflow: hidden;
      min-height: 600px;
    }
    .slide {
      position: absolute; inset: 0; background-size: cover; background-position: center;
      opacity: 0; transition: opacity 2s ease-in-out;
    }
    .slide.active { opacity: 1; }
    .hero::after {
      content: ""; position: absolute; inset: 0;
      background: linear-gradient(135deg, rgba(0,113,188,0.8), rgba(0,166,81,0.6));
      z-index: 1;
    }
    .hero-content {
      position: relative; z-index: 2; text-align: center; color: #fff;
      top: 50%; transform: translateY(-50%);
      max-width: 900px; margin: 0 auto; padding: 0 20px;
      animation: fadeInUp 1.2s ease;
    }
    .hero-content h1 {
      font-size: 56px; font-weight: 800; margin-bottom: 24px;
      text-shadow: 0 4px 12px rgba(0,0,0,0.3);
      line-height: 1.2;
    }
    .hero-content p {
      font-size: 20px; line-height: 1.8; color: #f0f0f0;
      margin-bottom: 32px;
      text-shadow: 0 2px 8px rgba(0,0,0,0.3);
    }
    .hero-stats {
      display: flex;
      justify-content: center;
      gap: 48px;
      margin-top: 48px;
      flex-wrap: wrap;
    }
    .stat-item {
      text-align: center;
    }
    .stat-number {
      font-size: 42px;
      font-weight: 800;
      color: #ffd700;
      display: block;
      text-shadow: 0 2px 8px rgba(0,0,0,0.3);
    }
    .stat-label {
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-top: 8px;
      opacity: 0.95;
    }

    @keyframes fadeInUp { from {opacity:0; transform:translateY(40px);} to {opacity:1; transform:translateY(0);} }

    /* INTRO */
    .intro {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 120px 60px;
      gap: 100px;
      flex-wrap: wrap;
      background: var(--bg-light);
    }

    .intro img {
      width: 480px;
      max-width: 100%;
      border-radius: 16px;
      box-shadow: 0 12px 32px rgba(0,0,0,0.12);
      transition: transform 0.3s ease;
    }

    .intro img:hover {
      transform: scale(1.02);
    }

    .intro-text {
      max-width: 640px;
    }

    .intro-text h3 {
      color: var(--bazma-blue);
      font-weight: 700;
      text-transform: uppercase;
      font-size: 13px;
      margin-bottom: 16px;
      letter-spacing: 2px;
    }

    .intro-text h2 {
      font-size: 42px;
      font-weight: 800;
      margin-bottom: 24px;
      color: var(--text-dark);
      line-height: 1.3;
    }

    .intro-text p {
      color: var(--text-light);
      line-height: 1.9;
      font-size: 17px;
      margin-bottom: 16px;
    }

    .intro-highlights {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      margin-top: 32px;
    }

    .highlight-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 16px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }

    .highlight-icon {
      width: 48px;
      height: 48px;
      border-radius: 10px;
      background: linear-gradient(135deg, var(--bazma-blue), var(--bazma-green));
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-weight: 800;
      font-size: 20px;
    }

    .highlight-text {
      flex: 1;
    }

    .highlight-text strong {
      display: block;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 4px;
    }

    .highlight-text span {
      font-size: 14px;
      color: var(--text-light);
    }

    /* PROGRAM */
    .program-wrapper {
      text-align: center;
      padding: 100px 60px;
      background: #fff;
    }

    .program-wrapper h2 {
      font-size: 42px;
      font-weight: 800;
      color: var(--text-dark);
      margin-bottom: 16px;
    }

    .program-wrapper > p {
      color: var(--text-light);
      margin-bottom: 64px;
      font-size: 18px;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .program-section {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 32px;
      text-align: left;
      max-width: 1400px;
      margin: 0 auto;
    }

    .program-card {
      position: relative;
      color: #fff;
      height: 420px;
      background-size: cover;
      background-position: center;
      border-radius: 16px;
      overflow: hidden;
      display: flex;
      align-items: flex-end;
      padding: 32px;
      transition: all 0.4s ease;
      box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    }

    .program-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.2));
      z-index: 1;
      transition: all 0.4s ease;
    }

    .program-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 16px 40px rgba(0,0,0,0.2);
    }

    .program-card:hover::after {
      background: linear-gradient(to top, rgba(0,113,188,0.9), rgba(0,166,81,0.4));
    }

    .program-content {
      position: relative;
      z-index: 2;
      width: 100%;
    }

    .program-content h5 {
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 2px;
      opacity: 0.9;
      margin-bottom: 12px;
      text-transform: uppercase;
    }

    .program-content h3 {
      font-size: 24px;
      font-weight: 800;
      margin-bottom: 16px;
      line-height: 1.3;
    }

    .program-content p {
      font-size: 15px;
      line-height: 1.6;
      opacity: 0.95;
      margin-bottom: 20px;
    }

    .btn-login {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      border-radius: 50px;
      background: #fff;
      color: var(--bazma-blue);
      padding: 12px 28px;
      font-weight: 700;
      border: none;
      margin-top: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      text-decoration: none;
      font-size: 15px;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      background: #ffd700;
      color: var(--text-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.3);
    }

    footer {
      background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
      color: #fff;
      text-align: center;
      padding: 48px 20px;
      font-size: 15px;
    }

    footer p {
      margin-bottom: 8px;
      opacity: 0.9;
    }

    footer small {
      opacity: 0.7;
    }

    @media (max-width: 768px) {
      header { padding: 16px 24px; }
      nav { gap: 20px; }
      nav a { font-size: 14px; }
      .hero-content h1 { font-size: 36px; }
      .hero-content p { font-size: 16px; }
      .hero-stats { gap: 32px; }
      .stat-number { font-size: 32px; }
      .intro { flex-direction: column; padding: 80px 24px; gap: 48px; }
      .intro-text h2 { font-size: 32px; }
      .intro-highlights { grid-template-columns: 1fr; }
      .program-wrapper { padding: 80px 24px; }
      .program-wrapper h2 { font-size: 32px; }
      .program-section { grid-template-columns: 1fr; gap: 24px; }
      .program-card { height: 380px; }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <span>BAZMA Pertamina</span>
    </div>
    <nav>
      <a href="#beranda">Beranda</a>
      <a href="#program">Program</a>
      <a href="#tentang">Tentang</a>
    </nav>
  </header>

  <!-- HERO -->
  <section class="hero" id="beranda">
    <div class="slide active" style="background-image:url('https://images.pexels.com/photos/8613089/pexels-photo-8613089.jpeg');"></div>
    <div class="slide" style="background-image:url('https://images.pexels.com/photos/5905492/pexels-photo-5905492.jpeg');"></div>
    <div class="slide" style="background-image:url('https://images.pexels.com/photos/6646918/pexels-photo-6646918.jpeg');"></div>

    <div class="hero-content">
      <h1>Berbagi Kebaikan untuk Masa Depan Lebih Cerah</h1>
      <p>BAZMA Pertamina hadir sebagai mitra terpercaya dalam menyalurkan bantuan sosial, pendidikan, dan pemberdayaan masyarakat di seluruh Indonesia. Bersama kita wujudkan Indonesia yang lebih sejahtera.</p>

      <div class="hero-stats">
        <div class="stat-item">
          <span class="stat-number">10K+</span>
          <span class="stat-label">Penerima Manfaat</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">50+</span>
          <span class="stat-label">Program Aktif</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">100+</span>
          <span class="stat-label">Mitra</span>
        </div>
      </div>
    </div>
  </section>

  <!-- INTRO -->
  <section class="intro" id="tentang">
    <img src="https://images.pexels.com/photos/6646917/pexels-photo-6646917.jpeg" alt="Program BAZMA Pertamina">
    <div class="intro-text">
      <h3>TENTANG KAMI</h3>
      <h2>Menjembatani Kebaikan untuk Masyarakat</h2>
      <p>BAZMA Pertamina adalah lembaga filantropi milik Pertamina yang berkomitmen menyalurkan bantuan sosial, pendidikan, dan pemberdayaan ekonomi kepada masyarakat yang membutuhkan.</p>
      <p>Dengan transparansi dan akuntabilitas sebagai prinsip utama, kami memastikan setiap bantuan tepat sasaran dan memberikan dampak nyata bagi penerima manfaat.</p>

      <div class="intro-highlights">
        <div class="highlight-item">
          <div class="highlight-icon">📚</div>
          <div class="highlight-text">
            <strong>Pendidikan</strong>
            <span>Beasiswa & Perlengkapan Sekolah</span>
          </div>
        </div>
        <div class="highlight-item">
          <div class="highlight-icon">🏥</div>
          <div class="highlight-text">
            <strong>Kesehatan</strong>
            <span>Layanan Kesehatan Gratis</span>
          </div>
        </div>
        <div class="highlight-item">
          <div class="highlight-icon">💼</div>
          <div class="highlight-text">
            <strong>Ekonomi</strong>
            <span>Pemberdayaan UMKM</span>
          </div>
        </div>
        <div class="highlight-item">
          <div class="highlight-icon">🤝</div>
          <div class="highlight-text">
            <strong>Sosial</strong>
            <span>Bantuan Kemanusiaan</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROGRAM -->
  <section class="program-wrapper" id="program">
    <h2>Program Unggulan Kami</h2>
    <p>Berbagai program sosial yang kami jalankan untuk memberikan dampak nyata bagi masyarakat Indonesia.</p>

    <div class="program-section">
      <div class="program-card" style="background-image:url('https://images.pexels.com/photos/8465217/pexels-photo-8465217.jpeg');">
        <div class="program-content">
          <h5>PENDIDIKAN</h5>
          <h3>Bantuan Perlengkapan Sekolah</h3>
          <p>Menyediakan seragam, sepatu, dan perlengkapan sekolah untuk anak-anak kurang mampu</p>
          <a href="{{ route('login') }}" class="btn-login">Kelola Program →</a>
        </div>
      </div>

      <div class="program-card" style="background-image:url('https://images.pexels.com/photos/5905497/pexels-photo-5905497.jpeg');">
        <div class="program-content">
          <h5>BEASISWA</h5>
          <h3>Program Beasiswa Pendidikan</h3>
          <p>Memberikan beasiswa bagi siswa berprestasi dari keluarga kurang mampu</p>
          <a href="{{ route('login') }}" class="btn-login">Kelola Program →</a>
        </div>
      </div>

      <div class="program-card" style="background-image:url('https://images.pexels.com/photos/6647035/pexels-photo-6647035.jpeg');">
        <div class="program-content">
          <h5>KESEHATAN</h5>
          <h3>Layanan Kesehatan Gratis</h3>
          <p>Menyediakan pemeriksaan kesehatan dan pengobatan gratis untuk masyarakat</p>
          <a href="{{ route('login') }}" class="btn-login">Kelola Program →</a>
        </div>
      </div>

      <div class="program-card" style="background-image:url('https://images.pexels.com/photos/4226140/pexels-photo-4226140.jpeg');">
        <div class="program-content">
          <h5>EKONOMI</h5>
          <h3>Pemberdayaan UMKM</h3>
          <p>Pelatihan dan modal usaha untuk pengembangan usaha mikro kecil menengah</p>
          <a href="{{ route('login') }}" class="btn-login">Kelola Program →</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p><strong>BAZMA Pertamina</strong></p>
    <p>Lembaga Filantropi PT Pertamina (Persero)</p>
    <small>&copy; {{ date('Y') }} BAZMA Pertamina. Semua hak cipta dilindungi.</small>
  </footer>

  <script>
    const slides = document.querySelectorAll('.slide');
    let index = 0;
    setInterval(() => {
      slides[index].classList.remove('active');
      index = (index + 1) % slides.length;
      slides[index].classList.add('active');
    }, 5000);
  </script>
</body>
</html>
