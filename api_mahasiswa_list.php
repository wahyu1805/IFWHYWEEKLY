<?php
require __DIR__ . '/db_config.php';

$stmt = $pdo->query("SELECT id, foto, foto_mime, nama, nim, jurusan FROM mahasiswa ORDER BY id DESC");
$rows = $stmt->fetchAll();

$out = [];
foreach ($rows as $r) {
    $fotoB64 = null;
    if (!empty($r['foto'])) {
        $mime = $r['foto_mime'] ?: 'image/jpeg';
        $fotoB64 = 'data:' . $mime . ';base64,' . base64_encode($r['foto']);
    }

    $out[] = [
        'id' => (int)$r['id'],
        'foto' => $fotoB64,
        'nama' => $r['nama'],
        'nim' => $r['nim'],
        'jurusan' => $r['jurusan'],
    ];
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($out);

