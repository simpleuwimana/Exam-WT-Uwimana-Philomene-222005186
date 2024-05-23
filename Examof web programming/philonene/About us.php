<?php
session_start();
if (!isset($_SESSION['userna']) && !isset($_SESSION['password'])) {
    header("location:index.php");
}me
?>
<html>
<head>
    <title>Menu</title>
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu-bar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="register.php">Registration</a></li>
            <li><a href="about us.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    	<div class="logo">Senior Care Services</div>
    </div>

 <section id="about">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </section>

</body>
</html>
