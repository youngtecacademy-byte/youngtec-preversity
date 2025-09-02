// Activate Feather Icons
feather.replace();

// Global Fade-Up Animation on Scroll
function animateOnScroll() {
  document.querySelectorAll('.fade-up').forEach(function(el) {
    let elementTop = el.getBoundingClientRect().top;
    let windowHeight = window.innerHeight;

    if (elementTop < windowHeight - 50) {
      el.classList.add('animate');
    }
  });
}

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// main.js (animation trigger already exists, just ensuring reusability)
document.addEventListener("DOMContentLoaded", () => {
  const fadeElements = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
      }
    });
  }, { threshold: 0.1 });

  fadeElements.forEach(el => observer.observe(el));
});

// Youngtec Computers - Interactivity

// Fade-up animation on scroll
document.addEventListener("scroll", function() {
  document.querySelectorAll(".feature-card").forEach(card => {
    if (card.getBoundingClientRect().top < window.innerHeight - 100) {
      card.classList.add("fade-up");
    }
  });
});

// Back to top button
const backToTopBtn = document.getElementById("backToTop");
window.addEventListener("scroll", () => {
  if (window.scrollY > 200) {
    backToTopBtn.style.display = "flex";
  } else {
    backToTopBtn.style.display = "none";
  }
});
backToTopBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// Form validation
document.getElementById("contactForm")?.addEventListener("submit", function(e) {
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let message = document.getElementById("message").value.trim();

  if (!name || !email || !message) {
    e.preventDefault();
    alert("Please fill in all fields.");
  }
});
