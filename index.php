<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Sam Adedamola's portfolio showcasing web projects, testimonials, and contact form." />
  <meta name="keywords" content="Sam Adedamola, Web Developer, Portfolio, Projects, Contact" />
  <meta name="author" content="Sam Adedamola" />
  <title>Sam Adedamola | Portfolio</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <style>
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
    header, footer { background: #222; color: #fff; text-align: center; padding: 1em; }
    section { padding: 2em; }
    .project-card, .testimonial, form { margin-bottom: 2em; }
    .swiper { width: 100%; height: 200px; }
    .swiper-slide { background: #eee; display: flex; align-items: center; justify-content: center; font-size: 1.2em; }
    form input, form textarea, form select { display: block; width: 100%; margin-bottom: 1em; padding: 0.5em; }
    form button { background: #007BFF; color: white; padding: 0.7em 1.5em; border: none; cursor: pointer; }
  </style>
</head>
<body>

  <header>
    <h1>Sam Adedamola</h1>
    <p>Web Developer & Creative Technologist</p>
  </header>

  <section id="about">
    <h2>About Me</h2>
    <p>Hi, I'm Sam — passionate about building beautiful, functional web experiences.</p>
    <a href="https://about.me/samadedamola" target="_blank">
      <img src="https://about.me/samadedamola/avatar" alt="Sam's Avatar" width="100" />
    </a>
  </section>

  <section id="projects">
    <h2>Projects</h2>
    <div class="project-card">
      <h3>Portfolio Website</h3>
      <p>Built with HTML, CSS, PHP, and Swiper.js</p>
      <svg width="24" height="24" fill="currentColor"><circle cx="12" cy="12" r="10" /></svg>
    </div>

    <h3>Testimonials</h3>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">"Sam is a genius! Our site traffic doubled." – Client A</div>
        <div class="swiper-slide">"Professional, fast, and creative." – Client B</div>
        <div class="swiper-slide">"Highly recommend working with Sam." – Client C</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section id="contact">
    <h2>Contact Me</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = htmlspecialchars($_POST["name"]);
      $email = htmlspecialchars($_POST["email"]);
      $phone = htmlspecialchars($_POST["phone"]);
      $service = htmlspecialchars($_POST["service"]);
      $budget = htmlspecialchars($_POST["budget"]);
      $message = htmlspecialchars($_POST["message"]);

      $to = "samadedamola4@gmail.com";
      $subject = "New Contact Form Submission";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nBudget: $budget\nMessage:\n$message";
      $headers = "From: $email";

      if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you, $name! Your message has been sent.</p>";
      } else {
        echo "<p>Sorry, something went wrong. Please try again.</p>";
      }
    }
    ?>
    <form method="POST" action="">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <input type="tel" name="phone" placeholder="Phone Number" />
      <select name="service">
        <option value="">Select a Service</option>
        <option value="Web Design">Web Design</option>
        <option value="Consulting">Consulting</option>
      </select>
      <input type="text" name="budget" placeholder="Your Budget" />
      <textarea name="message" placeholder="Your Message" rows="5"></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <section id="chatbot">
    <h2>AI Chatbot</h2>
    <iframe src="https://your-chatbot-url.com" width="100%" height="300" frameborder="0">Chatbot loading...</iframe>
  </section>

  <footer>
    <p>&copy; Sam Adedamola <?php echo date("Y"); ?></p>
  </footer>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      loop: true,
      pagination: { el: '.swiper-pagination' },
      autoplay: { delay: 3000 },
    });
  </script>
</body>
</html>
<link rel="stylesheet" href="styles.css" />
/* styles.css */

/* Base Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f0f4f8;
  color: #333;
  line-height: 1.6;
}

/* Header & Footer */
header, footer {
  background-color: #1e2a38;
  color: #fff;
  text-align: center;
  padding: 1.5em 0;
}

/* Sections */
section {
  padding: 2em;
  background-color: #ffffff;
  margin-bottom: 2em;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

/* About */
#about img {
  border-radius: 50%;
  margin-top: 1em;
}

/* Projects */
.project-card {
  background-color: #e6ecf2;
  padding: 1em;
  border-left: 5px solid #007BFF;
  margin-bottom: 1em;
  border-radius: 6px;
}

/* Swiper Testimonials */
.swiper {
  width: 100%;
  height: 200px;
}
.swiper-slide {
  background-color: #d9e3ec;
  color: #1e2a38;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.1em;
  padding: 1em;
  border-radius: 6px;
}

/* Contact Form */
form input, form textarea, form select {
  width: 100%;
  padding: 0.75em;
  margin-bottom: 1em;
  border: 1px solid #ccc;
  border-radius: 4px;
}

form button {
  background-color: #007BFF;
  color: white;
  padding: 0.75em 1.5em;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background 0.3s ease;
}

form button:hover {
  background-color: #0056b3;
}

/* Chatbot */
#chatbot iframe {
  border: 1px solid #ccc;
  border-radius: 6px;
}

/* Footer */
footer p {
  font-size: 0.9em;
}
