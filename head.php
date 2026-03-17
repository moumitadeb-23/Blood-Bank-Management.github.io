<html>
<head>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>

/* ===== GLOBAL ===== */
body {
  margin: 0;
  background: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

/* ===== HEADER ===== */
.header {
  width: 100%;
  background: linear-gradient(90deg, #e63946, #ff6b6b);
  padding: 15px 60px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Logo */
.logo {
  font-size: 22px;
  font-weight: 700;
  color: white;
  text-decoration: none;
}

/* Nav container */
.header-right {
  display: flex;
  gap: 25px;
}

/* Links */
.header a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  padding: 8px 12px;
  border-radius: 20px;
  transition: all 0.3s ease;
}

/* Hover */
.header a:hover {
  background: rgba(255,255,255,0.2);
}

/* Active page */
.act {
  background: white;
  color: #e63946 !important;
}

/* ===== HERO SECTION ===== */
.hero {
  text-align: center;
  padding: 60px 20px;
}

.hero h1 {
  font-weight: 700;
  font-size: 42px;
}

.hero p {
  color: #666;
  font-size: 18px;
}

/* ===== BUTTONS ===== */
.btn-custom {
  background: #e63946;
  color: white;
  padding: 12px 25px;
  border-radius: 30px;
  border: none;
  transition: 0.3s;
  text-decoration: none;
  display: inline-block;
}

.btn-custom:hover {
  background: #c1121f;
  color: white;
}

/* ===== CAROUSEL ===== */
.carousel {
  margin: 30px auto;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* ===== CARDS ===== */
.card {
  border: none;
  border-radius: 15px;
  transition: 0.3s;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* ===== SECTIONS ===== */
.section {
  margin-top: 50px;
}

.section-title {
  text-align: center;
  font-weight: 600;
  margin-bottom: 30px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {

  .header {
    flex-direction: column;
    align-items: flex-start;
    padding: 15px 20px;
  }

  .header-right {
    flex-direction: column;
    width: 100%;
    margin-top: 10px;
  }

  .header a {
    width: 100%;
  }

  .hero h1 {
    font-size: 28px;
  }
}

</style>
</head>

<body>

<!-- ===== HEADER ===== -->
<div class="header">

  <a href="home.php" class="logo">Blood Bank & Donation</a>

  <div class="header-right">

    <a href="about_us.php" <?php if($active=='about') echo "class='act'"; ?>>About Us</a>

    <a href="why_donate_blood.php" <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>

    <a href="donate_blood.php" <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>

    <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>

    <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>

  </div>

</div>

</body>
</html>