<?php include 'header.php'; ?>

<!-- Hero Section -->
<section id="hero" class="relative bg-gradient-to-b from-gray-900 to-transparent py-24">
  <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center opacity-20" style="background-image: url('/co/images/hero-bg.png');"></div>
  <div class="container mx-auto px-6 text-center relative z-10">
    <div class="text-center">
      <h2 class="text-4xl md:text-6xl font-bold mb-4">Hi, I'm <span class="text-blue-400">Caleb</span></h2>
      <p class="text-lg md:text-2xl mb-8">Web Developer | Web Apps Expert | Business Builder</p>
      <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
        <a href="#portfolio" class="bg-blue-500 px-6 py-3 rounded-lg hover:bg-blue-600">View My Work</a>
        <a href="contact.php" class="bg-gray-600 px-6 py-3 rounded-lg hover:bg-gray-700">Let's Collaborate</a>
      </div>
    </div>
  </div>
</section>

<!-- Featured Project -->
<section class="bg-gray-800 text-white py-16">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-sky-500 text-center mb-8">Featured Project</h2>

    <div class="glow-border rounded-xl p-1">
      <div class="bg-gray-700 p-6 rounded-lg shadow-lg grid grid-cols-1 md:grid-cols-3 gap-6 rounded-xl">

        <!-- Project Logo -->
        <div class="flex justify-center items-center">
          <img src="https://cxp.com.ng/images/logo/cxp.png"
               alt="CXP Platform"
               class="rounded-lg shadow-md max-h-40 object-contain">
        </div>

        <!-- Project Info -->
        <div class="col-span-2 space-y-6">
          <h3 class="text-2xl font-bold text-gray-100">CXP – Creative eXponential Platform</h3>
          <p class="text-gray-300 leading-relaxed">
            CXP is a dynamic digital ecosystem built to empower creatives, entrepreneurs and businesses with tools that accelerate growth and innovation. It’s a hub for collaboration, creativity, and exponential opportunities in the modern digital economy.
          </p>

          <div class="grid grid-cols-2 gap-6">
            <div>
              <h4 class="text-lg font-semibold text-gray-400">Launch Date</h4>
              <p class="text-gray-300">Pending</p>
            </div>
            <div>
              <h4 class="text-lg font-semibold text-gray-400">Status</h4>
              <p class="text-yellow-400 font-semibold">In Progress</p>
            </div>
          </div>

          <div class="flex items-center justify-start space-x-3 mt-4">
            <i class="fas fa-globe text-sky-500 text-2xl"></i>
            <span class="text-gray-300 font-medium text-lg">Web Platform</span>
          </div>

          <!-- View Project Button -->
          <div class="mt-4">
            <a href="https://cxp.com.ng" target="_blank"
               class="inline-block bg-sky-500 hover:bg-sky-600 text-white text-sm font-medium px-6 py-2 rounded-lg shadow-md transition duration-300">
              <i class="fas fa-arrow-right mr-2"></i> View Project
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="bg-gray-800 text-white py-16">
  <div class="container mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center justify-center mb-12">
      <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">

        <div class="profile-glow-wrapper w-44 h-44 rounded-full p-[3px] relative overflow-hidden">
          <div class="absolute inset-0 rounded-full animate-spin-slow bg-gradient-to-tr from-sky-400 via-purple-500 to-cyan-400 z-0"></div>
          <div class="relative z-10 w-full h-full rounded-full overflow-hidden bg-gray-800">
            <img src="images/caleb.png" alt="Caleb Orukwo" class="w-full h-full object-cover rounded-full border-4 border-gray-800">
          </div>
        </div>

      </div>
      <div class="text-center md:text-left">
        <h2 class="text-3xl font-bold text-sky-500 mb-4">Who Am I?</h2>
        <p class="text-gray-300 leading-relaxed mb-4">
          I'm Caleb Orukwo — a developer, product thinker, and digital business builder. I create high-impact web applications and help individuals and businesses bring their ideas to life online.
        </p>
        <a href="about.php" class="inline-block bg-sky-500 text-white px-6 py-3 rounded-full text-lg font-medium hover:bg-sky-600 transition">
          Learn More
        </a>
      </div>
    </div>

    <!-- Skills -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
      <div class="bg-gray-700 p-6 rounded-lg text-center">
        <i class="fas fa-code text-sky-500 text-4xl mb-4"></i>
        <h3 class="text-xl font-bold text-gray-300 mb-2">Web Development</h3>
        <p class="text-gray-400 leading-relaxed">Custom, responsive websites tailored to your business goals.</p>
      </div>
      <div class="bg-gray-700 p-6 rounded-lg text-center">
        <i class="fas fa-mobile-alt text-green-400 text-4xl mb-4"></i>
        <h3 class="text-xl font-bold text-gray-300 mb-2">Web & Mobile Apps</h3>
        <p class="text-gray-400 leading-relaxed">Modern applications with performance, security, and scale.</p>
      </div>
      <div class="bg-gray-700 p-6 rounded-lg text-center">
        <i class="fas fa-rocket text-yellow-400 text-4xl mb-4"></i>
        <h3 class="text-xl font-bold text-gray-300 mb-2">Business Strategy</h3>
        <p class="text-gray-400 leading-relaxed">Helping startups and brands build products and grow digitally.</p>
      </div>
    </div>

<style>
  .testimonial-card.hidden {
    display: none;
  }
  /* Profile picture styling */
  .profile-initials {
    width: 60px; /* Adjust size as needed */
    height: 60px; /* Adjust size as needed */
    border-radius: 50%; /* Makes it circular */
    background-color: #3b82f6; /* Blue background for initials */
    color: #e0f2fe; /* Light blue text for initials */
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.5rem; /* Larger font size */
    font-weight: bold;
    margin: 0 auto 1.5rem auto; /* Center and add space below */
    box-shadow: 0 0 0 3px rgba(135, 206, 235, 0.4); /* Subtle border effect */
  }
</style>

<div class="text-center mb-6">
  <h3 class="text-2xl font-bold text-sky-400 mb-6">What People Say</h3>
  <div class="testimonial-container relative overflow-hidden mx-auto max-w-2xl">
    <div class="testimonial-cards-wrapper flex transition-transform duration-500 ease-in-out">
      <div class="testimonial-card min-w-full bg-gray-700 p-6 rounded-lg shadow-lg">
        <div class="profile-initials" data-name="Zubem Uche">ZU</div>
        <p class="text-gray-300 mb-4">"Caleb transformed our business website into a professional and modern platform. His process was smooth and insightful."</p>
        <h4 class="text-lg font-semibold text-sky-400">— Zubem Uche</h4>
      </div>

      <div class="testimonial-card min-w-full bg-gray-700 p-6 rounded-lg shadow-lg hidden">
        <div class="profile-initials" data-name="Clement Ikojah">CI</div>
        <p class="text-gray-300 mb-4">"Working with Caleb on our app was a game-changer. He’s both creative and highly technical."</p>
        <h4 class="text-lg font-semibold text-sky-400">— Clement Ikojah</h4>
      </div>

      <div class="testimonial-card min-w-full bg-gray-700 p-6 rounded-lg shadow-lg hidden">
        <div class="profile-initials" data-name="Samuel Nwaerema">SN</div>
        <p class="text-gray-300 mb-4">"Great collaboration, clear communication, and an outstanding result. Highly recommend Caleb!"</p>
        <h4 class="text-lg font-semibold text-sky-400">— Samuel Nwaerema</h4>
      </div>

      <div class="testimonial-card min-w-full bg-gray-700 p-6 rounded-lg shadow-lg hidden">
        <div class="profile-initials" data-name="Blessing">BL</div>
        <p class="text-gray-300 mb-4">"I benefited a lot from Caleb’s web development training. He’s a great teacher and mentor."</p>
        <h4 class="text-lg font-semibold text-sky-400">— Blessing</h4>
      </div>
    </div>
  </div>
</div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".testimonial-card");
    let currentCard = 0;
    let autoRotateInterval;
    const rotationSpeed = 8000; // 8000 milliseconds = 8 seconds

    // Function to generate initials and set them
    function generateInitials() {
      cards.forEach(card => {
        const nameElement = card.querySelector('h4');
        const initialsElement = card.querySelector('.profile-initials');
        if (nameElement && initialsElement) {
          const name = nameElement.textContent.replace('— ', '').trim();
          const nameParts = name.split(' ');
          let initials = '';
          if (nameParts.length > 0) {
            initials += nameParts[0].charAt(0);
            if (nameParts.length > 1) {
              initials += nameParts[1].charAt(0);
            } else if (nameParts[0].length > 1) { // If only one name, take first two letters
                initials = nameParts[0].substring(0,2);
            }
          }
          initialsElement.textContent = initials.toUpperCase();
        }
      });
    }

    function showCard(index) {
      cards.forEach((card, i) => {
        if (i === index) {
          card.classList.remove("hidden");
        } else {
          card.classList.add("hidden");
        }
      });
    }

    // Function to move to the next card
    function nextCard() {
      currentCard = (currentCard + 1) % cards.length;
      showCard(currentCard);
    }

    // Function to start the automatic rotation
    function startAutoRotate() {
      stopAutoRotate(); // Ensure no multiple intervals are running
      autoRotateInterval = setInterval(nextCard, rotationSpeed);
    }

    // Function to stop the automatic rotation
    function stopAutoRotate() {
      clearInterval(autoRotateInterval);
    }

    // Pause rotation when the user hovers over the testimonial container
    const testimonialContainer = document.querySelector(".testimonial-container");
    testimonialContainer.addEventListener("mouseenter", stopAutoRotate);
    testimonialContainer.addEventListener("mouseleave", startAutoRotate);

    // Initial setup
    generateInitials(); // Generate initials when the DOM is ready
    showCard(currentCard);
    startAutoRotate(); // Start the rotation when the page loads
  });
</script>

<!-- Portfolio Section -->
<section id="portfolio" class="bg-gray-900 py-12">
  <div class="container mx-auto px-6 md:px-12">
    <h2 class="text-4xl font-extrabold text-center text-sky-400 mb-8">My Portfolio</h2>
    <p class="text-center text-lg mb-10 text-gray-300">Here are some of the projects I’ve worked on with their current status.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- iShop -->
      <div class="bg-gray-800 rounded-lg shadow-lg p-6">
        <h4 class="text-2xl font-bold mb-3 text-gray-200">iShop</h4>
        <p class="text-gray-400 mb-4">An innovative e-commerce platform reshaping online shopping.</p>
        <span class="inline-block px-3 py-1 text-sm font-medium bg-green-100 text-green-700 rounded-full">Completed</span>
      </div>

      <!-- CXP -->
      <div class="bg-gray-800 rounded-lg shadow-lg p-6">
        <h4 class="text-2xl font-bold mb-3 text-gray-200">CXP</h4>
        <p class="text-gray-400 mb-4">Creative eXponential Platform empowering creatives and businesses.</p>
        <span class="inline-block px-3 py-1 text-sm font-medium bg-yellow-100 text-yellow-700 rounded-full">In Progress</span>
      </div>

      <!-- Capledgers -->
      <div class="bg-gray-800 rounded-lg shadow-lg p-6">
        <h4 class="text-2xl font-bold mb-3 text-gray-200">Capledgers</h4>
        <p class="text-gray-400 mb-4">A crypto-based investment portal providing transparent, modern digital finance tools.</p>
        <span class="inline-block px-3 py-1 text-sm font-medium bg-yellow-100 text-yellow-700 rounded-full">In Progress</span>
      </div>

      <!-- Uphouse -->
      <div class="bg-gray-800 rounded-lg shadow-lg p-6">
        <h4 class="text-2xl font-bold mb-3 text-gray-200">Uphouse</h4>
        <p class="text-gray-400 mb-4">A portal dedicated to simplifying housing and real estate solutions.</p>
        <span class="inline-block px-3 py-1 text-sm font-medium bg-red-100 text-red-700 rounded-full">Pending</span>
      </div>

      <!-- Cxpress Hub -->
      <div class="bg-gray-800 rounded-lg shadow-lg p-6">
        <h4 class="text-2xl font-bold mb-3 text-gray-200">Cxpress Hub</h4>
        <p class="text-gray-400 mb-4">A hub for tech, social, and digital services—powering modern needs.</p>
        <span class="inline-block px-3 py-1 text-sm font-medium bg-red-100 text-red-700 rounded-full">Pending</span>
      </div>

      <!-- Starbliz -->
      <div class="bg-gray-800 rounded-lg shadow-lg p-6">
        <h4 class="text-2xl font-bold mb-3 text-gray-200">Starbliz</h4>
        <p class="text-gray-400 mb-4">A social platform for creators and digital entrepreneurs (Coming soon).</p>
        <span class="inline-block px-3 py-1 text-sm font-medium bg-red-100 text-red-700 rounded-full">Pending</span>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-gray-900 text-white py-12">
  <div class="container mx-auto px-6 md:px-12">
    <h2 class="text-4xl font-extrabold mb-8 text-sky-400">Contact Me</h2>
    <p class="text-lg mb-10 text-gray-300">Connect with me directly. WhatsApp is the fastest way to get a response!</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <a href="https://wa.me/2347081169661?text=Hi%20Caleb%20Orukwo" target="_blank" class="flex items-start bg-green-700 p-6 rounded-lg shadow-xl hover:bg-green-600 transition transform hover:scale-105 lg:col-span-2">
        <i class="fab fa-whatsapp text-white text-4xl mr-5"></i>
        <div>
          <h4 class="text-2xl font-bold text-white mb-1">WhatsApp</h4>
          <p class="text-white text-lg">+2347081169661</p>
          <p class="text-green-100 text-sm mt-1">Fastest way to reach me — let's chat!</p>
        </div>
      </a>
      <a href="mailto:Caleborukwo@gmail.com" class="flex items-start bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition">
        <i class="fas fa-envelope text-sky-400 text-3xl mr-4"></i>
        <div>
          <p class="text-gray-300">Caleborukwo@gmail.com</p>
        </div>
      </a>
      <a href="https://www.facebook.com/share/16QF9pjedo/" target="_blank" class="flex items-start bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition">
        <i class="fab fa-facebook text-blue-600 text-3xl mr-4"></i>
        <div>
          <p class="text-gray-300">Caleb Orukwo</p>
        </div>
      </a>
      <a href="https://ng.linkedin.com/in/corukwo" target="_blank" class="flex items-start bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition">
        <i class="fab fa-linkedin text-sky-500 text-3xl mr-4"></i>
        <div>
          <p class="text-gray-300">Caleb Orukwo</p>
        </div>
      </a>
    </div>
  </div>
</section>

<style>
@keyframes borderGlow {
  0%, 100% {
    box-shadow: 0 0 3px 1px rgba(59, 130, 246, 0.6), 0 0 6px 2px rgba(99, 102, 241, 0.5);
  }
  50% {
    box-shadow: 0 0 5px 2px rgba(16, 185, 129, 0.7), 0 0 10px 3px rgba(34, 211, 238, 0.6);
  }
}
.glow-border {
  animation: borderGlow 6s ease-in-out infinite;
  background: linear-gradient(135deg, #3b82f6, #6366f1, #10b981, #22d3ee);
  padding: 2px;
  border-radius: 1rem;
}
@keyframes slowSpin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.animate-spin-slow {
  animation: slowSpin 12s linear infinite;
}
</style>

<?php include 'footer.php'; ?>