<?php include 'header.php'; ?>

<main class="min-h-screen bg-[#0B1120] pt-32 pb-20 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Start Your Project</h2>
            <p class="text-gray-400">Tell me about your vision, and let's build a high-performance system together.</p>
        </div>

        <form id="devForm" class="bg-gray-800/40 backdrop-blur-md border border-white/10 p-8 md:p-12 rounded-[2.5rem] shadow-2xl space-y-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-gray-300 text-sm font-semibold mb-3">Full Name / Brand Name</label>
                    <input type="text" id="fullname" required placeholder="Enter name" 
                           class="w-full bg-gray-900/50 border border-white/10 rounded-2xl px-5 py-4 text-white focus:border-cyan-500 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-gray-300 text-sm font-semibold mb-3">Project Category</label>
                    <select id="project_type" required onchange="updatePriceRange()" 
                            class="w-full bg-gray-900/50 border border-white/10 rounded-2xl px-5 py-4 text-white focus:border-cyan-500 outline-none transition-all appearance-none">
                        <option value="" disabled selected>Select Type</option>
                        <option value="Portfolio">Professional Portfolio</option>
                        <option value="Blog">Blog / News Magazine</option>
                        <option value="E-commerce">E-commerce Store</option>
                        <option value="Edutech">EduTech / LMS Portal</option>
                        <option value="Project Management">SaaS / Project Management</option>
                        <option value="Event Planning">Event / Booking Platform</option>
                        <option value="Campaign">Campaign / Landing Page</option>
                    </select>
                </div>
            </div>

            <div id="price-preview" class="bg-cyan-500/5 border border-cyan-500/20 rounded-2xl p-6 text-center transform transition-all duration-500 opacity-0 scale-95 h-0 overflow-hidden">
                <span class="text-xs uppercase tracking-widest text-cyan-500 font-bold">Estimated Market Value</span>
                <div id="range-text" class="text-2xl md:text-3xl font-mono text-white mt-1">₦0 - ₦0</div>
            </div>

            <div class="space-y-4">
                <div class="flex justify-between items-end">
                    <label class="text-gray-300 text-sm font-semibold">Your Proposed Budget</label>
                    <span id="budget-display" class="text-2xl font-bold text-cyan-400 font-mono">₦30,000</span>
                </div>
                <input type="range" id="budget_range" min="30000" max="5000000" step="10000" value="30000" 
                       oninput="updateBudget(this.value)" 
                       class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer accent-cyan-500">
                <div class="flex justify-between text-[10px] text-gray-500 font-bold uppercase">
                    <span>30k</span>
                    <span>5M</span>
                </div>
            </div>

            <div class="p-6 bg-gray-900/40 rounded-2xl border border-white/5 transition-all" id="urgency-container">
                <label class="flex items-center gap-4 cursor-pointer">
                    <input type="checkbox" id="is_urgent" onchange="toggleUrgencyMsg()" class="w-5 h-5 accent-red-500">
                    <span class="text-gray-300 font-medium">This project is urgent (Fast-Track Delivery)</span>
                </label>
                <div id="urgent-msg" class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="mt-4 p-3 bg-red-500/10 border border-red-500/20 rounded-lg flex items-center gap-3">
                        <i class="fas fa-exclamation-triangle text-red-500"></i>
                        <p class="text-xs text-red-400">Note: Express delivery requires a priority fee and 24/7 dedicated system monitoring.</p>
                    </div>
                </div>
            </div>

            <button type="submit" class="w-full py-5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-black text-lg rounded-2xl shadow-[0_0_30px_rgba(6,182,212,0.3)] hover:shadow-cyan-500/50 hover:-translate-y-1 transition-all uppercase tracking-widest">
                Deploy Project Request
            </button>
        </form>
    </div>
</main>

<style>
    /* Range Slider Styling */
    input[type='range']::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 24px;
        height: 24px;
        background: #06b6d4;
        border-radius: 50%;
        box-shadow: 0 0 15px rgba(6, 182, 212, 0.5);
    }
</style>

<script>
    const priceData = {
        'Portfolio': '35k - 150k',
        'Blog': '50k - 250k',
        'E-commerce': '250k - 1.5M',
        'Edutech': '300k - 2M',
        'Project Management': '500k - 4M',
        'Event Planning': '150k - 600k',
        'Campaign': '100k - 500k'
    };

    function updatePriceRange() {
        const type = document.getElementById('project_type').value;
        const preview = document.getElementById('price-preview');
        const text = document.getElementById('range-text');
        
        if (priceData[type]) {
            text.innerText = `₦${priceData[type]}`;
            preview.classList.remove('opacity-0', 'scale-95', 'h-0');
            preview.classList.add('opacity-100', 'scale-100', 'h-auto', 'mb-8');
        }
    }

    function updateBudget(val) {
        const display = document.getElementById('budget-display');
        display.innerText = "₦" + Number(val).toLocaleString();
    }

    function toggleUrgencyMsg() {
        const checked = document.getElementById('is_urgent').checked;
        const msg = document.getElementById('urgent-msg');
        msg.style.maxHeight = checked ? "100px" : "0";
    }

    document.getElementById('devForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('fullname').value;
        const type = document.getElementById('project_type').value;
        const budget = document.getElementById('budget-display').innerText;
        const urgent = document.getElementById('is_urgent').checked ? "YES (Priority)" : "No";

        const waMsg = `*WEB DEVELOPMENT REQUEST*%0A%0A` +
                      `*Client:* ${name}%0A` +
                      `*Type:* ${type}%0A` +
                      `*Offer:* ${budget}%0A` +
                      `*Urgent:* ${urgent}%0A%0A` +
                      `_Please confirm availability for a discovery call._`;

        window.open(`https://wa.me/2347035466375?text=${waMsg}`, '_blank');
    });
</script>

<?php include 'footer.php'; ?>
