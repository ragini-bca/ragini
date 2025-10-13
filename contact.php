<?php
// ---------- PHP code (place this at the very top) ----------
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details (change your email below)
    $to = "youremail@example.com";  // 👈 change this to your real email
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Try to send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Failed to send message. Try again later.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Gfgc Dandeli</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- 🔹 Header & Navigation -->
<header class="site-header">
  <h1 class="logo">Gfgc Dandeli</h1>
</header>
  <nav class="main-nav">
    <div class="hamburger" id="hamburger">&#9776;</div>
    <ul class="nav-links" id="nav-links">
      <li><a href="home.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li class="dropdown">
        <a href="courses.html" class="dropdown-toggle">Courses ▾</a>
        <ul class="dropdown-content">
          <li><a href="courses/bca.html">B.C.A</a></li>
          <li><a href="courses/ba.html">B.A</a></li>
          <li><a href="courses/bcom.html">B.Com</a></li>
          <li><a href="courses/bsc.html">B.Sc</a></li>
        </ul>
      </li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>


<section id="contact">
  <h2>Contact Us</h2>
  <p>If you have any queries or want to reach out, here is how you can contact us:</p>

  

<p>✉️ <strong>Email:</strong> <a href="mailto:principalgfgcdandeli@gmail.com">principalgfgcdandeli@gmail.com</a></p>

<p>📱 <strong>Phone:</strong> +91 8284 295660 | +91 94485 56127</p>

<p>🏫 <strong>Address:</strong> 
  <a href="https://www.google.com/maps/search/?api=1&query=GOVT+FIRST+GRADE+COLLEGE,+DANDELI,+NEAR+MORARJI+DESAI+RESIDENCIAL+SCHOOL,+AMBEWADI,+DANDELI,+Karwar,+Karnataka-581325" target="_blank">
    GOVT FIRST GRADE COLLEGE, DANDELI,<br>
    NEAR MORARJI DESAI RESIDENCIAL SCHOOL, AMBEWADI,<br>
    DANDELI, Karwar, Karnataka-581325
  </a>
</p>

  <!-- 🔹 Google Map Embed for Dandeli, Karnataka 581325 -->

 

  <h3>Find Us Here</h3>
<iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.786198290195!2d74.77149617481017!3d15.310951104841837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbb8c5edb6f271b%3A0x71f354c5f1234567!2sGOVT+FIRST+GRADE+COLLEGE,+DANDELI,+NEAR+MORARJI+DESAI+RESIDENCIAL+SCHOOL,+AMBEWADI,+DANDELI,+Karwar,+Karnataka-581325!5e0!3m2!1sen!2sin!4v1697052850000!5m2!1sen!2sin"
  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>



  <br><hr>

  <h3>Send Us a Message</h3>
  <form action="#" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit">Send Message</button>
  </form>

</section>

<footer>
  <p>© 2025 Gfgc Dandeli | All Rights Reserved</p>
</footer>

<script src="script.js"></script>
</body>
</html>
