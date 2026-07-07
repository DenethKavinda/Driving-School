<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Theory Exam - Learnerce Driving School</title>
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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div id="start-screen" class="bg-white p-8 md:p-12 rounded-3xl border border-slate-200/80 shadow-lg space-y-8 max-w-2xl mx-auto">
                <div class="text-center space-y-3">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-indigo-50 text-indigo-600 border border-indigo-100 uppercase tracking-wide">
                        📝 Official Mock Evaluation
                    </span>
                    <h1 class="text-3xl font-black text-slate-900 tracking-tight">
                        Driving Theory <span class="text-indigo-600">Practice Exam</span>
                    </h1>
                    <p class="text-sm font-medium text-slate-500 leading-relaxed">
                        Test your knowledge against official Department of Motor Traffic layout criteria before attending your real exam asset.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 border-y border-slate-100 py-6">
                    <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl border border-slate-200/40">
                        <span class="text-xl">⏱️</span>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase">Time Allotted</p>
                            <p class="text-sm font-extrabold text-slate-900 notranslate">25 Minutes</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl border border-slate-200/40">
                        <span class="text-xl">❓</span>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase">Total Questions</p>
                            <p class="text-sm font-extrabold text-slate-900 notranslate">20 MCQs</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-3 bg-amber-50/60 border border-amber-100 p-5 rounded-2xl">
                    <h4 class="text-xs font-bold text-amber-800 uppercase tracking-wider flex items-center gap-1.5">
                        ⚠️ Important Instructions
                    </h4>
                    <ul class="text-xs font-semibold text-amber-900/80 space-y-2 list-disc pl-4 leading-relaxed">
                        <li>The 25-minute session countdown starts immediately upon clicking the button below.</li>
                        <li>Do not close or reload the browser viewport, or your progress configuration values clear.</li>
                        <li>You need at least 15 correct responses to secure a passing evaluation metric scorecard.</li>
                    </ul>
                </div>

                <button onclick="startPracticeExam()" class="w-full py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl shadow-lg shadow-indigo-600/10 hover:shadow-indigo-600/20 active:scale-[0.99] transition-all text-center text-base">
                    Start MCQ Examination
                </button>
            </div>

            <div id="exam-screen" class="hidden space-y-6">

                <div class="sticky top-20 z-40 bg-white/90 backdrop-blur-md p-4 rounded-2xl border border-slate-200/80 shadow-md flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold text-slate-400 uppercase">Progress:</span>
                        <div class="w-32 bg-slate-100 h-2 rounded-full overflow-hidden border border-slate-200/40">
                            <div class="bg-indigo-600 h-full w-[5%]" id="progress-bar"></div>
                        </div>
                        <span class="text-xs font-extrabold text-slate-700 notranslate" id="progress-text">Q 1 of 20</span>
                    </div>

                    <div class="flex items-center gap-2 bg-rose-50 border border-rose-100 text-rose-700 font-black px-4 py-2 rounded-xl shadow-sm text-sm" id="timer-box">
                        <span>⏳</span>
                        <span class="notranslate" id="countdown-timer">25:00</span>
                    </div>
                </div>

                <div class="bg-white p-6 md:p-10 rounded-3xl border border-slate-200/80 shadow-md space-y-8">

                    <div class="space-y-3">
                        <span class="text-xs font-extrabold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-md uppercase tracking-wider">Question 01</span>
                        <h2 class="text-xl font-black text-slate-900 leading-snug">
                            When approaching a pedestrian crossing where people are waiting to cross the road structure, what is the correct defensive execution?
                        </h2>
                    </div>

                    <div class="space-y-3">

                        <label class="flex items-center gap-4 p-4 rounded-2xl border border-slate-200/60 hover:border-slate-300 bg-slate-50/40 cursor-pointer transition-all hover:bg-slate-50 group">
                            <input type="radio" name="mcq_option" class="w-4 h-4 text-indigo-600 focus:ring-indigo-500 border-slate-300">
                            <span class="text-sm font-semibold text-slate-700 group-hover:text-slate-900">Sound the horn continuously to warn pedestrians and pass at your maintained velocity profiles.</span>
                        </label>

                        <label class="flex items-center gap-4 p-4 rounded-2xl border border-slate-200/60 hover:border-slate-300 bg-slate-50/40 cursor-pointer transition-all hover:bg-slate-50 group">
                            <input type="radio" name="mcq_option" class="w-4 h-4 text-indigo-600 focus:ring-indigo-500 border-slate-300">
                            <span class="text-sm font-semibold text-slate-700 group-hover:text-slate-900">Slow down immediately, approach with care, and stop completely to let the pedestrians cross safely.</span>
                        </label>

                        <label class="flex items-center gap-4 p-4 rounded-2xl border border-slate-200/60 hover:border-slate-300 bg-slate-50/40 cursor-pointer transition-all hover:bg-slate-50 group">
                            <input type="radio" name="mcq_option" class="w-4 h-4 text-indigo-600 focus:ring-indigo-500 border-slate-300">
                            <span class="text-sm font-semibold text-slate-700 group-hover:text-slate-900">Increase asset speed drastically to pass the intersection zone before they attempt to step onto the path logs.</span>
                        </label>

                        <label class="flex items-center gap-4 p-4 rounded-2xl border border-slate-200/60 hover:border-slate-300 bg-slate-50/40 cursor-pointer transition-all hover:bg-slate-50 group">
                            <input type="radio" name="mcq_option" class="w-4 h-4 text-indigo-600 focus:ring-indigo-500 border-slate-300">
                            <span class="text-sm font-semibold text-slate-700 group-hover:text-slate-900">Maintain velocity parameters since pedestrians are strictly instructed to yield to automatic automotive assets.</span>
                        </label>

                    </div>

                    <div class="flex items-center justify-between pt-6 border-t border-slate-100">
                        <button class="px-5 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-400 cursor-not-allowed bg-slate-50" disabled>
                            ← Previous
                        </button>
                        <button onclick="simulateNextQuestion()" class="px-6 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm shadow-md shadow-indigo-600/10 active:scale-95 transition-all">
                            Next Question →
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <x-footer />

    <script>
        let durationMinutes = 25;
        let totalSecondsRemaining = durationMinutes * 60;
        let countdownTimerInterval = null;

        function startPracticeExam() {
            // Screen Visibility transition
            document.getElementById('start-screen').classList.add('hidden');
            document.getElementById('exam-screen').classList.remove('hidden');

            // Initiate Countdown Engine Clock Tick
            executeTimerEngine();
        }

        function executeTimerEngine() {
            const timerElement = document.getElementById('countdown-timer');
            const timerContainer = document.getElementById('timer-box');

            countdownTimerInterval = setInterval(() => {
                if (totalSecondsRemaining <= 0) {
                    clearInterval(countdownTimerInterval);
                    timerElement.innerText = "Time Up!";
                    alert("The allotted 25-minute practice session time has concluded. Your exam answers have been submitted for evaluation formatting arrays.");
                    location.reload();
                    return;
                }

                totalSecondsRemaining--;

                let computedMinutes = Math.floor(totalSecondsRemaining / 60);
                let computedSeconds = totalSecondsRemaining % 60;

                // Padding zeros layout alignment mechanics
                let displayMinutes = computedMinutes < 10 ? "0" + computedMinutes : computedMinutes;
                let displaySeconds = computedSeconds < 10 ? "0" + computedSeconds : computedSeconds;

                timerElement.innerText = `${displayMinutes}:${displaySeconds}`;

                // Add urgent visual warning when time runs low (under 3 minutes)
                if (totalSecondsRemaining < 180) {
                    timerContainer.classList.remove('bg-rose-50', 'text-rose-700');
                    timerContainer.classList.add('bg-rose-600', 'text-white', 'animate-pulse');
                }
            }, 1000);
        }

        // Dummy interface simulation trigger just to demonstrate the UI progression
        function simulateNextQuestion() {
            document.getElementById('progress-bar').style.width = "40%";
            document.getElementById('progress-text').innerText = "Q 8 of 20";
            alert("UI State Change Confirmed: In production logic, this step loads the next array index object data cleanly.");
        }
    </script>

</body>

</html>