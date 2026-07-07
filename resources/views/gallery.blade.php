<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Gallery - Learnerce Driving School</title>
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
                    ⚡ Life at Learnerce
                </span>
                <h1 class="text-4xl font-black text-slate-900 tracking-tight">
                    Our <span class="text-indigo-600">Success Gallery</span>
                </h1>
                <p class="text-slate-500 font-medium leading-relaxed">
                    Explore real snapshots of our training fields, vehicle fleets, lecture rooms, and happy students receiving their driving licenses.
                </p>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- CATEGORY 1: HAPPY GRADUATES -->
                <div onclick="openGalleryModal('graduates')" class="bg-white p-4 rounded-3xl border border-slate-200/80 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-full aspect-square rounded-2xl overflow-hidden relative border border-slate-100 bg-slate-100 shadow-inner">
                        <div id="carousel-graduates" class="absolute inset-0 flex transition-transform duration-700 ease-in-out">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Graduate 1">
                            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Graduate 2">
                            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Graduate 3">
                        </div>
                        <span class="absolute bottom-3 left-3 bg-slate-900/70 backdrop-blur-md text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-lg z-10 tracking-wider">License Winners 醇</span>
                    </div>
                    <div class="pt-4 px-1">
                        <h3 class="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors text-base">Happy Graduates</h3>
                        <p class="text-xs font-semibold text-slate-400 mt-0.5">Click to view 18 photos</p>
                    </div>
                </div>

                <!-- CATEGORY 2: VEHICLE FLEET -->
                <div onclick="openGalleryModal('fleet')" class="bg-white p-4 rounded-3xl border border-slate-200/80 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-full aspect-square rounded-2xl overflow-hidden relative border border-slate-100 bg-slate-100 shadow-inner">
                        <div id="carousel-fleet" class="absolute inset-0 flex transition-transform duration-700 ease-in-out">
                            <img src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Fleet 1">
                            <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Fleet 2">
                            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Fleet 3">
                        </div>
                        <span class="absolute bottom-3 left-3 bg-slate-900/70 backdrop-blur-md text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-lg z-10 tracking-wider">Dual Control 囓</span>
                    </div>
                    <div class="pt-4 px-1">
                        <h3 class="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors text-base">Training Vehicles</h3>
                        <p class="text-xs font-semibold text-slate-400 mt-0.5">Click to view 12 photos</p>
                    </div>
                </div>

                <!-- CATEGORY 3: TRAINING GROUNDS -->
                <div onclick="openGalleryModal('grounds')" class="bg-white p-4 rounded-3xl border border-slate-200/80 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-full aspect-square rounded-2xl overflow-hidden relative border border-slate-100 bg-slate-100 shadow-inner">
                        <div id="carousel-grounds" class="absolute inset-0 flex transition-transform duration-700 ease-in-out">
                            <img src="https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Grounds 1">
                            <img src="https://images.unsplash.com/photo-1590674899484-d5640e854abe?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Grounds 2">
                        </div>
                        <span class="absolute bottom-3 left-3 bg-slate-900/70 backdrop-blur-md text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-lg z-10 tracking-wider">Practice Tracks </span>
                    </div>
                    <div class="pt-4 px-1">
                        <h3 class="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors text-base">Practice Grounds</h3>
                        <p class="text-xs font-semibold text-slate-400 mt-0.5">Click to view 8 photos</p>
                    </div>
                </div>

                <!-- CATEGORY 4: THEORY CLASSES -->
                <div onclick="openGalleryModal('theory')" class="bg-white p-4 rounded-3xl border border-slate-200/80 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-full aspect-square rounded-2xl overflow-hidden relative border border-slate-100 bg-slate-100 shadow-inner">
                        <div id="carousel-theory" class="absolute inset-0 flex transition-transform duration-700 ease-in-out">
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Theory 1">
                            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover flex-shrink-0" alt="Theory 2">
                        </div>
                        <span class="absolute bottom-3 left-3 bg-slate-900/70 backdrop-blur-md text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-lg z-10 tracking-wider">Exam Prep 搭</span>
                    </div>
                    <div class="pt-4 px-1">
                        <h3 class="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors text-base">Lecture Sessions</h3>
                        <p class="text-xs font-semibold text-slate-400 mt-0.5">Click to view 10 photos</p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- POPUP MODAL COMPONENT (Hidden by default) -->
    <div id="galleryModal" class="fixed inset-0 z-50 overflow-y-auto hidden bg-slate-950/80 backdrop-blur-md flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-4xl rounded-3xl overflow-hidden shadow-2xl relative border border-slate-100 transform scale-95 transition-all duration-300" id="modalContainer">

            <!-- Modal Header -->
            <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                <div>
                    <h2 id="modalTitle" class="text-xl font-black text-slate-900">Category Images</h2>
                    <p class="text-xs font-semibold text-slate-400 mt-0.5">Click anywhere outside or the close button to return</p>
                </div>
                <button onclick="closeGalleryModal()" class="w-10 h-10 rounded-xl bg-slate-50 hover:bg-slate-100 flex items-center justify-center font-bold text-slate-500 hover:text-slate-900 transition-colors">&times;</button>
            </div>

            <!-- Modal Image Grid -->
            <div class="p-8 overflow-y-auto max-h-[70vh]">
                <div id="modalGrid" class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <!-- Image elements dynamically append here -->
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Modular Footer Component Call -->
    <x-footer />

    <script>
        function runCartCarousels() {
            const categories = [{
                    id: 'graduates',
                    count: 3
                },
                {
                    id: 'fleet',
                    count: 3
                },
                {
                    id: 'grounds',
                    count: 2
                },
                {
                    id: 'theory',
                    count: 2
                }
            ];

            categories.forEach(cat => {
                let currentIndex = 0;
                const container = document.getElementById(`carousel-${cat.id}`);
                setInterval(() => {
                    currentIndex = (currentIndex + 1) % cat.count;
                    if (container) {
                        container.style.transform = `translateX(-${currentIndex * 100}%)`;
                    }
                }, 3500);
            });
        }
        window.addEventListener('DOMContentLoaded', runCartCarousels);

        const imageDatabase = {
            graduates: [
                "https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600",
                "https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&q=80&w=600",
                "https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&q=80&w=600",
                "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=600"
            ],
            fleet: [
                "https://images.unsplash.com/photo-1511919884226-fd3cad34687c?auto=format&fit=crop&q=80&w=600",
                "https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&q=80&w=600",
                "https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=600"
            ],
            grounds: [
                "https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&q=80&w=600",
                "https://images.unsplash.com/photo-1590674899484-d5640e854abe?auto=format&fit=crop&q=80&w=600"
            ],
            theory: [
                "https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=600",
                "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600"
            ]
        };

        const titleDatabase = {
            graduates: "Happy Graduates Gallery",
            fleet: "Our Dual-Controlled Training Vehicles",
            grounds: "Practice Field Track Layouts",
            theory: "Theory & Road Rules Classroom"
        };

        function openGalleryModal(category) {
            const modal = document.getElementById('galleryModal');
            const container = document.getElementById('modalContainer');
            const grid = document.getElementById('modalGrid');
            const title = document.getElementById('modalTitle');

            title.innerText = titleDatabase[category];
            grid.innerHTML = "";

            imageDatabase[category].forEach(url => {
                const imgWrap = document.createElement('div');
                imgWrap.className = "aspect-video rounded-xl overflow-hidden border border-slate-100 shadow-sm";
                imgWrap.innerHTML = `<img src="${url}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" alt="Gallery item">`;
                grid.appendChild(imgWrap);
            });

            modal.classList.remove('hidden');
            setTimeout(() => {
                container.classList.remove('scale-95');
                container.classList.add('scale-100');
            }, 50);
        }

        function closeGalleryModal() {
            const modal = document.getElementById('galleryModal');
            const container = document.getElementById('modalContainer');
            container.classList.remove('scale-100');
            container.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 200);
        }

        document.getElementById('galleryModal').addEventListener('click', function(e) {
            if (e.target === this) closeGalleryModal();
        });
    </script>
</body>

</html>