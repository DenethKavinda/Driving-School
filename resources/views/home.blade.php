<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnerce Driving School - Confident Driving</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Modern CSS Dot-Grid Pattern Background */
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

        /* [RECOMMENDED FIX]: Inject global Sinhala height alignment mechanics */
        html[lang="si"] body,
        .translated-ltr body {
            line-height: 1.65 !important;
            font-family: 'Iskoola Pota', 'Noto Sans Sinhala', sans-serif !important;
        }

        html[lang="si"] h1,
        html[lang="si"] h2,
        html[lang="si"] h3,
        .translated-ltr h1,
        .translated-ltr h2,
        .translated-ltr h3 {
            font-size: 94% !important;
        }
    </style>
</head>

<body class="bg-dot-pattern text-slate-800 antialiased min-h-screen flex flex-col justify-between">

    <!-- Include Header Component -->
    <x-header />

    <!-- Main Content Container -->
    <main class="flex-grow overflow-hidden">

        <!-- 1. Hero Section (With Reveal Animation) -->
        <section class="relative overflow-hidden pt-12 pb-20 lg:pt-24 lg:pb-32 reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                    <!-- Hero Left Content -->
                    <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-white text-indigo-600 border border-slate-200 shadow-sm tracking-wide uppercase transform hover:scale-105 transition-transform duration-300">
                            ⚡ Safety & Defencive Driving Training
                        </span>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-[1.1]">
                            Drive Smart. <br>
                            <span class="text-indigo-600">Drive Confidently.</span>
                        </h1>
                        <p class="text-base sm:text-lg text-slate-600 max-w-xl mx-auto lg:mx-0 font-medium leading-relaxed">
                            Skip the exam stress. Our tailored instructional road mapping sets beginners up for seamless licensing and lifetime safety execution.
                        </p>

                        <!-- CTAs (With Clicking and Hover Effects) -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                            <a href="#" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl shadow-lg shadow-indigo-600/10 transition-all duration-150 transform hover:-translate-y-0.5 active:translate-y-0 active:scale-95 text-center">
                                Book Your Package Now
                            </a>
                            <a href="/PracticeExam" class="px-8 py-4 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 font-bold rounded-2xl shadow-sm border border-indigo-100 transition-all duration-150 transform active:scale-95 text-center">
                                Practice Exam
                            </a>
                            <a href="/Feedback" class="px-8 py-4 bg-white hover:bg-slate-50 text-slate-600 font-bold rounded-2xl shadow-sm border border-slate-200 transition-all duration-150 transform active:scale-95 text-center">
                                Share Feedback
                            </a>
                        </div>

                        <!-- Metrics Grid -->
                        <div class="grid grid-cols-3 gap-6 pt-8 border-t border-slate-200/80 max-w-md mx-auto lg:mx-0">
                            <div>
                                <p class="text-3xl font-black text-slate-900 tracking-tight">
                                    <span class="js-counter" data-target="98">0</span>%
                                </p>
                                <p class="text-xs text-slate-500 font-bold tracking-wider uppercase mt-1">Pass Rate</p>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-slate-900 tracking-tight">
                                    <span class="js-counter" data-target="10000">0</span>+
                                </p>
                                <p class="text-xs text-slate-500 font-bold tracking-wider uppercase mt-1">Students</p>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-slate-900 tracking-tight">
                                    <span class="js-counter" data-target="15">0</span>+
                                </p>
                                <p class="text-xs text-slate-500 font-bold tracking-wider uppercase mt-1">Instructors</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Right Content (Embedded YouTube Video with Card Glow and Zoom) -->
                    <div class="lg:col-span-6 relative group">
                        <div class="absolute inset-0 bg-indigo-600/5 rounded-3xl blur-xl group-hover:bg-indigo-600/10 transition-all duration-500"></div>
                        <div class="bg-white p-4 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-200/60 relative transform group-hover:scale-[1.01] transition-all duration-500 ease-out">
                            <!-- Decorative tag -->
                            <div class="absolute -top-3 -right-3 bg-indigo-600 text-white font-bold text-xs py-1.5 px-3 rounded-xl shadow-md transform rotate-6 z-20 animate-pulse">
                                New Fleet 🚗
                            </div>

                            <div class="bg-slate-50 aspect-[4/3] rounded-2xl overflow-hidden flex items-center justify-center relative border border-slate-100 shadow-inner z-10">
                                <iframe
                                    class="absolute inset-0 w-full h-full object-cover"
                                    src="https://www.youtube.com/embed/oskiEydAaok?si=YWiL2vHnMHNelp0e"
                                    title="Learnerce Driving School Video"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>

                                <!-- Floater Info Overlaid -->
                                <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md p-3.5 rounded-xl border border-slate-200/80 shadow-lg flex items-center justify-between z-10">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-2.5 h-2.5 bg-emerald-500 rounded-full animate-pulse"></div>
                                        <p class="text-xs font-bold text-slate-700">Reservations open for this week</p>
                                    </div>
                                    <span class="text-xs font-bold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-lg">Check Slots</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 2. Features Section (With Reveal Animation and Elevated Cards) -->
        <section class="py-20 bg-white/60 border-t border-slate-200/60 backdrop-blur-sm reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto space-y-2 mb-16">
                    <h2 class="text-3xl font-black text-slate-900 tracking-tight">Structured For Your Success</h2>
                    <p class="text-slate-500 font-medium">We design the process completely around your speed, comfort, and schedule.</p>
                </div>

                <!-- [RECOMMENDED FIX]: Implemented min-h-[220px] and h-auto to prevent feature cards from overflowing when text expands -->
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="p-8 rounded-2xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 group h-auto min-h-[220px]">
                        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center font-bold mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                            🛡️
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Dual-Controlled Fleets</h3>
                        <p class="text-sm text-slate-600 leading-relaxed font-medium">Learn safely with advanced vehicles modified to keep both you and the instructor perfectly secure.</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="p-8 rounded-2xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 group h-auto min-h-[220px]">
                        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center font-bold mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                            ⏰
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Flexible Hours</h3>
                        <p class="text-sm text-slate-600 leading-relaxed font-medium">Schedule training slots early mornings, weekends, or late evenings around your university or work routine.</p>
                    </div>
                    <!-- Card 3 -->
                    <div class="p-8 rounded-2xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:shadow-slate-100 transition-all group h-auto min-h-[220px]">
                        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center font-bold mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                            🎓
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Certified Guidance</h3>
                        <p class="text-sm text-slate-600 leading-relaxed font-medium">Gain access to certified professional male and female instruction styles calibrated perfectly to passing metrics.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- 3. Modular Footer Component Call -->
    <x-footer />

    <!-- JavaScript Trigger Engine for Scroll-Driven Animations & 5-Second Count-Up Counters -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // --- 1. Scroll Reveal Interaction ---
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

            // --- 2. Synchronized 5-Second Count-Up Animation Engine ---
            const counters = document.querySelectorAll('.js-counter');
            const animationDuration = 5000;
            const startTime = performance.now();

            function updateCounters(currentTime) {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / animationDuration, 1);

                counters.forEach(counter => {
                    const targetValue = +counter.getAttribute('data-target');
                    const currentValue = Math.floor(progress * targetValue);

                    if (targetValue === 10000) {
                        counter.innerText = currentValue.toLocaleString();
                    } else {
                        counter.innerText = currentValue;
                    }
                });

                if (progress < 1) {
                    requestAnimationFrame(updateCounters);
                } else {
                    counters.forEach(counter => {
                        const targetValue = +counter.getAttribute('data-target');
                        counter.innerText = targetValue === 10000 ? targetValue.toLocaleString() : targetValue;
                    });
                }
            }

            requestAnimationFrame(updateCounters);
        });
    </script>
</body>

</html>