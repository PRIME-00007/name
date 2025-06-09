// Basic form confirmation
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault(); // prevent actual form submission for demo
    document.getElementById("formMessage").classList.remove("hidden");
    document.getElementById("contactForm").reset();
});