<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200/60 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">

            <div class="flex-shrink-0 flex items-center gap-2 transform transition-all duration-150 active:scale-95 cursor-pointer">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-md shadow-indigo-600/10">
                    <span class="text-white font-black text-xl tracking-wider">L</span>
                </div>
                <span class="text-xl font-extrabold text-slate-900 tracking-tight notranslate">THISARA DRIVING SCHOOL</span>
            </div>

            <div class="hidden md:flex items-center space-x-5 lg:space-x-8">
                <a href="/" class="inline-block text-sm {{ request()->is('/') ? 'font-bold text-indigo-600' : 'font-semibold text-slate-600 hover:text-slate-900' }} transition-all duration-150 transform active:scale-95">
                    Home
                </a>
                <a href="/Packages" class="inline-block text-sm {{ request()->is('Packages') ? 'font-bold text-indigo-600' : 'font-semibold text-slate-600 hover:text-slate-900' }} transition-all duration-150 transform active:scale-95">
                    Our Packages
                </a>
                <a href="/Gallery" class="inline-block text-sm {{ request()->is('Gallery') ? 'font-bold text-indigo-600' : 'font-semibold text-slate-600 hover:text-slate-900' }} transition-all duration-150 transform active:scale-95">
                    Gallery
                </a>
                <a href="/About" class="inline-block text-sm {{ request()->is('About') ? 'font-bold text-indigo-600' : 'font-semibold text-slate-600 hover:text-slate-900' }} transition-all duration-150 transform active:scale-95">
                    About Us
                </a>
                <a href="/Contact" class="inline-block text-sm {{ request()->is('Contact') ? 'font-bold text-indigo-600' : 'font-semibold text-slate-600 hover:text-slate-900' }} transition-all duration-150 transform active:scale-95">
                    Contact Us
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <div class="relative inline-block text-left">
                    <button type="button" id="lang-menu-btn" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 hover:text-slate-900 px-3 py-2 rounded-xl bg-slate-50 border border-slate-200/60 transition-all duration-150 active:scale-95">
                        <span>🌐</span>
                        <span id="current-lang-text">English</span>
                        <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="lang-dropdown" class="hidden absolute right-0 mt-2 w-32 rounded-xl bg-white border border-slate-200 shadow-xl py-1 z-50 transform origin-top-right transition-all">
                        <button onclick="changeLanguage('en')" class="w-full text-left px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 flex items-center justify-between">
                            <span>English</span>
                            <span class="text-indigo-600 text-xs font-bold check-en">✓</span>
                        </button>
                        <button onclick="changeLanguage('si')" class="w-full text-left px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 flex items-center justify-between">
                            <span>සිංහල</span>
                            <span class="text-indigo-600 text-xs font-bold check-si hidden">✓</span>
                        </button>
                    </div>
                </div>

                <a href="#" class="inline-block text-sm font-semibold text-slate-700 hover:text-slate-900 px-4 py-2 transition-all duration-150 transform active:scale-95">Login</a>
                <a href="#" class="inline-block text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 px-5 py-2.5 rounded-xl transition-all duration-150 transform hover:-translate-y-0.5 active:translate-y-0 active:scale-95 shadow-sm">
                    Sign Up
                </a>
            </div>

            <div class="md:hidden flex items-center space-x-2">
                <button type="button" onclick="toggleMobileLanguage()" class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg text-xs font-bold bg-slate-50 border border-slate-200 text-slate-600 transition-all">
                    <span>🌐</span>
                    <span id="mobile-lang-text">EN</span>
                </button>

                <button type="button" class="text-slate-600 hover:text-slate-900 p-2 rounded-lg hover:bg-slate-100 transition-all duration-150 transform active:scale-90" id="mobile-menu-btn">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="hidden md:hidden border-t border-slate-200 bg-white px-4 pt-2 pb-4 space-y-1" id="mobile-menu">
        <a href="/" class="block px-3 py-2.5 rounded-lg text-base {{ request()->is('/') ? 'font-bold text-indigo-600 bg-indigo-50/50' : 'font-semibold text-slate-700 hover:bg-slate-50' }} transition-all duration-150 transform active:scale-[0.98]">
            Home
        </a>
        <a href="/Packages" class="block px-3 py-2.5 rounded-lg text-base {{ request()->is('Packages') ? 'font-bold text-indigo-600 bg-indigo-50/50' : 'font-semibold text-slate-700 hover:bg-slate-50' }} transition-all duration-150 transform active:scale-[0.98]">
            Our Packages
        </a>
        <a href="/Gallery" class="block px-3 py-2.5 rounded-lg text-base {{ request()->is('Gallery') ? 'font-bold text-indigo-600 bg-indigo-50/50' : 'font-semibold text-slate-700 hover:bg-slate-50' }} transition-all duration-150 transform active:scale-[0.98]">
            Gallery
        </a>
        <a href="/About" class="block px-3 py-2.5 rounded-lg text-base {{ request()->is('About') ? 'font-bold text-indigo-600 bg-indigo-50/50' : 'font-semibold text-slate-700 hover:bg-slate-50' }} transition-all duration-150 transform active:scale-[0.98]">
            About Us
        </a>
        <a href="/Contact" class="block px-3 py-2.5 rounded-lg text-base {{ request()->is('Contact') ? 'font-bold text-indigo-600 bg-indigo-50/50' : 'font-semibold text-slate-700 hover:bg-slate-50' }} transition-all duration-150 transform active:scale-[0.98]">
            Contact Us
        </a>

        <div class="pt-4 border-t border-slate-200 flex flex-col gap-2">
            <a href="#" class="w-full text-center py-2.5 rounded-lg font-semibold text-slate-700 hover:bg-slate-50 transition-all duration-150 transform active:scale-[0.98] active:bg-slate-100">Login</a>
            <a href="#" class="w-full text-center py-2.5 rounded-lg font-bold text-white bg-slate-900 transition-all duration-150 transform active:scale-[0.98]">Book Now</a>
        </div>
    </div>
</nav>

<div id="google_translate_element" class="hidden"></div>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,si',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }

    function changeLanguage(langCode) {
        let cookieValue = "/en/" + langCode;
        if (langCode === 'en') {
            document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + location.hostname;
        } else {
            document.cookie = "googtrans=" + cookieValue + "; path=/;";
            document.cookie = "googtrans=" + cookieValue + "; path=/; domain=" + location.hostname;
        }
        location.reload();
    }

    function toggleMobileLanguage() {
        const currentText = document.getElementById('mobile-lang-text').innerText;
        if (currentText === 'EN') {
            changeLanguage('si');
        } else {
            changeLanguage('en');
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const cookies = document.cookie.split(';');
        let currentLang = 'en';

        for (let i = 0; i < cookies.length; i++) {
            let c = cookies[i].trim();
            if (c.indexOf('googtrans=') === 0) {
                if (c.includes('/si')) {
                    currentLang = 'si';
                }
            }
        }

        if (currentLang === 'si') {
            document.getElementById('current-lang-text').innerText = 'සිංහල';
            document.getElementById('mobile-lang-text').innerText = 'සිං';
            document.querySelector('.check-en').classList.add('hidden');
            document.querySelector('.check-si').classList.remove('hidden');
        } else {
            document.getElementById('current-lang-text').innerText = 'English';
            document.getElementById('mobile-lang-text').innerText = 'EN';
            document.querySelector('.check-en').classList.remove('hidden');
            document.querySelector('.check-si').classList.add('hidden');
        }

        const langBtn = document.getElementById('lang-menu-btn');
        const langDropdown = document.getElementById('lang-dropdown');
        if (langBtn && langDropdown) {
            langBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                langDropdown.classList.toggle('hidden');
            });
            document.addEventListener('click', function() {
                langDropdown.classList.add('hidden');
            });
        }

        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    });
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style>
    /* [RECOMMENDED GLOBAL FIXES]: Handle Google Translate Inject styles smoothly */
    .skiptranslate iframe,
    .goog-te-banner-frame,
    #goog-gt-tt,
    .goog-te-balloon-frame {
        display: none !important;
    }

    body {
        top: 0px !important;
    }

    /* Dynamically fix font heights and spacing sizes across all elements when translating to Sinhala */
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
        letter-spacing: 0.01em !important;
        font-size: 94% !important;
    }
</style>