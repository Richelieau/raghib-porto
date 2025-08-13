<?php
session_start();
// Data Dummy Pengguna
$Dummy_Users = [
    'guru' => '12345',
    'siswa' => '54321',
    'admin' => '123',
    'Raghib' => '0123',
];

//terima data dari form login
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

//validasi
if (isset($Dummy_Users[$username]) && $Dummy_Users[$username] === $password) {
    // Set session untuk pengguna yang berhasil login
    $_SESSION['username'] = $username;
    header('Location: welcome.php'); // Redirect ke halaman utama
} else {
    // Jika login gagal, redirect kembali ke halaman login dengan pesan error
    // $_SESSION['error'] = 'Username atau password salah!';
    header('Location: login.php?error=1');
}
exit;