<?php include 'header.php'; ?>

<section id="hero" class="relative bg-[#0B1120] overflow-hidden py-32 flex items-center min-h-screen">
  <canvas id="hero-canvas" class="absolute inset-0 z-0 pointer-events-none opacity-40"></canvas>
  
  <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-3/4 h-3/4 bg-blue-500/20 rounded-full blur-[120px] pointer-events-none"></div>
  
  <div class="container mx-auto px-6 text-center relative z-10">
    <div class="max-w-3xl mx-auto space-y-6">
      <h2 class="text-5xl md:text-7xl font-extrabold tracking-tight text-white mb-4">
        Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">Caleb</span>
      </h2>
      <p class="text-xl md:text-2xl text-gray-300 font-light tracking-wide mb-10">
        Web Developer <span class="text-cyan-500 font-bold mx-2">|</span> Trainer <span class="text-cyan-500 font-bold mx-2">|</span> Business Builder
      </p>
      <div class="flex flex-col sm:flex-row justify-center items-center gap-6 mt-8">
        <a href="#portfolio" class="group relative px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full text-white font-semibold text-lg shadow-[0_0_20px_rgba(6,182,212,0.4)] hover:shadow-[0_0_30px_rgba(6,182,212,0.6)] hover:-translate-y-1 transition-all duration-300">
          View My Work
          <i class="fas fa-arrow-down ml-2 group-hover:translate-y-1 transition-transform"></i>
        </a>
        <a href="contact.php" class="px-8 py-4 bg-white/5 backdrop-blur-md border border-white/10 rounded-full text-white font-semibold text-lg hover:bg-white/10 hover:-translate-y-1 transition-all duration-300">
          Let's Collaborate
        </a>
      </div>
    </div>
  </div>
</section>

<script>
(function() {
  const canvas = document.getElementById('hero-canvas');
  const ctx = canvas.getContext('2d');
  let particles = [];
  const particleCount = 60; // Increase for more dots

  function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  }

  window.addEventListener('resize', resize);
  resize();

  class Particle {
    constructor() {
      this.x = Math.random() * canvas.width;
      this.y = Math.random() * canvas.height;
      this.vx = (Math.random() - 0.5) * 0.5;
      this.vy = (Math.random() - 0.5) * 0.5;
      this.size = 1.5;
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;

      if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
      if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
    }

    draw() {
      ctx.fillStyle = 'rgba(6, 182, 212, 0.5)';
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fill();
    }
  }

  function init() {
    for (let i = 0; i < particleCount; i++) {
      particles.push(new Particle());
    }
  }

  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    for (let i = 0; i < particles.length; i++) {
      particles[i].update();
      particles[i].draw();
      
      // Connection logic
      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const distance = Math.sqrt(dx * dx + dy * dy);
        
        if (distance < 150) {
          ctx.strokeStyle = `rgba(6, 182, 212, ${0.2 - (distance / 150) * 0.2})`;
          ctx.lineWidth = 0.5;
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.stroke();
        }
      }
    }
    requestAnimationFrame(animate);
  }

  init();
  animate();
})();
</script>

<section class="bg-[#0B1120] text-white py-20 relative border-t border-white/5 overflow-hidden">
  <div class="absolute top-0 right-0 w-64 h-64 bg-cyan-500/5 rounded-full blur-[100px] pointer-events-none"></div>

  <div class="container mx-auto px-6 max-w-6xl scroll-reveal">
    <div class="flex items-center justify-center gap-4 mb-12">
      <div class="h-[1px] w-12 bg-cyan-500"></div>
      <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 uppercase tracking-widest text-sm">Primary Project</h2>
      <div class="h-[1px] w-12 bg-cyan-500"></div>
    </div>

    <div class="relative group">
      <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
      
<div class="relative bg-gray-900/80 backdrop-blur-xl border border-white/10 p-8 md:p-10 rounded-2xl grid grid-cols-1 md:grid-cols-3 gap-8 items-center group">
  <div class="flex justify-center items-center bg-gray-800/50 p-6 rounded-xl border border-white/5 h-full transition-colors group-hover:border-cyan-500/30 overflow-hidden">
    <img src="https://cxp.com.ng/images/logo/cxp.png" 
         alt="Creators X Pro" 
         class="logo-float rounded-lg max-h-32 object-contain filter drop-shadow-2xl">
  </div>


<style>
  .logo-float {
    /* The animation stays continuous regardless of hover */
    animation: float-glow 6s ease-in-out infinite;
    will-change: transform, filter;
    transition: transform 0.5s ease;
  }

  @keyframes float-glow {
    0% {
      transform: translateY(0px) rotate(0deg);
      filter: drop-shadow(0 5px 15px rgba(6, 182, 212, 0.2)) brightness(1);
    }
    50% {
      transform: translateY(-10px) rotate(1deg);
      filter: drop-shadow(0 20px 30px rgba(6, 182, 212, 0.5)) brightness(1.1);
    }
    100% {
      transform: translateY(0px) rotate(0deg);
      filter: drop-shadow(0 5px 15px rgba(6, 182, 212, 0.2)) brightness(1);
    }
  }
</style>

        <div class="col-span-2 space-y-5">
          <div class="flex items-center gap-3">
             <h3 class="text-3xl font-bold text-white tracking-tight">C X-Pro</h3>
             <span class="px-2 py-0.5 rounded bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-[10px] uppercase font-bold tracking-widest">Edutech</span>
          </div>
          
          <p class="text-gray-400 leading-relaxed text-lg">
            A specialized e-learning architecture engineered for creators and educators. This system automates the delivery of digital courses, management of student progress, and monetization workflows—enabling experts to scale their knowledge without manual intervention.
          </p>

          <div class="flex flex-wrap gap-6 py-4 border-y border-white/10">
            <div>
              <h4 class="text-xs uppercase tracking-wider text-gray-500 font-semibold mb-1">Status</h4>
              <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-sm font-medium border border-emerald-500/20">
                <i class="fas fa-check-circle text-xs"></i> Live
              </span>
            </div>
            <div>
              <h4 class="text-xs uppercase tracking-wider text-gray-500 font-semibold mb-1">System Type</h4>
              <p class="text-gray-200 font-medium flex items-center gap-2">
                <i class="fas fa-graduation-cap text-cyan-500"></i> LMS & Course Engine
              </p>
            </div>
          </div>

          <div class="pt-2 flex flex-col sm:flex-row gap-4">
            <a href="https://cxp.com.ng" target="_blank" class="inline-flex items-center justify-center gap-2 bg-white text-gray-900 hover:bg-cyan-50 font-bold px-6 py-3 rounded-xl shadow-lg transition-all duration-300 hover:-translate-y-1">
              Launch Platform <i class="fas fa-external-link-alt text-xs ml-1"></i>
            </a>
            <div class="flex items-center gap-2 px-4 text-gray-400 text-sm italic">
               <i class="fas fa-users text-cyan-500/50"></i> Empowering 30+ Creators
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-[#0B1120] text-white py-20 border-t border-white/5">
  <div class="container mx-auto px-6 max-w-6xl">
    
    <div class="flex flex-col lg:flex-row items-center gap-12 mb-20">
      <div class="relative flex-shrink-0">
        <div class="absolute -inset-2 bg-gradient-to-tr from-cyan-400 to-blue-600 rounded-full blur-md opacity-40 animate-pulse"></div>
        <div class="w-48 h-48 rounded-full p-1 bg-gradient-to-tr from-cyan-400 to-blue-600 relative z-10">
          <div class="w-full h-full rounded-full overflow-hidden bg-gray-900 border-4 border-[#0B1120]">
            <img src="https://cxp.com.ng/uploads/avatars/avatar_1.jpg" alt="Caleb Orukwo" class="w-full h-full object-cover">
          </div>
        </div>
      </div>

      <div class="text-center lg:text-left space-y-6">
        <h2 class="text-4xl font-bold text-white tracking-tight">Who Am I?</h2>
        <p class="text-gray-400 leading-relaxed text-lg max-w-2xl">
          I'm Caleb Orukwo — a developer, product thinker, and digital business builder. I architect high-impact web applications and help individuals and businesses bring their complex ideas to life online through scalable digital systems.
        </p>
        <a href="about.php" class="inline-block text-cyan-400 font-semibold hover:text-cyan-300 transition-colors border-b-2 border-cyan-400/30 hover:border-cyan-300 pb-1">
          Read my full story <i class="fas fa-arrow-right ml-2 text-sm"></i>
        </a>
      </div>
    </div> <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16 scroll-reveal">
      <div class="group bg-gray-800/40 backdrop-blur-sm border border-white/5 p-8 rounded-2xl hover:bg-gray-800/80 hover:-translate-y-2 transition-all duration-500 flex flex-col">
        <div class="w-14 h-14 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-500/20 transition-all duration-300">
          <i class="fas fa-code text-blue-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-white mb-3">Custom Web Dev</h3>
        <p class="text-gray-400 leading-relaxed mb-8">
          Need a website that actually works for you? I build clean, responsive sites designed to turn your visitors into customers while you focus on your business.
        </p>
        <div class="mt-auto">
          <a href="web-request.php" 
             class="inline-flex items-center text-sm font-bold text-cyan-400 group-hover:text-white transition-colors">
            Request a Website <i class="fas fa-arrow-right ml-2 text-[10px]"></i>
          </a>
        </div>
      </div>

      <div class="group bg-gray-800/40 backdrop-blur-sm border border-white/5 p-8 rounded-2xl hover:bg-gray-800/80 hover:-translate-y-2 transition-all duration-500 flex flex-col">
        <div class="w-14 h-14 bg-green-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-green-500/20 transition-all duration-300">
          <i class="fas fa-brain text-green-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-white mb-3">AI & Tech Training</h3>
        <p class="text-gray-400 leading-relaxed mb-8">
          I teach high-leverage AI skills and modern web development. Whether you're an adult or want your kids to master the future, I make technical skills easy to learn.
        </p>
        <div class="mt-auto">
          <a href="training-request.php" 
             class="inline-flex items-center text-sm font-bold text-green-400 group-hover:text-white transition-colors">
            Book a Training <i class="fas fa-arrow-right ml-2 text-[10px]"></i>
          </a>
        </div>
      </div>

      <div class="group bg-gray-800/40 backdrop-blur-sm border border-white/5 p-8 rounded-2xl hover:bg-gray-800/80 hover:-translate-y-2 transition-all duration-500 flex flex-col">
        <div class="w-14 h-14 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-purple-500/20 transition-all duration-300">
          <i class="fas fa-rocket text-purple-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-white mb-3">Digital Strategy</h3>
        <p class="text-gray-400 leading-relaxed mb-8">
          Stop guessing and start growing. I help you architect the right digital systems and marketing workflows to scale your brand without the manual burnout.
        </p>
        <div class="mt-auto">
          <a href="https://wa.me/2347035466375?text=Hi%20Caleb,%20I%20need%20a%20digital%20strategy%20to%20scale%20my%20business.%20Let's%20connect." 
             class="inline-flex items-center text-sm font-bold text-purple-400 group-hover:text-white transition-colors">
            Start Strategizing <i class="fas fa-arrow-right ml-2 text-[10px]"></i>
          </a>
        </div>
      </div>
    </div>

<div class="text-center max-w-5xl mx-auto mt-32 px-6">
  <h3 class="text-xs uppercase tracking-[0.3em] text-cyan-500 font-bold mb-12">Trusted by Visionaries</h3>
  
  <div class="relative group" id="testimonial-slider">
    <div class="absolute -top-10 left-1/2 -translate-x-1/2 text-9xl text-white/5 font-serif pointer-events-none select-none">“</div>

    <div class="testimonial-container relative min-h-[400px] md:min-h-[300px] flex items-center justify-center">
      
      <div class="testimonial-card active absolute inset-0 flex flex-col items-center justify-center transition-all duration-700 ease-in-out">
        <div class="relative mb-8">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-2xl font-bold text-white shadow-[0_0_30px_rgba(6,182,212,0.3)] rotate-3">ZU</div>
          <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-[#0B1120] rounded-full border border-white/10 flex items-center justify-center">
            <i class="fas fa-quote-right text-cyan-500 text-[10px]"></i>
          </div>
        </div>
        <p class="text-xl md:text-2xl text-gray-200 font-medium italic mb-8 leading-relaxed max-w-3xl px-4">
          "Caleb transformed our business website into a professional and modern platform. His process was smooth and insightful."
        </p>
        <div class="text-center">
          <h4 class="text-white font-bold tracking-widest uppercase text-sm">Zubem Uche</h4>
          <p class="text-cyan-500/60 text-[10px] uppercase mt-1 tracking-tighter font-semibold">Business Lead</p>
        </div>
      </div>

      <div class="testimonial-card absolute inset-0 flex flex-col items-center justify-center transition-all duration-700 ease-in-out">
        <div class="relative mb-8">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-2xl font-bold text-white shadow-[0_0_30px_rgba(168,85,247,0.3)] -rotate-3">CI</div>
          <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-[#0B1120] rounded-full border border-white/10 flex items-center justify-center">
            <i class="fas fa-quote-right text-purple-400 text-[10px]"></i>
          </div>
        </div>
        <p class="text-xl md:text-2xl text-gray-200 font-medium italic mb-8 leading-relaxed max-w-3xl px-4">
          "Working with Caleb on our app was a game-changer. He’s both creative and highly technical."
        </p>
        <div class="text-center">
          <h4 class="text-white font-bold tracking-widest uppercase text-sm">Clement Ikojah</h4>
          <p class="text-purple-400/60 text-[10px] uppercase mt-1 tracking-tighter font-semibold">Tech Founder</p>
        </div>
      </div>

      <div class="testimonial-card absolute inset-0 flex flex-col items-center justify-center transition-all duration-700 ease-in-out">
        <div class="relative mb-8">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center text-2xl font-bold text-white shadow-[0_0_30px_rgba(16,185,129,0.3)] rotate-6">SN</div>
          <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-[#0B1120] rounded-full border border-white/10 flex items-center justify-center">
            <i class="fas fa-quote-right text-emerald-400 text-[10px]"></i>
          </div>
        </div>
        <p class="text-xl md:text-2xl text-gray-200 font-medium italic mb-8 leading-relaxed max-w-3xl px-4">
          "Great collaboration, clear communication, and an outstanding result. Highly recommend Caleb!"
        </p>
        <div class="text-center">
          <h4 class="text-white font-bold tracking-widest uppercase text-sm">Samuel Nwaerema</h4>
          <p class="text-emerald-400/60 text-[10px] uppercase mt-1 tracking-tighter font-semibold">Executive Partner</p>
        </div>
      </div>
    </div>

    <div class="flex justify-center gap-3 mt-8">
      <button class="nav-dot active w-8 h-1 rounded-full bg-cyan-500/20 transition-all duration-300"></button>
      <button class="nav-dot w-2 h-1 rounded-full bg-cyan-500/20 transition-all duration-300"></button>
      <button class="nav-dot w-2 h-1 rounded-full bg-cyan-500/20 transition-all duration-300"></button>
    </div>
  </div>
</div>

<style>
  .testimonial-card {
    opacity: 0;
    visibility: hidden;
    transform: scale(0.95);
    z-index: 0;
  }
  .testimonial-card.active {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
    z-index: 10;
  }
  .nav-dot.active {
    background-color: #06b6d4 !important;
    width: 2rem !important;
  }
</style>

<script>
(function() {
  const slider = document.getElementById('testimonial-slider');
  const cards = slider.querySelectorAll('.testimonial-card');
  const dots = slider.querySelectorAll('.nav-dot');
  let current = 0;
  let interval;

  function updateSlider(index) {
    cards.forEach((card, i) => {
      if (i === index) {
        card.classList.add('active');
        dots[i].classList.add('active');
      } else {
        card.classList.remove('active');
        dots[i].classList.remove('active');
      }
    });
  }

  function next() {
    current = (current + 1) % cards.length;
    updateSlider(current);
  }

  function start() {
    interval = setInterval(next, 5000);
  }

  // Dot Clicks
  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      clearInterval(interval);
      current = i;
      updateSlider(current);
      start();
    });
  });

  start();
})();
</script>
</section>

<section id="portfolio" class="bg-[#0B1120] py-24 relative overflow-hidden">
  <div class="absolute top-0 right-0 w-1/2 h-full bg-blue-900/5 blur-[150px] pointer-events-none"></div>
  
  <div class="container mx-auto px-6 md:px-12 max-w-7xl relative z-10">
    <div class="text-center mb-16 scroll-reveal">
      <h2 class="text-4xl font-extrabold text-white tracking-tight mb-4">Ecosystem & Projects</h2>
      <p class="text-lg text-gray-400 max-w-2xl mx-auto">A selection of digital systems and platforms architected for growth.</p>
    </div>

    <div id="project-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      </div>
  </div>
</section>

<section id="contact" class="bg-[#0B1120] text-white py-24 border-t border-white/5">
  <div class="container mx-auto px-6 md:px-12 max-w-6xl">
    <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-white/10 rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden">
      <div class="absolute top-0 right-0 w-64 h-64 bg-cyan-500/10 rounded-full blur-[80px]"></div>

      <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 relative z-10">
        
        <div class="lg:col-span-2 space-y-6">
          <h2 class="text-4xl font-extrabold text-white">Let's build<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Systems over Hustle.</span></h2>
          <p class="text-gray-400 text-lg">Have a project idea or need technical architecture? Let's discuss how we can scale your vision.</p>
        </div>

        <div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 gap-4">
          <a href="https://wa.me/2347035466375?text=Hi%20Caleb%20Orukwo" target="_blank" class="sm:col-span-2 flex items-center p-6 bg-gradient-to-r from-emerald-600 to-emerald-500 rounded-2xl hover:scale-[1.02] transition-transform duration-300 shadow-lg shadow-emerald-900/20 group">
            <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center mr-6 group-hover:bg-white/30 transition-colors">
              <i class="fab fa-whatsapp text-white text-3xl"></i>
            </div>
            <div>
              <h4 class="text-xl font-bold text-white mb-1">Chat on WhatsApp</h4>
              <p class="text-emerald-100 text-sm">Fastest way to reach me — usually replies in minutes.</p>
            </div>
          </a>

          <a href="mailto:Caleborukwo@gmail.com" class="flex items-center p-5 bg-gray-800/50 border border-white/5 rounded-2xl hover:bg-gray-800 hover:-translate-y-1 transition-all duration-300">
            <i class="fas fa-envelope text-cyan-400 text-2xl mr-4"></i>
            <span class="text-gray-300 font-medium truncate">Email Me</span>
          </a>

          <a href="https://ng.linkedin.com/in/corukwo" target="_blank" class="flex items-center p-5 bg-gray-800/50 border border-white/5 rounded-2xl hover:bg-gray-800 hover:-translate-y-1 transition-all duration-300">
            <i class="fab fa-linkedin text-blue-500 text-2xl mr-4"></i>
            <span class="text-gray-300 font-medium">LinkedIn</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* Scoped active class for the new fade-in slider logic */
.testimonial-card.active {
  opacity: 1;
  z-index: 10;
}
</style>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Upgraded Testimonial Logic - Opacity Fade instead of Display None
    const cards = document.querySelectorAll(".testimonial-card");
    let currentCard = 0;
    let autoRotateInterval;
    const rotationSpeed = 6000; // Faster, punchier rotation (6s)

    function showCard(index) {
      cards.forEach((card, i) => {
        if (i === index) {
          card.classList.add("active");
        } else {
          card.classList.remove("active");
        }
      });
    }

    function nextCard() {
      currentCard = (currentCard + 1) % cards.length;
      showCard(currentCard);
    }

    function startAutoRotate() {
      stopAutoRotate();
      autoRotateInterval = setInterval(nextCard, rotationSpeed);
    }

    function stopAutoRotate() {
      clearInterval(autoRotateInterval);
    }

    const testimonialContainer = document.querySelector(".testimonial-container");
    if(testimonialContainer) {
        testimonialContainer.addEventListener("mouseenter", stopAutoRotate);
        testimonialContainer.addEventListener("mouseleave", startAutoRotate);
    }

    if(cards.length > 0) {
        showCard(currentCard);
        startAutoRotate();
    }
  });

document.addEventListener("DOMContentLoaded", () => {
  const projects = [
    { 
      name: 'Myroqqu', 
      desc: 'A crypto investment platform built to provide users with a structured digital investment experience.', 
      status: 'In Progress', 
      color: 'yellow', 
      url: 'https://myroqqu.com',
      stack: ['PHP', 'MySQL', 'JS', 'Bootstrap'] 
    },
    { 
      name: 'Capledgers', 
      desc: 'A digital finance platform designed to provide structured tools for modern investment management.', 
      status: 'Completed', 
      color: 'green', 
      url: 'https://capledgers.com',
      stack: ['PHP', 'MySQL', 'JS', 'Bootstrap'] 
    },
    { 
      name: 'Luiwe', 
      desc: 'A multi-vendor e-commerce platform designed to connect customers with multiple sellers in one marketplace.', 
      status: 'In Progress', 
      color: 'yellow', 
      url: 'https://luiwe.com',
      stack: ['PHP', 'MySQL', 'JS', 'Tailwind', 'React'] 
    },
    { 
      name: 'Jasdor Blog', 
      desc: 'An accessible blogging platform designed for a visually impaired blogger to share content online.', 
      status: 'Completed', 
      color: 'green', 
      url: 'https://jasdorblog.com',
      stack: ['PHP', 'MySQL', 'JS', 'Bootstrap'] 
    },
    { 
      name: 'CXP', 
      desc: 'A digital education and creator platform built around online courses, learning and creator monetization.', 
      status: 'Completed', 
      color: 'green', 
      url: 'https://cxp.com.ng',
      stack: ['PHP', 'MySQL', 'JS', 'Bootstrap'] 
    },
    { 
      name: 'VIP Community', 
      desc: 'An exclusive digital community designed for networking, premium resources and collaborative growth.', 
      status: 'Pending', 
      color: 'gray', 
      stack: ['PHP', 'MySQL', 'JS', 'Tailwind', 'React'] 
    }
  ];

  const projectGrid = document.getElementById('project-grid');

  const bgMap = {
    green: 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
    yellow: 'bg-yellow-500/10 text-yellow-400 border-yellow-500/20',
    gray: 'bg-gray-500/10 text-gray-400 border-gray-500/20'
  };

  if (projectGrid) {
    projectGrid.innerHTML = projects.map(proj => {
      const stackHtml = proj.stack.map(tech => 
        `<span class="px-2 py-1 bg-gray-800 text-gray-300 text-[10px] uppercase tracking-wider rounded border border-gray-700">${tech}</span>`
      ).join('');

      const pillClass = bgMap[proj.color];

      return `
        <div class="group relative bg-gray-800/30 backdrop-blur-md border border-white/5 rounded-2xl p-8 hover:bg-gray-800/60 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(6,182,212,0.1)] transition-all duration-500 flex flex-col justify-between h-full overflow-hidden scroll-reveal">
          
          <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-500 to-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
          
          <div class="relative z-10">
            <div class="flex justify-between items-start mb-4">
              <h4 class="text-2xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                ${proj.name}
              </h4>

              ${
                proj.url
                  ? `
                    <a href="${proj.url}" target="_blank" rel="noopener noreferrer"
                       class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:rotate-45"
                       aria-label="Visit ${proj.name}">
                      <i class="fas fa-arrow-up text-cyan-400 text-sm"></i>
                    </a>
                  `
                  : `
                    <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                      <i class="fas fa-lock text-gray-500 text-sm"></i>
                    </div>
                  `
              }
            </div>

            <p class="text-gray-400 mb-6 leading-relaxed">
              ${proj.desc}
            </p>
            
            <div class="flex flex-wrap gap-2 mb-6 opacity-40 group-hover:opacity-100 transition-opacity duration-300">
              ${stackHtml}
            </div>
          </div>
          
          <div class="mt-auto border-t border-white/5 pt-4 relative z-10">
            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full border ${pillClass}">
              <i class="fas fa-circle text-[8px] mr-1 opacity-70"></i> ${proj.status}
            </span>
          </div>
        </div>
      `;
    }).join('');

    initScrollReveal();
  }

  function initScrollReveal() {
    const revealElements = document.querySelectorAll('.scroll-reveal');

    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        }
      });
    }, { threshold: 0.1 });

    revealElements.forEach(el => revealObserver.observe(el));
  }
});
</script>

<?php include 'footer.php'; ?>
