<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Learnerce Driving School</title>
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

    <x-header />

    <main class="flex-grow pt-12 pb-24 overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">

            <section class="grid lg:grid-cols-12 gap-12 items-center reveal-on-scroll">
                <div class="lg:col-span-6 space-y-6">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-white text-indigo-600 border border-slate-200 shadow-sm tracking-wide uppercase transform hover:scale-105 transition-transform duration-300">
                        🌱 Since 2026
                    </span>
                    <h1 class="text-4xl font-black text-slate-900 tracking-tight leading-tight">
                        What is Our <span class="text-indigo-600">Learnerce?</span>
                    </h1>
                    <p class="text-sm font-medium text-slate-600 leading-relaxed">
                        Learnerce is a premium, modern driving education center established to transform the way beginners learn to navigate the roads. We don't just prepare you to pass your driving test; we combine advanced psychological safety routing with custom simulator infrastructure to instill lifetime defensive driving instincts.
                    </p>

                    <div class="space-y-4 pt-2">
                        <h3 class="text-xs font-bold text-indigo-600 uppercase tracking-widest">Why Choose Us</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 h-auto min-h-[140px]">
                                <h4 class="text-sm font-bold text-slate-900 flex items-center gap-1.5">
                                    <span class="text-indigo-500">✨</span> Patient Methodology
                                </h4>
                                <p class="text-xs font-medium text-slate-500 mt-1">Calm, structured 1-on-1 programs engineered specifically for absolute beginners and nervous drivers.</p>
                            </div>
                            <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 h-auto min-h-[140px]">
                                <h4 class="text-sm font-bold text-slate-900 flex items-center gap-1.5">
                                    <span class="text-emerald-500">📈</span> Elite Pass Rate
                                </h4>
                                <p class="text-xs font-medium text-slate-500 mt-1">Over 98% of our students clear their official trial license logs on their very first practical trial date.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 relative group">
                    <div class="absolute inset-0 bg-indigo-600/5 rounded-3xl blur-xl group-hover:bg-indigo-600/10 transition-all duration-500"></div>
                    <div class="bg-white p-4 rounded-3xl shadow-xl shadow-slate-200/40 border border-slate-200/60 relative transform group-hover:scale-[1.01] transition-all duration-500 ease-out">
                        <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden border border-slate-100 relative">
                            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="Driving school training">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-3xl border border-slate-200/80 p-8 md:p-12 shadow-md shadow-slate-100/60 grid lg:grid-cols-12 gap-8 items-center reveal-on-scroll hover:shadow-xl transition-all duration-500">
                <div class="lg:col-span-5 space-y-4">
                    <h2 class="text-2xl font-black text-slate-900 tracking-tight">How We Train</h2>
                    <p class="text-sm font-medium text-slate-600 leading-relaxed">
                        Take a comprehensive digital walk-through of our training execution roadmap. Watch how we combine high-fidelity laboratory driving simulators with isolated dual-control track practice before stepping onto real highway junctions.
                    </p>
                    <div class="inline-flex items-center gap-2 text-xs font-bold text-indigo-600 bg-indigo-50 px-3 py-1.5 rounded-xl animate-bounce" style="animation-duration: 3s;">
                        <span>▶</span> 4-Minute Strategy Video
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <div class="w-full aspect-video rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 relative shadow-inner group">
                        <iframe
                            class="absolute inset-0 w-full h-full object-cover"
                            src="https://www.youtube.com/embed/oskiEydAaok?si=YWiL2vHnMHNelp0e"
                            title="Learnerce Training Methodology"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </section>

            <section class="space-y-8 reveal-on-scroll">
                <div class="text-center max-w-xl mx-auto space-y-2">
                    <h2 class="text-2xl font-black text-slate-900 tracking-tight">Our Premium Resources</h2>
                    <p class="text-slate-500 font-medium text-sm">We provide world-class facilities to support your learning curve every step of the way.</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm group hover:shadow-xl hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 h-auto">
                        <div class="w-full aspect-[16/10] bg-slate-100 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&q=80&w=500" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" alt="Dual fleet">
                        </div>
                        <div class="p-5 space-y-1.5">
                            <h4 class="font-extrabold text-slate-900 text-base group-hover:text-indigo-600 transition-colors">Modern Dual-Controlled Fleet</h4>
                            <p class="text-xs font-medium text-slate-500 leading-relaxed">Equipped with custom additional braking arrays ensuring that your dedicated instructor retains safety control instantly during your first on-road trials.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm group hover:shadow-xl hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 h-auto">
                        <div class="w-full aspect-[16/10] bg-slate-100 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&q=80&w=500" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" alt="Simulator setups">
                        </div>
                        <div class="p-5 space-y-1.5">
                            <h4 class="font-extrabold text-slate-900 text-base group-hover:text-indigo-600 transition-colors">Laboratory Simulators</h4>
                            <p class="text-xs font-medium text-slate-500 leading-relaxed">Master steering weight mechanics, clutch control thresholds, and complex intersection road signs before sitting inside a real engine asset.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm group hover:shadow-xl hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 h-auto">
                        <div class="w-full aspect-[16/10] bg-slate-100 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=500" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" alt="Study kits">
                        </div>
                        <div class="p-5 space-y-1.5">
                            <h4 class="font-extrabold text-slate-900 text-base group-hover:text-indigo-600 transition-colors">Smart Theory Kits</h4>
                            <p class="text-xs font-medium text-slate-500 leading-relaxed">Full localized digital question banks, flashcards for immediate test prep tracking, and an interactive dictionary of road signs.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space-y-8 reveal-on-scroll">
                <div class="text-center max-w-xl mx-auto space-y-2">
                    <h2 class="text-2xl font-black text-slate-900 tracking-tight">Meet Our Instructors</h2>
                    <p class="text-slate-500 font-medium text-sm">Patient experts fully certified to navigate training sessions for both manual and automatic licenses.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-indigo-100 flex flex-col items-center text-center space-y-4 transition-all duration-300 group h-auto">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-transparent group-hover:border-indigo-500 bg-slate-50 shadow-inner transform group-hover:rotate-3 transition-all duration-500">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover" alt="Instructor Sarah">
                        </div>
                        <div class="space-y-1">
                            <h4 class="font-extrabold text-slate-900 text-base group-hover:text-indigo-600 transition-colors">Instructor Sarah Wickrema</h4>
                            <span class="text-[10px] font-bold text-indigo-600 bg-indigo-50 px-2 py-0.5 rounded-md uppercase tracking-wider">Senior Car Coach</span>
                            <p class="text-xs font-semibold text-slate-400 mt-1">9+ Years Experience • Speak: EN, SI</p>
                        </div>
                        <p class="text-xs font-medium text-slate-500 leading-relaxed">
                            Sarah specializes in guiding nervous beginners. Her structured parking arrays and calm technical cues have helped hundreds clear their trials confidently.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-indigo-100 flex flex-col items-center text-center space-y-4 transition-all duration-300 group h-auto">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-transparent group-hover:border-indigo-500 bg-slate-50 shadow-inner transform group-hover:-rotate-3 transition-all duration-500">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover" alt="Instructor David">
                        </div>
                        <div class="space-y-1">
                            <h4 class="font-extrabold text-slate-900 text-base group-hover:text-indigo-600 transition-colors">Instructor David Perera</h4>
                            <span class="text-[10px] font-bold text-indigo-600 bg-indigo-50 px-2 py-0.5 rounded-md uppercase tracking-wider">Dual Transmission Specialist</span>
                            <p class="text-xs font-semibold text-slate-400 mt-1">12+ Years Experience • Speak: EN, SI</p>
                        </div>
                        <p class="text-xs font-medium text-slate-500 leading-relaxed">
                            An expert in manual clutch controls and precision timing. David focuses deeply on high-traffic intersection management and emergency reaction drills.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-indigo-100 flex flex-col items-center text-center space-y-4 transition-all duration-300 group h-auto">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-transparent group-hover:border-indigo-500 bg-slate-50 shadow-inner transform group-hover:rotate-3 transition-all duration-500">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover" alt="Instructor Jude">
                        </div>
                        <div class="space-y-1">
                            <h4 class="font-extrabold text-slate-900 text-base group-hover:text-indigo-600 transition-colors">Instructor Jude Silva</h4>
                            <span class="text-[10px] font-bold text-indigo-600 bg-indigo-50 px-2 py-0.5 rounded-md uppercase tracking-wider">Motorcycle & Car Trainer</span>
                            <p class="text-xs font-semibold text-slate-400 mt-1">8+ Years Experience • Speak: EN, SI</p>
                        </div>
                        <p class="text-xs font-medium text-slate-500 leading-relaxed">
                            Jude commands our motorcycle tracks and advanced layout configurations. He balances active balance mechanics with precise track optimization tips.
                        </p>
                    </div>
                </div>
            </section>

            <section class="grid lg:grid-cols-12 gap-8 items-center border-t border-slate-200/60 pt-16 reveal-on-scroll">
                <div class="lg:col-span-4 space-y-4 text-center lg:text-left">
                    <h2 class="text-2xl font-black text-slate-900 tracking-tight">Visit Our Headquarters</h2>
                    <p class="text-sm font-medium text-slate-600 leading-relaxed">
                        Our main operational branch and lecture classrooms are structured right in the heart of Godigamuwa. Stop by to view our simulator rooms or to easily process your documentation paperwork.
                    </p>
                    <div class="text-xs font-semibold text-slate-500 space-y-1.5 inline-block text-left p-4 bg-white rounded-2xl border border-slate-100 shadow-inner">
                        <p class="text-slate-900 font-bold flex items-center gap-1.5">
                            <span class="inline-block w-2 h-2 rounded-full bg-indigo-600"></span> Main Address Office:
                        </p>
                        <p class="pl-3.5">No 15, Udugampola Road, Naiwala</p>
                        <p class="pt-1 pl-3.5 text-slate-400 font-medium italic">Located adjacent to the iconic M.B. Ground complex.</p>
                    </div>
                </div>
                <div class="lg:col-span-8">
                    <div class="bg-white p-3 rounded-3xl border border-slate-200/80 shadow-lg h-[350px] overflow-hidden relative group">
                        <iframe
                            class="w-full h-full rounded-2xl border-0 transform transition-all duration-500 group-hover:scale-[1.005]"
                            src="https://maps.app.goo.gl/8rDEcymE2MXv33bz7?g_st=ac"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <x-footer />

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