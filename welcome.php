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
  <title>Welcome + Sidebar Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #1d2671, #c33764);
      color: white;
      overflow-x: hidden;
    }

    /* Welcome Section */
    .welcome {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      position: relative;
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      animation: fadeInDown 1.5s ease forwards;
    }

    p {
      margin-top: 10px;
      font-size: 1.2rem;
      animation: fadeInUp 1.5s ease forwards;
      animation-delay: 0.5s;
      opacity: 0;
    }

    .btn {
      margin-top: 30px;
      padding: 12px 24px;
      background: white;
      color: #1d2671;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      font-size: 1rem;
      transition: 0.3s;
      animation: fadeInUp 1.5s ease forwards;
      animation-delay: 1s;
      opacity: 0;
    }

    .btn:hover {
      background: #ffda79;
      transform: scale(1.1);
    }

    @keyframes fadeInDown {
      from { transform: translateY(-50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeInUp {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    canvas {
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
    }

    /* Dashboard Layout */
    .dashboard {
      display: none;
      min-height: 100vh;
      background: #f5f6fa;
      color: #333;
      display: flex;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background: #1d2671;
      color: white;
      display: flex;
      flex-direction: column;
      padding-top: 20px;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar a {
      color: white;
      padding: 12px 20px;
      text-decoration: none;
      display: block;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background: #c33764;
    }

    /* Dashboard Content */
    .content {
      flex: 1;
      padding: 30px;
    }

    .content h2 {
      margin-bottom: 20px;
      color: #1d2671;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      margin-bottom: 10px;
      color: #c33764;
    }
  </style>
</head>
<body>

  <!-- Welcome Section -->
  <section class="welcome" id="welcome">
    <h1>Welcome to My Website</h1>
    <p>Your journey starts here</p>
    <button class="btn" onclick="showDashboard()">Go to Dashboard</button>
    <canvas id="particles"></canvas>
  </section>

  <!-- Dashboard with Sidebar -->
  <section class="dashboard" id="dashboard">
    <div class="sidebar">
      <h2>My Dashboard</h2>
      <a href="#">🏠 Home</a>
      <a href="#">🗓️ Schedule</a>
      <a href="#">✨ Value</a>
      <a href="#">📋 Report</a>
      <a href="#">⚙ Settings</a>
      <a href="#" onclick="backToWelcome()">⬅ Logout</a>
    </div>
    <div class="content">
      <h2>Dashboard Overview</h2>
      <div class="cards">
        <div class="card">
          <h3>Home</h3>
          <p>.</p>
        </div>
        <div class="card">
          <h3>Jadwal</h3>
          <p>6 AM - 12 PM</p>
        </div>
        <div class="card">
          <h3>Nilai</h3>
          <p>.</p>
        </div>
        <div class="card">
          <h3>Report</h3>
          <p>.</p>
        </div>
        <div class="card">
          <h3>Settings</h3>
          <p>15 Unread</p>
       </div>
    </div>
  </section>

  <script>
    // Partikel animasi
    const canvas = document.getElementById("particles");
    const ctx = canvas.getContext("2d");
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const particlesArray = [];

    class Particle {
      constructor() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.size = Math.random() * 4 + 1;
        this.speedX = Math.random() * 3 - 1.5;
        this.speedY = Math.random() * 3 - 1.5;
      }
      update() {
        this.x += this.speedX;
        this.y += this.speedY;
        if (this.size > 0.2) this.size -= 0.02;
      }
      draw() {
        ctx.fillStyle = "white";
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
      }
    }

    function init() {
      for (let i = 0; i < 100; i++) {
        particlesArray.push(new Particle());
      }
    }

    function handleParticles() {
      for (let i = 0; i < particlesArray.length; i++) {
        particlesArray[i].update();
        particlesArray[i].draw();

        for (let j = i; j < particlesArray.length; j++) {
          const dx = particlesArray[i].x - particlesArray[j].x;
          const dy = particlesArray[i].y - particlesArray[j].y;
          const distance = Math.sqrt(dx * dx + dy * dy);
          if (distance < 100) {
            ctx.beginPath();
            ctx.strokeStyle = "rgba(255,255,255,0.2)";
            ctx.lineWidth = 1;
            ctx.moveTo(particlesArray[i].x, particlesArray[i].y);
            ctx.lineTo(particlesArray[j].x, particlesArray[j].y);
            ctx.stroke();
            ctx.closePath();
          }
        }

        if (particlesArray[i].size <= 0.3) {
          particlesArray.splice(i, 1);
          i--;
        }
      }
    }

    function animate() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      handleParticles();
      requestAnimationFrame(animate);
    }

    init();
    animate();

    window.addEventListener("resize", function () {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });

    // Show Dashboard
    function showDashboard() {
      document.getElementById("welcome").style.display = "none";
      document.getElementById("dashboard").style.display = "flex";
    }

    // Back to Welcome
    function backToWelcome() {
      document.getElementById("welcome").style.display = "flex";
      document.getElementById("dashboard").style.display = "none";
    }
  </script>

</body>
</html>
