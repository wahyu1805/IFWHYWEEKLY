<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | INFORMATIKA</title>
    <link rel="stylesheet" href="index.css">
      @import url('https://fonts.googleapis.com/css2?family=Consolas:mono:wght@400;700&display=swap');

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Consolas', monospace;
        line-height: 1.6;
        color: #00FF41;
        background: #000;
        min-height: 100vh;
        position: relative;
        overflow-x: hidden;
      }

      body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent 98%, rgba(0,255,65,0.05) 100%);
        animation: scanline 4s linear infinite;
        z-index: -1;
      }

      @keyframes scanline {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
      }

      header {
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
        padding: 1rem 0;
        position: sticky;
        top: 0;
        z-index: 100;
      }

      nav {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: center;
        gap: 2rem;
      }

      nav a {
        color: white;
        text-decoration: none;
        font-weight: 400;
        padding: 0.5rem 1rem;
        border-radius: 25px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
      }

      nav a:hover {
        background: rgba(255,255,255,0.2);
        transform: translateY(-2px);
      }

      main {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
        text-align: center;
      }

      h1 {
        font-size: 3.5rem;
        color: white;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        animation: fadeInUp 1s ease;
      }

      img {
        max-width: 300px;
        height: auto;
        border-radius: 50%;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        margin: 2rem 0;
        animation: fadeIn 1.5s ease;
      }

      h2 {
        font-size: 2rem;
        color: white;
        margin: 2rem 0 1rem;
      }

      p, i {
        font-size: 1.2rem;
        color: rgba(255,255,255,0.9);
        max-width: 800px;
        margin: 0 auto 2rem;
        animation: fadeInUp 1s ease 0.3s both;
      }

      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }

      /* Responsive */
      @media (max-width: 768px) {
        nav {
          flex-wrap: wrap;
          gap: 1rem;
        }

        h1 { font-size: 2.5rem; }
        img { max-width: 200px; }
      }

</head>
<body>


    <h1>Selamat Datang di INFORMATIKA</h1>

    <img src="https://awsimages.detik.net.id/community/media/visual/2023/01/31/anime-lucu-dan-kocak-3.png?w=666" width="200">

    <center><h2>Berita INFORMATIKA</h2></center>

    <i><b>INFORMATIKA</b> adalah jurusan yang mempelajari tentang teknologi informasi dan komputer.</i>

    <p>
        INFORMATIKA adalah jurusan yang mempelajari tentang teknologi informasi dan komputer.
        Jurusan ini sangat populer karena prospek kerja luas dan gaji tinggi.
    </p>

    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="profil.php">Profile</a>
            <a href="contact.php">Contact</a>
            <a href="identitasmahasiswa.php">Data Mahasiswa</a>
            <a href="tambahdata.php">Tambah Data</a>
        </nav>
    </header>
    
    <main>
        <h1>Selamat Datang di INFORMATIKA</h1>
        
        <img src="https://awsimages.detik.net.id/community/media/visual/2023/01/31/anime-lucu-dan-kocak-3.png?w=666" alt="INFORMATIKA Logo">
        
        <h2>Berita INFORMATIKA</h2>
        
        <i><b>INFORMATIKA</b> adalah jurusan yang mempelajari tentang teknologi informasi dan komputer.</i>
        
        <p>
            INFORMATIKA adalah jurusan yang mempelajari tentang teknologi informasi dan komputer.
            Jurusan ini sangat populer karena prospek kerja luas dan gaji tinggi.
        </p>
    </main>

</body>
</html>

