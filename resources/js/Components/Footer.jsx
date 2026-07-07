import React from "react";

export default function Footer() {
    return (
        <footer className="bg-white border-t border-slate-200/80 pt-16 pb-8 relative z-10 w-full mt-auto">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {/* Section: Leadership & Management */}
                <div className="pb-12 border-b border-slate-100 mb-12">
                    <h4 className="text-xs font-bold text-slate-900 uppercase tracking-widest mb-6 md:text-left text-center">
                        Our Core Leadership & Management Team
                    </h4>
                    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div className="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-200/50 hover:shadow-md transition-all h-auto min-h-[88px]">
                            <img
                                src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150"
                                alt="Sarah Wickrema"
                                className="w-14 h-14 rounded-xl object-cover shadow-sm border border-slate-200 flex-shrink-0"
                            />
                            <div>
                                <h5 className="text-sm font-bold text-slate-900">
                                    Sarah Wickrema
                                </h5>
                                <p className="text-xs text-indigo-600 font-semibold">
                                    Senior Car Coach & Managing Director
                                </p>
                            </div>
                        </div>

                        <div className="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-200/50 hover:shadow-md transition-all h-auto min-h-[88px]">
                            <img
                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150"
                                alt="David Perera"
                                className="w-14 h-14 rounded-xl object-cover shadow-sm border border-slate-200 flex-shrink-0"
                            />
                            <div>
                                <h5 className="text-sm font-bold text-slate-900">
                                    David Perera
                                </h5>
                                <p className="text-xs text-indigo-600 font-semibold">
                                    Dual Transmission Specialist
                                </p>
                            </div>
                        </div>

                        <div className="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-200/50 hover:shadow-md transition-all h-auto min-h-[88px]">
                            <img
                                src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=150"
                                alt="Jude Silva"
                                className="w-14 h-14 rounded-xl object-cover shadow-sm border border-slate-200 flex-shrink-0"
                            />
                            <div>
                                <h5 className="text-sm font-bold text-slate-900">
                                    Jude Silva
                                </h5>
                                <p className="text-xs text-indigo-600 font-semibold">
                                    Motorcycle Training Operations Lead
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Section: Main Directory Links */}
                <div className="grid grid-cols-1 md:grid-cols-12 gap-8 pb-12 border-b border-slate-100 items-start">
                    {/* Branding Column */}
                    <div className="md:col-span-5 space-y-4">
                        <div className="flex items-center gap-2">
                            <div className="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center shadow-sm">
                                <span className="text-white font-black text-base tracking-wider">
                                    L
                                </span>
                            </div>
                            <span className="text-lg font-extrabold text-slate-900 tracking-tight notranslate">
                                THISARA DRIVING SCHOOL
                            </span>
                        </div>
                        <p className="text-xs font-medium text-slate-500 leading-relaxed max-w-sm">
                            Empowering individuals with modern driving mechanics
                            and lifelong safety habits. Register today and get
                            your license seamlessly.
                        </p>
                    </div>

                    {/* Contact Information Column */}
                    <div className="md:col-span-4 space-y-4">
                        <h4 className="text-xs font-bold text-slate-900 uppercase tracking-widest">
                            Connect With Us
                        </h4>
                        <div className="space-y-3">
                            <a
                                href="https://wa.me/94772339227"
                                target="_blank"
                                rel="noopener noreferrer"
                                className="flex items-center gap-2.5 text-xs font-bold text-slate-600 hover:text-emerald-600 transition-colors group"
                            >
                                <span className="w-7 h-7 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center text-sm group-hover:bg-emerald-600 group-hover:text-white transition-all">
                                    💬
                                </span>
                                <span className="notranslate">
                                    Chat on WhatsApp (+94 77 233 9227)
                                </span>
                            </a>

                            <div className="flex items-center gap-2.5 text-xs font-semibold text-slate-600">
                                <span className="w-7 h-7 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center text-sm">
                                    📞
                                </span>
                                <span className="notranslate">
                                    Hotline: 077-2339227
                                </span>
                            </div>

                            <div className="flex items-center gap-2.5 text-xs font-semibold text-slate-600">
                                <span className="w-7 h-7 rounded-lg bg-slate-50 text-slate-500 flex items-center justify-center text-sm">
                                    ✉️
                                </span>
                                <span className="notranslate">
                                    thisaralearners@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>

                    {/* Social Channels Column */}
                    <div className="md:col-span-3 space-y-4 md:text-right">
                        <h4 className="text-xs font-bold text-slate-900 uppercase tracking-widest">
                            Follow & Share
                        </h4>
                        <p className="text-[11px] font-medium text-slate-400">
                            Join our digital community of safe drivers.
                        </p>

                        <div className="flex items-center gap-2 md:justify-end pt-1">
                            <a
                                href="#"
                                target="_blank"
                                rel="noopener noreferrer"
                                className="w-9 h-9 rounded-xl bg-slate-50 hover:bg-indigo-50 border border-slate-200/60 flex items-center justify-center text-slate-600 hover:text-indigo-600 transition-all transform hover:-translate-y-0.5 shadow-sm"
                                title="Like us on Facebook"
                            >
                                <span className="text-sm font-bold">📘</span>
                            </a>
                            <a
                                href="#"
                                target="_blank"
                                rel="noopener noreferrer"
                                className="w-9 h-9 rounded-xl bg-slate-50 hover:bg-red-50 border border-slate-200/60 flex items-center justify-center text-slate-600 hover:text-red-600 transition-all transform hover:-translate-y-0.5 shadow-sm"
                                title="Subscribe on YouTube"
                            >
                                <span className="text-sm font-bold">▶️</span>
                            </a>
                            <a
                                href="#"
                                target="_blank"
                                rel="noopener noreferrer"
                                className="w-9 h-9 rounded-xl bg-slate-50 hover:bg-slate-900 border border-slate-200/60 flex items-center justify-center text-slate-600 hover:text-white transition-all transform hover:-translate-y-0.5 shadow-sm"
                                title="Follow us on X"
                            >
                                <span className="text-xs font-bold">✖️</span>
                            </a>
                        </div>
                        <p className="text-[10px] font-medium text-slate-400 italic">
                            Mon - Sat: 10:00 AM - 09:00 PM
                        </p>
                    </div>
                </div>

                {/* Footer Sub-bar */}
                <div className="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p className="text-[11px] font-semibold text-slate-400">
                        &copy; 2026 Learnerce Driving Systems. All rights
                        reserved.
                    </p>
                    <div className="flex space-x-6 text-[11px] font-semibold text-slate-400">
                        <a
                            href="#"
                            className="hover:text-slate-600 transition-colors"
                        >
                            Terms of Service
                        </a>
                        <a
                            href="#"
                            className="hover:text-slate-600 transition-colors"
                        >
                            Privacy Policy
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    );
}
