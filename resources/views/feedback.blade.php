<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Your Feedback - Learnerce Driving School</title>
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

        /* Inject global Sinhala height alignment mechanics */
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

    <main class="flex-grow pt-12 pb-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto space-y-3 mb-12">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-indigo-50 text-indigo-600 border border-indigo-100 uppercase tracking-wide">
                    💬 Student Testimonials
                </span>
                <h1 class="text-3xl font-black text-slate-900 tracking-tight">
                    Share Your <span class="text-indigo-600">Learning Experience</span>
                </h1>
                <p class="text-sm font-medium text-slate-500 leading-relaxed">
                    Your valuable feedback helps us constantly refine our defensive instruction strategies and modern simulator frameworks.
                </p>
            </div>

            <div class="bg-white p-6 md:p-10 rounded-3xl border border-slate-200/80 shadow-lg space-y-8">
                <form action="#" method="POST" onsubmit="handleFeedbackSubmit(event)" class="space-y-6">

                    <div class="space-y-2 text-center pb-4 border-b border-slate-100">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Overall Experience Rating</label>
                        <div class="flex items-center justify-center gap-2 pt-1">
                            <button type="button" onclick="setRating(1)" class="text-3xl md:text-4xl transition-transform active:scale-90 filter drop-shadow-sm star-btn text-slate-200 hover:text-amber-400">★</button>
                            <button type="button" onclick="setRating(2)" class="text-3xl md:text-4xl transition-transform active:scale-90 filter drop-shadow-sm star-btn text-slate-200 hover:text-amber-400">★</button>
                            <button type="button" onclick="setRating(3)" class="text-3xl md:text-4xl transition-transform active:scale-90 filter drop-shadow-sm star-btn text-slate-200 hover:text-amber-400">★</button>
                            <button type="button" onclick="setRating(4)" class="text-3xl md:text-4xl transition-transform active:scale-90 filter drop-shadow-sm star-btn text-slate-200 hover:text-amber-400">★</button>
                            <button type="button" onclick="setRating(5)" class="text-3xl md:text-4xl transition-transform active:scale-90 filter drop-shadow-sm star-btn text-slate-200 hover:text-amber-400">★</button>
                        </div>
                        <input type="hidden" id="experience_rating" name="rating" value="0" required>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label for="student_name" class="text-xs font-bold text-slate-700 uppercase tracking-wider">Your Name</label>
                            <input type="text" id="student_name" name="name" placeholder="Amara Perera" required
                                class="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 font-medium text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all">
                        </div>
                        <div class="space-y-1.5">
                            <label for="assigned_instructor" class="text-xs font-bold text-slate-700 uppercase tracking-wider">Your Primary Instructor</label>
                            <div class="relative">
                                <select id="assigned_instructor" name="instructor" required
                                    class="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 font-medium text-sm text-slate-700 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all appearance-none cursor-pointer">
                                    <option value="" disabled selected>Select your coach</option>
                                    <option value="sarah">Instructor Sarah Wickrema</option>
                                    <option value="david">Instructor David Perera</option>
                                    <option value="jude">Instructor Jude Silva</option>
                                    <option value="other">Other Campus Staff</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-slate-400">
                                    ▼
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Completed Training Package</label>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            <label class="border border-slate-200 bg-slate-50/30 p-3 rounded-xl text-center cursor-pointer hover:bg-slate-50 block group transition-all relative">
                                <input type="radio" name="package_chip" value="combo" class="absolute opacity-0" onclick="highlightChip(this)">
                                <span class="text-xs font-bold text-slate-600 block group-hover:text-slate-900 chip-text">🚗 + 🏍️ Premium Combo</span>
                            </label>
                            <label class="border border-slate-200 bg-slate-50/30 p-3 rounded-xl text-center cursor-pointer hover:bg-slate-50 block group transition-all relative">
                                <input type="radio" name="package_chip" value="car" class="absolute opacity-0" onclick="highlightChip(this)">
                                <span class="text-xs font-bold text-slate-600 block group-hover:text-slate-900 chip-text">Car Only Standard</span>
                            </label>
                            <label class="border border-slate-200 bg-slate-50/30 p-3 rounded-xl text-center cursor-pointer hover:bg-slate-50 block group transition-all relative col-span-2 sm:col-span-1">
                                <input type="radio" name="package_chip" value="express" class="absolute opacity-0" onclick="highlightChip(this)">
                                <span class="text-xs font-bold text-slate-600 block group-hover:text-slate-900 chip-text">⚡ Express Refresher</span>
                            </label>
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label for="feedback_comments" class="text-xs font-bold text-slate-700 uppercase tracking-wider">Your Review / Comments</label>
                        <textarea id="feedback_comments" name="comments" rows="5" placeholder="Tell us about your experience on the practice track, how clear your instructor's cues were, or how confident you felt on your exam day..." required
                            class="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 font-medium text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all resize-none"></textarea>
                    </div>

                    <div class="bg-indigo-50/50 rounded-2xl border border-indigo-100/80 p-4 text-xs font-medium text-indigo-950/70 leading-relaxed">
                        💡 By submitting this form, you grant us permission to feature your clean review text and rating metrics inside our public testimonial showcase panels.
                    </div>

                    <button type="submit" class="w-full py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl shadow-md shadow-indigo-600/10 hover:shadow-indigo-600/20 active:scale-[0.99] transition-all transform duration-150 text-center text-sm">
                        Submit My Feedback
                    </button>
                </form>
            </div>

        </div>
    </main>

    <x-footer />

    <script>
        // Interactive Star Selector Array Modifier
        function setRating(ratingValue) {
            document.getElementById('experience_rating').value = ratingValue;
            const stars = document.querySelectorAll('.star-btn');

            stars.forEach((star, index) => {
                if (index < ratingValue) {
                    star.classList.remove('text-slate-200');
                    star.classList.add('text-amber-400', 'scale-110');
                } else {
                    star.classList.remove('text-amber-400', 'scale-110');
                    star.classList.add('text-slate-200');
                }
            });
        }

        // Custom Layout Chip Highlight Multiplier Trigger 
        function highlightChip(radioInput) {
            // Remove previous selections from neighboring chip borders
            const allLabels = radioInput.closest('.grid').querySelectorAll('label');
            allLabels.forEach(label => {
                label.classList.remove('border-indigo-600', 'bg-indigo-50/40');
                label.querySelector('.chip-text').classList.remove('text-indigo-700');
            });

            // Apply selected styling properties to parent node container
            const parentLabel = radioInput.closest('label');
            parentLabel.classList.add('border-indigo-600', 'bg-indigo-50/40');
            parentLabel.querySelector('.chip-text').classList.add('text-indigo-700');
        }

        // Production Dummy Submission Simulator Action 
        function handleFeedbackSubmit(event) {
            event.preventDefault();
            const chosenRating = document.getElementById('experience_rating').value;

            if (chosenRating == 0) {
                alert("Please click a star rating configuration metric to provide a numeric score before submitting.");
                return;
            }

            alert("Thank you! Your learning review asset record has been received successfully.");
            window.location.href = "/";
        }
    </script>

</body>

</html>