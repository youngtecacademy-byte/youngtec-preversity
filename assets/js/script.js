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
