<?php
// identitasmahasiswa.php - render halaman tabel mahasiswa (pakai data dari DB via PHP)
require __DIR__ . '/db_config.php';

$stmt = $pdo->query("SELECT id, foto, foto_mime, nama, nim, jurusan FROM mahasiswa ORDER BY id DESC");
$rows = $stmt->fetchAll();

// jika tabel kosong, isi seed (agar halaman tidak kosong)
if (count($rows) === 0) {
    $seed = [
        ['foto_url' => 'https://i.pinimg.com/originals/f0/a2/8a/f0a28aaa06eb888a7172d2016f812b34.jpg', 'nama' => 'Wahyu', 'nim' => '13182420056', 'jurusan' => 'Informatika'],
        ['foto_url' => 'https://i.pinimg.com/736x/f4/66/e6/f466e652615166b7c8072d41ec003f89.jpg', 'nama' => 'nailong', 'nim' => '1316242000', 'jurusan' => 'Informatika'],
        ['foto_url' => 'https://i.pinimg.com/originals/b1/ef/fa/b1effac43bb053a95c307b52ff0cb196.jpg?nii=t', 'nama' => 'Syaif', 'nim' => '2026003', 'jurusan' => 'Sistem Informasi'],
        ['foto_url' => 'https://tse1.mm.bing.net/th/id/OIP.8GfX4CvPEWL4rHKQrazwiwHaHa?pid=Api&P=0&h=180', 'nama' => 'ombg', 'nim' => '1318244000', 'jurusan' => 'Teknik Komputer'],
    ];

    $ins = $pdo->prepare("INSERT INTO mahasiswa (foto, foto_mime, nama, nim, jurusan) VALUES (:foto, :foto_mime, :nama, :nim, :jurusan)");

    foreach ($seed as $s) {
        $img = @file_get_contents($s['foto_url']);
        $mime = null;
        // mime detection sederhana
        if ($img !== false) {
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mime = $finfo->buffer($img) ?: 'image/jpeg';
        }

        $ins->execute([
            ':foto' => ($img !== false ? $img : null),
            ':foto_mime' => $mime,
            ':nama' => $s['nama'],
            ':nim' => $s['nim'],
            ':jurusan' => $s['jurusan'],
        ]);
    }

    $stmt = $pdo->query("SELECT id, foto, foto_mime, nama, nim, jurusan FROM mahasiswa ORDER BY id DESC");
    $rows = $stmt->fetchAll();
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | INFORMATIKA</title>
    <link rel="stylesheet" href="identitasmahasiswa.css">
</head>
<body>
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
        <h1>DATA MAHASISWA</h1>
        <a href="tambahdata.php" class="btn-add">Tambah Data</a>

        <table id="studentTable">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody id="studentBody">
                <?php foreach ($rows as $i => $r): ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td>
                        <?php if (!empty($r['foto'])): ?>
                            <?php
                              $mime = $r['foto_mime'] ?: 'image/jpeg';
                              $src = 'data:' . $mime . ';base64,' . base64_encode($r['foto']);
                            ?>
                            <img src="<?php echo htmlspecialchars($src, ENT_QUOTES, 'UTF-8'); ?>" width="80">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($r['nama'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($r['nim'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($r['jurusan'], ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3>LATIHAN</h3>
        <table class="puzzle-table">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td colspan="2" rowspan="2">?</td>
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>
    </main>
</body>
</html>


