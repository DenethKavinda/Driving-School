import React, { useState, useEffect } from "react";
// Import your custom translation lookups helper
import { t } from "../translations/index";

export default function Header() {
    const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
    const [isLangDropdownOpen, setIsLangDropdownOpen] = useState(false);

    // Track the active language globally or in local state
    const [currentLang, setCurrentLang] = useState(() => {
        return localStorage.getItem("app_lang") || "en";
    });

    const changeLanguage = (langCode) => {
        localStorage.setItem("app_lang", langCode);
        setCurrentLang(langCode);
        setIsLangDropdownOpen(false);
        // Reload to propagate language updates down to other components cleanly
        window.location.reload();
    };

    const toggleMobileLanguage = () => {
        changeLanguage(currentLang === "en" ? "si" : "en");
    };

    const isCurrentPath = (path) => window.location.pathname === path;

    const linkClass = (path) =>
        `inline-block text-sm transition-all duration-150 transform active:scale-95 ${
            isCurrentPath(path)
                ? "font-bold text-indigo-600"
                : "font-semibold text-slate-600 hover:text-slate-900"
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

                        {/* Desktop Navigation Links - Translated natively */}
                        <div className="hidden md:flex items-center space-x-5 lg:space-x-8">
                            <a href="/" className={linkClass("/")}>
                                {t("nav.home", currentLang)}
                            </a>
                            <a
                                href="/Packages"
                                className={linkClass("/Packages")}
                            >
                                {t("nav.packages", currentLang)}
                            </a>
                            <a
                                href="/Gallery"
                                className={linkClass("/Gallery")}
                            >
                                {t("nav.gallery", currentLang)}
                            </a>
                            <a href="/About" className={linkClass("/About")}>
                                {t("nav.about", currentLang)}
                            </a>
                            <a
                                href="/Contact"
                                className={linkClass("/Contact")}
                            >
                                {t("nav.contact", currentLang)}
                            </a>
                        </div>

                        {/* Language Switcher Dropdown Action */}
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
                        </div>

                        {/* Mobile View Toggle Buttons */}
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
            </nav>
        </>
    );
}
