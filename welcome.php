<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Sederhana</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
      scroll-behavior: smooth;
    }

    body {
      display: flex;
      min-height: 100vh;
      background: #f4f4f4;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background: #1e1e2f;
      color: white;
      transition: all 0.3s;
      padding-top: 20px;
      position: fixed;
      height: 100%;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      padding: 15px;
      transition: background 0.3s;
    }

    .sidebar ul li:hover {
      background: #343454;
    }

    .sidebar ul li a {
      color: white;
      text-decoration: none;
      display: block;
    }

    /* Main Content */
    .main {
      flex: 1;
      padding: 20px;
      margin-left: 220px;
    }

    .toggle-btn {
      background: #1e1e2f;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      margin-bottom: 20px;
    }

    /* Hide sidebar */
    .sidebar.hide {
      width: 0;
      overflow: hidden;
    }

    /* Section styling */
    section {
      height: 100vh;
      padding: 20px;
      border-bottom: 1px solid #ddd;
    }

    @media (max-width: 768px) {
      .sidebar {
        position: fixed;
        height: 100%;
        z-index: 10;
      }
      .main {
        margin-left: 0;
      }

      .section a{
        text-decoration: none;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <h2>Menu</h2>
    <ul>
      <li><a href="#dashboard">🏡Home</a></li>
      <li><a href="#profile">💯Nilai</a></li>
      <li><a href="#kehadiran">✔️Kehadiran</a></li>
      <li><a href="#Jadwal">🗓️Jadwal</a></li>
      <li><a href="#settings">🛞Pengaturan</a></li>
      <li><a href="index.php">🚪Logout</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main">
    <button class="toggle-btn" onclick="toggleSidebar()">☰ Menu</button>
    
    <section id="dashboard">
      <h1>Home</h1>
      <p>Konten untuk Dashboard.</p>
    </section>

    <section id="profile">
      <h1>Nilai</h1>
      <p>Konten untuk Profile pengguna.</p>
    </section>

    <section id="kehadiran">
      <h1>kehadiran</h1></h1>
      <p>Konten untuk pengaturan aplikasi.</p>
    </section>

    <section id="Jadwal">
      <h1>Jadwal</h1>
      <p>Konten untuk pengaturan aplikasi.</p>
    </section>

    <section id="settings">
      <h1>Pengaturan</h1>
      <p>Konten untuk pengaturan aplikasi.</p>
    </section>

  </div>

  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('hide');
    }
  </script>

</body>
</html>
