<?php
// index.php — Youngtec Computers Full Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Youngtec Computers — Learn, Innovate, and Excel in Technology.">
  <meta name="keywords" content="Youngtec, Computers, Courses, Technology, Coding, ICT">
  <title>Youngtec Computers</title>
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="script.js" defer></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="Assets/logo.png" alt="Youngtec Computers"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#courses">Courseware</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
        <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#admin">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <h1>Welcome to Youngtec Computers</h1>
  <p>Your Gateway to ICT Excellence</p>
</section>

<!-- About -->
<section id="about" class="py-5 container">
  <div class="row text-center">
    <div class="col-md-4 feature-card">
      <i class="fas fa-laptop-code fa-3x"></i>
      <h3>Expert Instructors</h3>
      <p>Learn from the best in the tech industry.</p>
    </div>
    <div class="col-md-4 feature-card">
      <i class="fas fa-network-wired fa-3x"></i>
      <h3>Modern Facilities</h3>
      <p>State-of-the-art labs for hands-on experience.</p>
    </div>
    <div class="col-md-4 feature-card">
      <i class="fas fa-certificate fa-3x"></i>
      <h3>Certified Courses</h3>
      <p>Get certifications recognized worldwide.</p>
    </div>
  </div>
</section>

<!-- Courses -->
<section id="courses" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Our Courses</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card feature-card">
          <img src="Assets/course1.jpg" class="card-img-top" alt="Coding">
          <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text">HTML, CSS, JavaScript, PHP & more.</p>
          </div>
        </div>
      </div>
      <!-- Add more course cards here -->
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">What Our Students Say</h2>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <p>"Youngtec Computers changed my life. The instructors are amazing!"</p>
          <small>- Sarah K.</small>
        </div>
        <div class="carousel-item">
          <p>"I got my dream job after completing the web development course."</p>
          <small>- Michael B.</small>
        </div>
        <div class="carousel-item">
          <p>"The hands-on training is second to none."</p>
          <small>- Aisha T.</small>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
            How do I register for a course?
          </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            You can register online through our website or visit our campus.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
            Are the courses beginner-friendly?
          </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we have courses for all levels — from beginners to advanced learners.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Newsletter Signup -->
<section id="newsletter" class="py-5">
  <div class="container text-center">
    <h2>Subscribe to Our Newsletter</h2>
    <p>Get updates on new courses, events, and promotions.</p>
    <form class="d-flex justify-content-center mt-3" action="process_form.php" method="POST">
      <input type="email" name="email" placeholder="Enter your email" class="form-control w-50 me-2" required>
      <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <form id="contactForm" action="process_form.php" method="POST" class="mx-auto" style="max-width:600px;">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container text-center">
    <p>&copy; <?php echo date("Y"); ?> Youngtec Computers. All Rights Reserved.</p>
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
  </div>
</footer>

<!-- Back to top -->
<button id="backToTop"><i class="fas fa-arrow-up"></i></button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
