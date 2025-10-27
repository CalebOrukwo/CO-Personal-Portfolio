<!-- Footer -->
  <footer class="py-6 bg-gray-900 text-center">
    <p class="text-sm">© 2025 Caleb Orukwo. All rights reserved.</p>
  </footer>

</body>
<script>
// GSAP Scroll Animations
gsap.from("header", { duration: 1, y: -100, opacity: 0, ease: "bounce" });
gsap.from("#home h2", { duration: 1.5, x: -200, opacity: 0, ease: "power2" });
gsap.from("#home p", { duration: 1.5, delay: 0.5, x: 200, opacity: 0 });
gsap.from(".container", { duration: 1, opacity: 0, stagger: 0.3 });
</script>
<script>
// Mobile Menu Toggle
const menuToggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");

menuToggle.addEventListener("click", () => {
  menu.classList.toggle("hidden");
  menu.classList.toggle("flex");
});
</script>

</html>