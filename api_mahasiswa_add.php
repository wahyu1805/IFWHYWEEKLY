<?php
require __DIR__ . '/db_config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method not allowed';
    exit;
}

$nama = trim($_POST['nama'] ?? '');
$nim = trim($_POST['nim'] ?? '');
$jurusan = trim($_POST['jurusan'] ?? '');

if ($nama === '' || $nim === '' || $jurusan === '') {
    http_response_code(400);
    echo 'Nama/NIM/Jurusan wajib diisi.';
    exit;
}

$foto = null;
$fotoMime = null;

if (!empty($_FILES['foto']) && isset($_FILES['foto']['tmp_name']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto = file_get_contents($_FILES['foto']['tmp_name']);
    $fotoMime = $_FILES['foto']['type'] ?? null;
}

$stmt = $pdo->prepare("INSERT INTO mahasiswa (foto, foto_mime, nama, nim, jurusan) VALUES (:foto, :foto_mime, :nama, :nim, :jurusan)");
$stmt->execute([
    ':foto' => $foto,
    ':foto_mime' => $fotoMime,
    ':nama' => $nama,
    ':nim' => $nim,
    ':jurusan' => $jurusan,
]);

header('Content-Type: application/json; charset=utf-8');
echo json_encode(['ok' => true]);

