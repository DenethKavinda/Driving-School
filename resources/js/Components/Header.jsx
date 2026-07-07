import React, { useState, useEffect } from "react";

export default function Header() {
    const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
    const [isLangDropdownOpen, setIsLangDropdownOpen] = useState(false);
    const [currentLang, setCurrentLang] = useState("en");

    // Read the cookie state on mount
    useEffect(() => {
        const cookies = document.cookie.split(";");
        let detectedLang = "en";
        for (let i = 0; i < cookies.length; i++) {
            let c = cookies[i].trim();
            if (c.indexOf("googtrans=") === 0 && c.includes("/si")) {
                detectedLang = "si";
            }
        }
        setCurrentLang(detectedLang);

        // Initialize Google Translate script safely if not already present
        if (!window.googleTranslateElementInit) {
            window.googleTranslateElementInit = () => {
                new window.google.translate.TranslateElement(
                    {
                        pageLanguage: "en",
                        includedLanguages: "en,si",
                        layout: window.google.translate.TranslateElement
                            .InlineLayout.SIMPLE,
                        autoDisplay: false,
                    },
                    "google_translate_element",
                );
            };

            const script = document.createElement("script");
            script.type = "text/javascript";
            script.src =
                "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
            document.body.appendChild(script);
        }
    }, []);

    const changeLanguage = (langCode) => {
        let cookieValue = "/en/" + langCode;
        if (langCode === "en") {
            document.cookie =
                "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie =
                "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" +
                window.location.hostname;
        } else {
            document.cookie = "googtrans=" + cookieValue + "; path=/;";
            document.cookie =
                "googtrans=" +
                cookieValue +
                "; path=/; domain=" +
                window.location.hostname;
        }
        window.location.reload();
    };

    const toggleMobileLanguage = () => {
        changeLanguage(currentLang === "en" ? "si" : "en");
    };

    // Mocking active path logic (replace with your router's active path matcher if using react-router)
    const isCurrentPath = (path) => window.location.pathname === path;
    const linkClass = (path) =>
        `inline-block text-sm transition-all duration-150 transform active:scale-95 ${
            isCurrentPath(path)
                ? "font-bold text-indigo-600"
                : "font-semibold text-slate-600 hover:text-slate-900"
        }`;

    const mobileLinkClass = (path) =>
        `block px-3 py-2.5 rounded-lg text-base transition-all duration-150 transform active:scale-[0.98] ${
            isCurrentPath(path)
                ? "font-bold text-indigo-600 bg-indigo-50/50"
                : "font-semibold text-slate-700 hover:bg-slate-50"
        }`;

    return (
        <>
            <nav className="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200/60 shadow-sm">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex justify-between h-20 items-center">
                        {/* Logo */}
                        <div className="flex-shrink-0 flex items-center gap-2 transform transition-all duration-150 active:scale-95 cursor-pointer">
                            <div className="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-md shadow-indigo-600/10">
                                <span className="text-white font-black text-xl tracking-wider">
                                    L
                                </span>
                            </div>
                            <span className="text-xl font-extrabold text-slate-900 tracking-tight notranslate">
                                THISARA DRIVING SCHOOL
                            </span>
                        </div>

                        {/* Desktop Navigation */}
                        <div className="hidden md:flex items-center space-x-5 lg:space-x-8">
                            <a href="/" className={linkClass("/")}>
                                Home
                            </a>
                            <a
                                href="/Packages"
                                className={linkClass("/Packages")}
                            >
                                Our Packages
                            </a>
                            <a
                                href="/Gallery"
                                className={linkClass("/Gallery")}
                            >
                                Gallery
                            </a>
                            <a href="/About" className={linkClass("/About")}>
                                About Us
                            </a>
                            <a
                                href="/Contact"
                                className={linkClass("/Contact")}
                            >
                                Contact Us
                            </a>
                        </div>

                        {/* Right Action Menu */}
                        <div className="hidden md:flex items-center space-x-4">
                            <div className="relative inline-block text-left">
                                <button
                                    type="button"
                                    onClick={() =>
                                        setIsLangDropdownOpen(
                                            !isLangDropdownOpen,
                                        )
                                    }
                                    className="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 hover:text-slate-900 px-3 py-2 rounded-xl bg-slate-50 border border-slate-200/60 transition-all duration-150 active:scale-95"
                                >
                                    <span>🌐</span>
                                    <span>
                                        {currentLang === "si"
                                            ? "සිංහල"
                                            : "English"}
                                    </span>
                                    <svg
                                        className="w-4 h-4 text-slate-400"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            strokeWidth="2"
                                            d="M19 9l-7 7-7-7"
                                        />
                                    </svg>
                                </button>

                                {isLangDropdownOpen && (
                                    <div className="absolute right-0 mt-2 w-32 rounded-xl bg-white border border-slate-200 shadow-xl py-1 z-50 transform origin-top-right">
                                        <button
                                            onClick={() => changeLanguage("en")}
                                            className="w-full text-left px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 flex items-center justify-between"
                                        >
                                            <span>English</span>
                                            {currentLang === "en" && (
                                                <span className="text-indigo-600 text-xs font-bold">
                                                    ✓
                                                </span>
                                            )}
                                        </button>
                                        <button
                                            onClick={() => changeLanguage("si")}
                                            className="w-full text-left px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 flex items-center justify-between"
                                        >
                                            <span>සිංහල</span>
                                            {currentLang === "si" && (
                                                <span className="text-indigo-600 text-xs font-bold">
                                                    ✓
                                                </span>
                                            )}
                                        </button>
                                    </div>
                                )}
                            </div>

                            <a
                                href="#"
                                className="inline-block text-sm font-semibold text-slate-700 hover:text-slate-900 px-4 py-2 transition-all duration-150 transform active:scale-95"
                            >
                                Login
                            </a>
                            <a
                                href="#"
                                className="inline-block text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 px-5 py-2.5 rounded-xl transition-all duration-150 transform hover:-translate-y-0.5 active:translate-y-0 active:scale-95 shadow-sm"
                            >
                                Sign Up
                            </a>
                        </div>

                        {/* Mobile Actions */}
                        <div className="md:hidden flex items-center space-x-2">
                            <button
                                type="button"
                                onClick={toggleMobileLanguage}
                                className="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg text-xs font-bold bg-slate-50 border border-slate-200 text-slate-600 transition-all"
                            >
                                <span>🌐</span>
                                <span>
                                    {currentLang === "si" ? "සිං" : "EN"}
                                </span>
                            </button>

                            <button
                                type="button"
                                onClick={() =>
                                    setIsMobileMenuOpen(!isMobileMenuOpen)
                                }
                                className="text-slate-600 hover:text-slate-900 p-2 rounded-lg hover:bg-slate-100 transition-all duration-150 transform active:scale-90"
                            >
                                <svg
                                    className="h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                {/* Mobile Navigation Panel */}
                {isMobileMenuOpen && (
                    <div className="md:hidden border-t border-slate-200 bg-white px-4 pt-2 pb-4 space-y-1">
                        <a href="/" className={mobileLinkClass("/")}>
                            Home
                        </a>
                        <a
                            href="/Packages"
                            className={mobileLinkClass("/Packages")}
                        >
                            Our Packages
                        </a>
                        <a
                            href="/Gallery"
                            className={mobileLinkClass("/Gallery")}
                        >
                            Gallery
                        </a>
                        <a href="/About" className={mobileLinkClass("/About")}>
                            About Us
                        </a>
                        <a
                            href="/Contact"
                            className={mobileLinkClass("/Contact")}
                        >
                            Contact Us
                        </a>

                        <div className="pt-4 border-t border-slate-200 flex flex-col gap-2">
                            <a
                                href="#"
                                className="w-full text-center py-2.5 rounded-lg font-semibold text-slate-700 hover:bg-slate-50 transition-all duration-150 transform active:scale-[0.98] active:bg-slate-100"
                            >
                                Login
                            </a>
                            <a
                                href="#"
                                className="w-full text-center py-2.5 rounded-lg font-bold text-white bg-slate-900 transition-all duration-150 transform active:scale-[0.98]"
                            >
                                Book Now
                            </a>
                        </div>
                    </div>
                )}
            </nav>

            {/* Hidden container for Google Translate element */}
            <div id="google_translate_element" className="hidden"></div>

            <style>{`
        .skiptranslate iframe,
        .goog-te-banner-frame,
        #goog-gt-tt,
        .goog-te-balloon-frame {
            display: none !important;
        }
        body {
            top: 0px !important;
        }
        html[lang="si"] body,
        .translated-ltr body {
            line-height: 1.65 !important;
            font-family: 'Iskoola Pota', 'Noto Sans Sinhala', sans-serif !important;
        }
        html[lang="si"] h1, html[lang="si"] h2, html[lang="si"] h3,
        .translated-ltr h1, .translated-ltr h2, .translated-ltr h3 {
            letter-spacing: 0.01em !important;
            font-size: 94% !important;
        }
      `}</style>
        </>
    );
}
