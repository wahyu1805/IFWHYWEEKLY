<?php
// db_init.php - jalankan sekali untuk membuat database & tabel
// Akses via browser: http://localhost/IFWHYWEEKLY/db_init.php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'ifw_weekly';

try {
    $pdo = new PDO(
        "mysql:host={$DB_HOST};charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    // create database if not exists
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$DB_NAME}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

    // connect to database
    $pdo->exec("USE `{$DB_NAME}`");

    $pdo->exec("CREATE TABLE IF NOT EXISTS mahasiswa (
        id INT AUTO_INCREMENT PRIMARY KEY,
        foto MEDIUMBLOB NULL,
        foto_mime VARCHAR(100) NULL,
        nama VARCHAR(100) NOT NULL,
        nim VARCHAR(50) NOT NULL,
        jurusan VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB;" );

    echo "OK: Database & tabel sudah siap.";
} catch (PDOException $e) {
    http_response_code(500);
    echo 'Gagal init DB: ' . $e->getMessage();
    exit;
}

