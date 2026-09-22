<?php include 'header.php'; ?>

<main class="min-h-screen bg-[#0B1120] pt-32 pb-20 px-6">
    <div id="promo-popup" class="fixed bottom-8 left-8 z-[100] max-w-sm bg-gray-900 border border-cyan-500/30 p-6 rounded-2xl shadow-2xl transform transition-all duration-500 translate-y-0 opacity-100">
        <button onclick="dismissPopup()" class="absolute top-2 right-2 text-gray-500 hover:text-white">
            <i class="fas fa-times"></i>
        </button>
        <div class="flex items-center gap-4 mb-4">
            <div class="w-12 h-12 bg-cyan-500/20 rounded-full flex items-center justify-center text-cyan-400">
                <i class="fas fa-graduation-cap text-xl"></i>
            </div>
            <h4 class="text-white font-bold">Prefer Self-Learning?</h4>
        </div>
        <p class="text-gray-400 text-sm mb-4">Master high-income skills at your own pace with our premium EduTech courses.</p>
        <a href="https://wa.me/2347035466375?text=Hi%20Caleb,%20I'm%20interested%20in%20your%20self-learning%20EduTech%20courses." class="block text-center py-2 bg-cyan-600 hover:bg-cyan-500 text-white text-xs font-bold rounded-lg transition-colors">
            ASK ME ABOUT COURSES
        </a>
    </div>

    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-white mb-4">Training Service Request</h2>
            <p class="text-gray-400">Take the next step in mastering digital systems. Fill the form below to begin.</p>
        </div>

        <form id="trainingForm" class="bg-gray-800/40 backdrop-blur-md border border-white/10 p-8 rounded-3xl shadow-xl space-y-6">
            <div>
                <label class="block text-gray-300 text-sm font-semibold mb-2">Full Name</label>
                <input type="text" id="fullname" required placeholder="John Doe" class="w-full bg-gray-900/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500 outline-none transition-all">
            </div>

            <div>
                <label class="block text-gray-300 text-sm font-semibold mb-2">Email Address</label>
                <input type="email" id="email" required placeholder="john@example.com" class="w-full bg-gray-900/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500 outline-none transition-all">
            </div>

            <div>
                <label class="block text-gray-300 text-sm font-semibold mb-2">Training Type</label>
                <select id="training_type" required class="w-full bg-gray-900/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500 outline-none transition-all">
                    <option value="" disabled selected>Select a path</option>
                    <option value="Web Development">Web Development (Full-stack)</option>
                    <option value="AI Web Based Skills">AI Web Based Skills (Prompt Engineering)</option>
                    <option value="Course Creation">Course Creation & Systems</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-300 text-sm font-semibold mb-2">Who is receiving the training?</label>
                <div class="flex gap-6">
                    <label class="flex items-center text-gray-400 cursor-pointer">
                        <input type="radio" name="recipient" value="Myself (adult)" checked onclick="toggleConsent(false)" class="mr-2 accent-cyan-500"> Myself (Adult)
                    </label>
                    <label class="flex items-center text-gray-400 cursor-pointer">
                        <input type="radio" name="recipient" value="My Child (minor)" onclick="toggleConsent(true)" class="mr-2 accent-cyan-500"> My Child (Minor)
                    </label>
                </div>
            </div>

            <div id="consent-box" class="hidden bg-cyan-500/5 border border-cyan-500/20 p-4 rounded-xl">
                <label class="flex items-start gap-3 cursor-pointer">
                    <input type="checkbox" id="consent_check" class="mt-1 accent-cyan-500">
                    <span class="text-xs text-gray-400 leading-relaxed">
                        I hereby give formal consent for my child to participate in this training program and acknowledge that the trainer will interact with the minor for educational purposes.
                    </span>
                </label>
            </div>

            <div>
                <label class="block text-gray-300 text-sm font-semibold mb-2">Additional Notes (Optional)</label>
                <textarea id="notes" rows="4" placeholder="Any specific goals or requirements?" class="w-full bg-gray-900/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500 outline-none transition-all"></textarea>
            </div>

            <button type="submit" class="w-full py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-xl shadow-lg hover:shadow-cyan-500/30 hover:-translate-y-1 transition-all">
                SEND REQUEST VIA WHATSAPP
            </button>
        </form>
    </div>
</main>

<script>
    function toggleConsent(show) {
        const box = document.getElementById('consent-box');
        if (show) {
            box.classList.remove('hidden');
        } else {
            box.classList.add('hidden');
        }
    }

    function dismissPopup() {
        const popup = document.getElementById('promo-popup');
        popup.classList.add('translate-y-10', 'opacity-0', 'pointer-events-none');
    }

    document.getElementById('trainingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const fullname = document.getElementById('fullname').value;
        const email = document.getElementById('email').value;
        const type = document.getElementById('training_type').value;
        const recipient = document.querySelector('input[name="recipient"]:checked').value;
        const notes = document.getElementById('notes').value;
        const consent = document.getElementById('consent_check');

        if (recipient.includes('Minor') && !consent.checked) {
            alert("Please check the parental consent box to proceed.");
            return;
        }

        const whatsappMessage = `*NEW TRAINING REQUEST*%0A%0A` +
            `*Name:* ${fullname}%0A` +
            `*Email:* ${email}%0A` +
            `*Training:* ${type}%0A` +
            `*For:* ${recipient}%0A` +
            `*Notes:* ${notes || 'None'}`;

        window.open(`https://wa.me/2347035466375?text=${whatsappMessage}`, '_blank');
    });
</script>

<?php include 'footer.php'; ?>
