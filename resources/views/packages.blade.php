<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Packages - Learnerce Driving School</title>
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

    <!-- 1. Header Component -->
    <x-header />

    <!-- Main Content Container -->
    <main class="flex-grow pt-12 pb-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Page Header Section -->
            <div class="text-center max-w-2xl mx-auto space-y-3 mb-16">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-white text-indigo-600 border border-slate-200 shadow-sm tracking-wide uppercase">
                    💎 Transparent Pricing
                </span>
                <h1 class="text-4xl font-black text-slate-900 tracking-tight">
                    Choose Your <span class="text-indigo-600">Driving Course</span>
                </h1>
                <p class="text-slate-500 font-medium leading-relaxed">
                    All packages include official RMV exam booking support, medical test alignment, and practical instruction options.
                </p>
            </div>

            <!-- Packages Container -->
            <div class="space-y-12">

                <!-- PACKAGE 1: PREMIUM DUAL-VEHICLE COMBO (MOST POPULAR) -->
                <div class="bg-white rounded-3xl border border-slate-200/80 shadow-md shadow-slate-100 overflow-hidden flex flex-col md:flex-row transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-slate-200/60 transition-all duration-300 group">

                    <!-- LEFT SIDE: Purchase & Visuals -->
                    <div class="md:w-[40%] bg-slate-50/50 p-8 border-b md:border-b-0 md:border-r border-slate-200/60 flex flex-col justify-between relative overflow-hidden">
                        <div class="absolute top-4 right-4 bg-emerald-500 text-white font-extrabold text-[10px] uppercase tracking-wider py-1 px-2.5 rounded-lg shadow-md z-20 animate-pulse">
                            Most Popular 🔥
                        </div>

                        <div class="space-y-4">
                            <div class="w-full aspect-[16/10] bg-slate-100 rounded-2xl overflow-hidden relative border border-slate-200/60 shadow-inner z-10">
                                <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&q=80&w=600" alt="Premium Dual-Vehicle Combo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" />
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 via-transparent to-transparent"></div>
                            </div>

                            <div class="space-y-1">
                                <h3 class="text-xl font-black text-slate-900 group-hover:text-indigo-600 transition-colors">
                                    Premium Dual-Vehicle Combo
                                </h3>
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">
                                    Car (Manual/Auto) + Motorbike
                                </p>
                            </div>
                        </div>

                        <div class="pt-8 space-y-4">
                            <!-- [RECOMMENDED FIX]: Secured English Currency Code layout rendering bounds -->
                            <div class="flex items-baseline gap-1">
                                <span class="text-slate-400 text-sm font-bold notranslate">LKR</span>
                                <span class="text-4xl font-black text-slate-900 tracking-tight notranslate">45,500</span>
                                <span class="text-slate-400 text-xs font-semibold ml-1">/ Full Course</span>
                            </div>
                            <a href="#" class="block w-full text-center py-3.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl transition-all shadow-md shadow-indigo-600/10 active:scale-95 hover:shadow-indigo-600/30 relative overflow-hidden group/btn">
                                <span class="relative z-10">Register Now</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-indigo-700 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                            </a>
                        </div>
                    </div>

                    <!-- RIGHT SIDE: Granular Course Details -->
                    <div class="md:w-[60%] p-8 md:p-10 flex flex-col justify-between space-y-8 bg-white">
                        <div class="space-y-3">
                            <h4 class="text-xs font-bold text-indigo-600 uppercase tracking-widest">Course Architecture</h4>
                            <p class="text-sm font-medium text-slate-600 leading-relaxed">
                                Our absolute comprehensive course structure. Perfect for candidates looking to clear both light-vehicle and motorcycle classifications on their very first practical trial date. Includes personal assessment parameters.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">🚗</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Training Metrics</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">15 Practical Car Hours + 5 Dedicated Bike Track Lessons.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">🛣️</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Road Classifications</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">Residential Tracks, High-Traffic Intersections, and Night Progression.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">⚙️</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Instruction Method</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">1-on-1 private scheduling using a Dual-Controlled safety fleet.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">📋</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Included Perks</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">RMV Exam fee, Free Simulator access, and Road Signs handbook.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] font-bold text-slate-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            Installment payment plans available (Pay 50% upfront to initiate RMV processing)
                        </div>
                    </div>
                </div>

                <!-- PACKAGE 2: STANDARD LIGHT VEHICLE (CAR ONLY) -->
                <div class="bg-white rounded-3xl border border-slate-200/80 shadow-md shadow-slate-100 overflow-hidden flex flex-col md:flex-row transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-slate-200/60 transition-all duration-300 group">

                    <!-- LEFT SIDE: Purchase & Visuals -->
                    <div class="md:w-[40%] bg-slate-50/50 p-8 border-b md:border-b-0 md:border-r border-slate-200/60 flex flex-col justify-between relative overflow-hidden">
                        <div class="absolute top-4 right-4 bg-indigo-600 text-white font-extrabold text-[10px] uppercase tracking-wider py-1 px-2.5 rounded-lg shadow-md z-20">
                            Best Value 🏷️
                        </div>

                        <div class="space-y-4">
                            <div class="w-full aspect-[16/10] bg-slate-100 rounded-2xl overflow-hidden relative border border-slate-200/60 shadow-inner z-10">
                                <img src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c?auto=format&fit=crop&q=80&w=600" alt="Standard Light Vehicle Course" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" />
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 via-transparent to-transparent"></div>
                            </div>

                            <div class="space-y-1">
                                <h3 class="text-xl font-black text-slate-900 group-hover:text-indigo-600 transition-colors">
                                    Standard Light Vehicle
                                </h3>
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">
                                    Car Only (Manual or Automatic)
                                </p>
                            </div>
                        </div>

                        <div class="pt-8 space-y-4">
                            <div class="flex items-baseline gap-1">
                                <span class="text-slate-400 text-sm font-bold notranslate">LKR</span>
                                <span class="text-4xl font-black text-slate-900 tracking-tight notranslate">32,000</span>
                                <span class="text-slate-400 text-xs font-semibold ml-1">/ Full Course</span>
                            </div>
                            <a href="#" class="block w-full text-center py-3.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl transition-all shadow-md shadow-indigo-600/10 active:scale-95 hover:shadow-indigo-600/30 relative overflow-hidden group/btn">
                                <span class="relative z-10">Register Now</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-indigo-700 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                            </a>
                        </div>
                    </div>

                    <!-- RIGHT SIDE: Granular Course Details -->
                    <div class="md:w-[60%] p-8 md:p-10 flex flex-col justify-between space-y-8 bg-white">
                        <div class="space-y-3">
                            <h4 class="text-xs font-bold text-indigo-600 uppercase tracking-widest">Course Architecture</h4>
                            <p class="text-sm font-medium text-slate-600 leading-relaxed">
                                Specifically designed to help students master light motor vehicles. Focuses deeply on standard maneuvers required for the driving test, reverse parking, and urban traffic road conditions.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">🚗</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Training Metrics</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">12 Fully Immersive Driving Track & On-Road Training Hours.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">🛣️</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Road Classifications</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">Standard City Traffic Routes, Roundabouts, and Parallel Parking bays.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">⚙️</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Instruction Method</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">Calm, structured 1-on-1 pacing, ideal for complete beginners.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">📋</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Included Perks</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">Medical test alignment and official trial vehicle provisions for test day.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] font-bold text-slate-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-600"></span>
                            Free revision lesson included if scheduled within 3 days of your exam slot.
                        </div>
                    </div>
                </div>

                <!-- PACKAGE 3: EXPRESS EXAM STARTER TRACK -->
                <div class="bg-white rounded-3xl border border-slate-200/80 shadow-md shadow-slate-100 overflow-hidden flex flex-col md:flex-row transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-slate-200/60 transition-all duration-300 group">

                    <!-- LEFT SIDE: Purchase & Visuals -->
                    <div class="md:w-[40%] bg-slate-50/50 p-8 border-b md:border-b-0 md:border-r border-slate-200/60 flex flex-col justify-between relative overflow-hidden">
                        <div class="absolute top-4 right-4 bg-slate-900 text-white font-extrabold text-[10px] uppercase tracking-wider py-1 px-2.5 rounded-lg shadow-md z-20">
                            Fast Track ⚡
                        </div>

                        <div class="space-y-4">
                            <div class="w-full aspect-[16/10] bg-slate-100 rounded-2xl overflow-hidden relative border border-slate-200/60 shadow-inner z-10">
                                <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&q=80&w=600" alt="Express Exam Starter Track" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" />
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 via-transparent to-transparent"></div>
                            </div>

                            <div class="space-y-1">
                                <h3 class="text-xl font-black text-slate-900 group-hover:text-indigo-600 transition-colors">
                                    Express Exam Prep
                                </h3>
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">
                                    Refresher & Test-Ready Strategy
                                </p>
                            </div>
                        </div>

                        <div class="pt-8 space-y-4">
                            <div class="flex items-baseline gap-1">
                                <span class="text-slate-400 text-sm font-bold notranslate">LKR</span>
                                <span class="text-4xl font-black text-slate-900 tracking-tight notranslate">18,500</span>
                                <span class="text-slate-400 text-xs font-semibold ml-1">/ Full Course</span>
                            </div>
                            <a href="#" class="block w-full text-center py-3.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl transition-all shadow-md shadow-indigo-600/10 active:scale-95 hover:shadow-indigo-600/30 relative overflow-hidden group/btn">
                                <span class="relative z-10">Register Now</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-indigo-700 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                            </a>
                        </div>
                    </div>

                    <!-- RIGHT SIDE: Granular Course Details -->
                    <div class="md:w-[60%] p-8 md:p-10 flex flex-col justify-between space-y-8 bg-white">
                        <div class="space-y-3">
                            <h4 class="text-xs font-bold text-indigo-600 uppercase tracking-widest">Course Architecture</h4>
                            <p class="text-sm font-medium text-slate-600 leading-relaxed">
                                Tailored strictly for learners who already have basic handling experience or need to convert an existing international driving profile. Focused heavily on passing the practical test criteria.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">🚗</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Training Metrics</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">6 Precision Hours targeting specific exam route loops.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">🛣️</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Road Classifications</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">Actual RMV testing tracks, trial runs, and signal testing drills.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">⚙️</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Instruction Method</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">Intense mock evaluation with performance metric scoring boards.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">📋</div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-slate-900">Included Perks</h5>
                                    <p class="text-xs font-medium text-slate-500 leading-normal">Full access to driving theory computer simulation question banks.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] font-bold text-slate-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                            Requires an internal baseline evaluation by our supervisor during hour 1.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- 3. Modular Footer Component Call -->
    <x-footer />

</body>

</html>