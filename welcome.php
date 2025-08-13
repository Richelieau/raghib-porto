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
    /* logout hover */
    #logout-link {
    color: white;
    text-decoration: none;
    padding: 8px;
    display: block;
    background: #1e1e2f;
    border-radius: 4px;
    transition: background 0.3s, color 0.3s;
    text-align: center;
  }
  #logout-link:hover {
    background: #e7130cff;
    color: #ffff;
  }
  /* Section Laporan */
  #Laporan {
    padding: 30px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    max-width: 500px;
  }
  #Laporan h1 {
    color: #1e1e2f;
    margin-bottom: 20px;
  }
  #Laporan form {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }
  #Laporan label {
    color: #333;
    font-weight: 500;
  }
  #Laporan input, 
  #Laporan select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  #Laporan button {
    background: #1e1e2f;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s;
  }
  #Laporan button:hover {
    background: #343454;
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
      <li><a href="#laporan">📜Laporan</a></li>
      <li><a href="#settings">🛞Pengaturan</a></li>
      <li id="logout-link"><a href="index.php">🚪Log out</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main">
    <button class="toggle-btn" onclick="toggleSidebar()">☰ Menu</button>
    
    <section id="dashboard" style="padding: 30px; background: #ffffff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
      <h1 style="color: #1e1e2f; margin-bottom: 10px;">Selamat Datang di Dashboard</h1>
      <p style="color: #555; font-size: 1rem; line-height: 1.5;">
        Halo, <strong>Pengguna</strong>! Gunakan menu di samping untuk melihat nilai, kehadiran, jadwal, atau mengatur pengaturan akun Anda.
      </p>
   </section>

    <section id="profile">
      <h1>Nilai</h1>
      <p>Konten untuk Profile pengguna.</p>
    </section>

    <section id="kehadiran">
      <h1>kehadiran</h1></h1>
      <p>Konten untuk pengaturan aplikasi.</p>
    </section>

    <section id="Jadwal" style="padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
      <h1 style="color: #1e1e2f; margin-bottom: 10px;">Jadwal Pelajaran</h1>
        <p style="color: #555; font-size: 1rem; line-height: 1.5;">
          Berikut adalah jadwal kegiatan atau pelajaran Anda hari ini.
       </p>
  
     <ul style="margin-top: 15px; padding-left: 20px; color: #333; line-height: 1.6;">
       <li>08:00 - 09:30 • Matematika</li>
       <li>09:40 - 11:10 • Bahasa Inggris</li>
       <li>11:20 - 12:50 • Fisika</li>
       <li>13:30 - 15:00 • Olahraga</li>
     </ul>
   </section>


    <section id="Laporan">
      <h1>Laporan</h1>
      <h2>Laporan Siswa</h2>
       <form action="#" method="post">
        <label>
          Nama : 
          <input type="text" name="nama" placeholder="Masukkan nama siswa" required>
        </label>

        <label>
          NIS :
          <input type="number" name="nis" placeholder="Masukkan NIS siswa" required>
        </label>

        <label>
          Email :
          <input type="email" name="email" placeholder="Masukkan email siswa" required>
        </label>

        <label>
          Jurusan :
          <select name="jurusan" required>
            <option value="#">--Pilih Jurusan!--</option>
            <option value="RPL">Rekayasa Perangkat Lunak</option>
            <option value="TKJ">Teknik Komputer dan Jaringan</option>
            <option value="MM">Multimedia</option>
          </select>
        </label>
        <button type="submit">Kirim Laporan</button>

       </form>
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
