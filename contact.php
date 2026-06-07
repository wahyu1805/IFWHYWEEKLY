<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact | INFORMATIKA</title>
    <link rel="stylesheet" href="contact.css">
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 2rem 0;
      }

      header {
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
        padding: 1rem 0;
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
        padding: 0.5rem 1rem;
        border-radius: 25px;
        transition: all 0.3s ease;
      }

      nav a:hover {
        background: rgba(255,255,255,0.2);
        transform: translateY(-2px);
      }

      main {
        max-width: 600px;
        margin: 4rem auto;
        padding: 0 2rem;
      }

      h1 {
        color: white;
        text-align: center;
        font-size: 3rem;
        margin-bottom: 3rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
      }

      .contact-form {
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(10px);
        padding: 3rem;
        border-radius: 25px;
        box-shadow: 0 30px 60px rgba(0,0,0,0.2);
        animation: slideIn 1s ease;
      }

      label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #333;
        font-size: 1.1rem;
      }

      input[type="text"],
      input[type="email"],
      textarea {
        width: 100%;
        padding: 1rem;
        margin-bottom: 1.5rem;
        border: 2px solid #e1e5e9;
        border-radius: 12px;
        font-size: 1rem;
        transition: all 0.3s ease;
        font-family: inherit;
      }

      input:focus,
      textarea:focus {
        outline: none;
        border-color: #007BFF;
        box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
        transform: translateY(-2px);
      }

      textarea {
        resize: vertical;
        min-height: 150px;
      }

      button[type="submit"] {
        width: 100%;
        background: linear-gradient(135deg, #007BFF, #0056b3);
        color: white;
        padding: 1.2rem;
        border: none;
        border-radius: 12px;
        font-size: 1.2rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      button:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0,123,255,0.4);
      }

      .back-link {
        display: block;
        text-align: center;
        margin-top: 2rem;
        color: #007BFF;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
      }

      .back-link:hover {
        color: #0056b3;
        text-decoration: underline;
      }

      @keyframes slideIn {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @media (max-width: 768px) {
        nav { flex-wrap: wrap; }
        .contact-form { padding: 2rem; margin: 0 1rem; }
        h1 { font-size: 2.2rem; }
      }

</head>
<body>

    <h1>Contact Kami</h1>

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
        <h1>Contact Kami</h1>

        <form class="contact-form" method="post" action="#">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="pesan">Pesan:</label>
            <textarea id="pesan" rows="5" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>

        <a href="index.php" class="back-link">Kembali ke Home</a>
    </main>

</body>
</html>

