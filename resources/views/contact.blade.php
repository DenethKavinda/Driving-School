<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Learnerce Driving School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Matching Modern CSS Dot-Grid Pattern Background */
        .bg-dot-pattern {
            background-color: #fafbfc;
            background-image: radial-gradient(#e2e8f0 1.5px, transparent 1.5px);
            background-size: 24px 24px;
        }

        /* Smooth Reveal Animation Utilities */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal-on-scroll.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-dot-pattern text-slate-800 antialiased min-h-screen flex flex-col justify-between">

    <!-- 1. Header Component -->
    <x-header />

    <!-- Main Content Layout Container -->
    <main class="flex-grow pt-12 pb-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Page Header Section -->
            <div class="text-center max-w-2xl mx-auto space-y-3 mb-16 reveal-on-scroll">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-white text-indigo-600 border border-slate-200 shadow-sm tracking-wide uppercase">
                    👋 Get In Touch
                </span>
                <h1 class="text-4xl font-black text-slate-900 tracking-tight">
                    We're Here to <span class="text-indigo-600">Help You Drive</span>
                </h1>
                <p class="text-slate-500 font-medium leading-relaxed">
                    Have questions about our training metrics, scheduling hours, or license processing? Drop us a message or contact us directly.
                </p>
            </div>

            <!-- Contact Form & Info Grid Layout -->
            <div class="grid lg:grid-cols-12 gap-12 items-start reveal-on-scroll">

                <!-- LEFT HAND SIDE: Modern Contact Form (7 Columns wide on desktop) -->
                <div class="lg:col-span-7 bg-white p-8 md:p-10 rounded-3xl border border-slate-200/80 shadow-md shadow-slate-100/60 hover:shadow-xl transition-all duration-500">
                    <h2 class="text-xl font-black text-slate-900 mb-6">Send Us a Message</h2>

                    <form action="#" method="POST" class="space-y-5">
                        <!-- Name Input Field -->
                        <div class="space-y-1.5">
                            <label for="name" class="text-xs font-bold text-slate-700 uppercase tracking-wider">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required
                                class="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 font-medium text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all">
                        </div>

                        <!-- Grid row for Email and Contact Number -->
                        <div class="grid sm:grid-cols-2 gap-5">
                            <!-- Email Input -->
                            <div class="space-y-1.5">
                                <label for="email" class="text-xs font-bold text-slate-700 uppercase tracking-wider">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required
                                    class="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 font-medium text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all">
                            </div>
                            <!-- Contact Number Input -->
                            <div class="space-y-1.5">
                                <label for="phone" class="text-xs font-bold text-slate-700 uppercase tracking-wider">Contact Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+94 7X XXX XXXX" required
                                    class="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 font-medium text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all">
                            </div>
                        </div>

                        <!-- Dropdown choice for vehicle types -->
                        <div class="space-y-1.5">
                            <label for="vehicle_type" class="text-xs font-bold text-slate-700 uppercase tracking-wider">Interested Vehicle Category</label>
                            <div class="relative">
                                <select id="vehicle_type" name="vehicle_type" required
                                    class="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 font-medium text-sm text-slate-700 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all appearance-none cursor-pointer">
                                    <option value="" disabled selected>Select a category</option>
                                    <option value="car_auto">Light Vehicle (Car - Auto)</option>
                                    <option value="car_manual">Light Vehicle (Car - Manual)</option>
                                    <option value="dual_combo">Dual Combo (Car + Motorbike)</option>
                                    <option value="express_prep">Express Exam Refresher Track</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-slate-400">
                                    ▼
                                </div>
                            </div>
                        </div>

                        <!-- Custom message input text-area -->
                        <div class="space-y-1.5">
                            <label for="message" class="text-xs font-bold text-slate-700 uppercase tracking-wider">Your Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your driving experience level or specific questions..." required
                                class="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 font-medium text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all resize-none"></textarea>
                        </div>

                        <!-- Submit action with hover effect mechanics -->
                        <button type="submit"
                            class="w-full py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl shadow-md shadow-indigo-600/10 hover:shadow-indigo-600/20 active:scale-[0.99] transition-all transform duration-150">
                            Send message
                        </button>
                    </form>
                </div>

                <!-- RIGHT HAND SIDE: Alternative Communication Links (5 Columns wide on desktop) -->
                <div class="lg:col-span-5 space-y-6">

                    <!-- Card 1: WhatsApp CTA -->
                    <a href="https://wa.me/123456789" target="_blank" rel="noopener noreferrer"
                        class="block bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:border-emerald-200 group transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl font-bold group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                                💬
                            </div>
                            <div>
                                <h4 class="font-extrabold text-slate-900 text-sm">Instant WhatsApp Support</h4>
                                <p class="text-xs font-semibold text-slate-400 mt-0.5">Chat with our coordination desk live</p>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2: Voice Support Hotline -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl font-bold">
                                📞
                            </div>
                            <div>
                                <h4 class="font-extrabold text-slate-900 text-sm">Direct Phone Hotline</h4>
                                <p class="text-xs font-semibold text-slate-700 mt-0.5">031 555 4558</p>
                                <p class="text-[10px] font-semibold text-slate-400">Available Mon - Sat, 10:00 AM - 09:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Email Block -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-slate-50 text-slate-500 flex items-center justify-center text-xl font-bold">
                                ✉️
                            </div>
                            <div>
                                <h4 class="font-extrabold text-slate-900 text-sm">Official Email Inbox</h4>
                                <p class="text-xs font-semibold text-slate-700 mt-0.5">help@learnerce.com</p>
                                <p class="text-[10px] font-semibold text-slate-400">We respond to inquiries within 12 business hours</p>
                            </div>
                        </div>
                    </div>

                    <!-- Informational Box: Next Steps -->
                    <div class="bg-indigo-50/50 rounded-2xl border border-indigo-100/80 p-6 space-y-2">
                        <h4 class="text-xs font-bold text-indigo-900 uppercase tracking-wider flex items-center gap-1.5">
                            <span>📋</span> Registration Requirements
                        </h4>
                        <p class="text-xs font-medium text-indigo-950/70 leading-relaxed">
                            When visiting our campus to confirm a booked slot, please bring your National Identity Card (NIC) and 2 passport-sized photographs to quickly process your RMV medical document file.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- 3. Modular Dynamic Footer Component Call -->
    <x-footer />

    <!-- JavaScript Trigger Engine for Scroll-Driven Animations -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const reveals = document.querySelectorAll(".reveal-on-scroll");

            function checkReveal() {
                const triggerPoint = window.innerHeight * 0.85;

                reveals.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    if (elementTop < triggerPoint) {
                        element.classList.add("active");
                    }
                });
            }

            checkReveal();
            window.addEventListener("scroll", checkReveal);
        });
    </script>
</body>

</html>