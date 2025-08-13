<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Raghib Portfolio</title>
  <style>
    * {margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;scroll-behavior:smooth;}
    body {background:#000;color:#fff;}
    /* header */
    .header{display:flex;justify-content:space-between;align-items:center;padding:20px 50px;position:sticky;top:0;z-index:999;background:#000;border-bottom:1px solid #333;}
    .header h1{font-size:1.8em;}
    .nav-links{list-style:none;display:flex;gap:25px;}
    .nav-links a{color:#fff;text-decoration:none;position:relative;font-weight:500;}
    .nav-links a::after{content:"";position:absolute;width:0;height:2px;left:0;bottom:-4px;background:#fff;transition:.3s;}
    .nav-links a:hover::after{width:100%;}
    /* hero */
    .hero{height:80vh;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;background:url('#') center/cover fixed;position:relative;}
    .hero::before{content:"";position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.6);}
    .hero h2{font-size:3em;z-index:1;margin-bottom:10px;}
    .hero p{z-index:1;font-size:1.2em;max-width:600px;}
    /* about */
    section{padding:80px 50px;}
    .about-container{display:flex;flex-wrap:wrap;gap:40px;align-items:center;}
    .profile-photo{width:200px;height:200px;border-radius:50%;object-fit:cover;border:4px solid #fff;box-shadow:0 4px 12px rgba(0,0,0,0.4);}
    .about-text{flex:1;font-size:1.1em;line-height:1.8;}
    /* projects */
    .projects{background:#111;}
    .card-container{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:30px;margin-top:40px;}
    .card{background:#000;border:1px solid #444;padding:25px;border-radius:16px;box-shadow:0 6px 15px rgba(255,255,255,0.1);transition:transform .3s,box-shadow .3s;}
    .card:hover{transform:translateY(-8px);box-shadow:0 12px 25px rgba(255,255,255,0.2);}    
    .card h3{margin-bottom:10px;color:#fff;}
    .card p{color:#ccc;}
    /* contact */
    footer{background:#000;text-align:center;padding:20px 0;border-top:1px solid #333;}
    /* responsive */
    @media(max-width:768px){.header{flex-direction:column;}.nav-links{flex-direction:column;align-items:center;}}
  </style>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
  <div class="header" data-aos="fade-up">
    <h1>Raghib's Portfolio</h1>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="login.php">Login!</a></li>
    </ul>
  </div>

  <section class="hero" data-aos="zoom-in-up">
    <h2>Welcome to My Portfolio</h2>
    <p>Web Developer | History Enthusiast | Lifelong Learner</p>
  </section>

  <section id="about" data-aos="zoom-in-up">
    <h2>About Me</h2>
    <div class="about-container" data-aos="zoom-in-up">
      <img src="profile.jpg" alt="Foto Raghib" class="profile-photo">
      <div class="about-text">
        <p>Hello, my name is <strong>Raghib</strong>. I am a Web Developer who loves reading a book and loves so much about history.</p>
      </div>
    </div>
  </section>

  <section id="projects" class="projects">
    <h2>Projects</h2>
    <div class="card-container" data-aos="zoom-in-out">
      <div class="card">
        <h3>Website for School Project</h3>
        <p>Sulawesi Agro Connected</p>
      </div>
      <div class="card">
        <h3>E-commerce Website</h3>
        <p>Online shop platform with modern UI</p>
      </div>
      <div class="card">
        <h3>History Website</h3>
        <p>A web platform for learning Indonesian history and World history</p>
      </div>
    </div>
  </section>

  <section id="contact">
    <h2>Contact</h2>
    <p>Email: abiyyudzakiraghib@gmail.com</p>
    <div style="margin-top:20px; display:flex; gap:20px; font-size:30px;">
      <a href="https://instagram.com/" target="_blank"><img src="instagramlogo.png" alt="Instagram" width="30"></a>
      <a href="https://facebook.com/" target="_blank"><img src="facebook.png" alt="Facebook" width="30"></a>
      <a href="https://twitter.com/" target="_blank"><img src="twitter.png" alt="X/Twitter" width="30"></a>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Raghib. All rights reserved.</p>
  </footer>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
 