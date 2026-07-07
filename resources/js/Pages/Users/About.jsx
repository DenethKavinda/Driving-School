import React, { useEffect } from "react";
import Header from "../../Components/Header";
import Footer from "../../Components/Footer";

export default function About() {
    useEffect(() => {
        // Scroll reveal animation engine
        const reveals = document.querySelectorAll(".reveal-on-scroll");
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                    }
                });
            },
            { threshold: 0.15 },
        );
        reveals.forEach((el) => observer.observe(el));
        return () => observer.disconnect();
    }, []);

    return (
        <div className="bg-dot-pattern text-slate-800 antialiased min-h-screen flex flex-col justify-between">
            <style>{`
        .bg-dot-pattern {
            background-color: #fafbfc;
            background-image: radial-gradient(#e2e8f0 1.5px, transparent 1.5px);
            background-size: 24px 24px;
        }
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-on-scroll.active {
            opacity: 1;
            transform: translateY(0);
        }
      `}</style>

            <Header />

            <main className="flex-grow pt-12 pb-24 overflow-hidden">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">
                    {/* Intro Section */}
                    <section className="grid lg:grid-cols-12 gap-12 items-center reveal-on-scroll">
                        <div className="lg:col-span-6 space-y-6">
                            <span className="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-white text-indigo-600 border border-slate-200 shadow-sm tracking-wide uppercase transform hover:scale-105 transition-transform duration-300">
                                🌱 Since 2026
                            </span>
                            <h1 className="text-4xl font-black text-slate-900 tracking-tight leading-tight">
                                What is Our{" "}
                                <span className="text-indigo-600">
                                    Learnerce?
                                </span>
                            </h1>
                            <p className="text-sm font-medium text-slate-600 leading-relaxed">
                                Learnerce is a premium, modern driving education
                                center established to transform the way
                                beginners learn to navigate the roads. We don't
                                just prepare you to pass your driving test; we
                                combine advanced psychological safety routing
                                with custom simulator infrastructure to instill
                                lifetime defensive driving instincts.
                            </p>

                            <div className="space-y-4 pt-2">
                                <h3 className="text-xs font-bold text-indigo-600 uppercase tracking-widest">
                                    Why Choose Us
                                </h3>
                                <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div className="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 h-auto min-h-[140px]">
                                        <h4 className="text-sm font-bold text-slate-900 flex items-center gap-1.5">
                                            <span className="text-indigo-500">
                                                ✨
                                            </span>{" "}
                                            Patient Methodology
                                        </h4>
                                        <p className="text-xs font-medium text-slate-500 mt-1">
                                            Calm, structured 1-on-1 programs
                                            engineered specifically for absolute
                                            beginners and nervous drivers.
                                        </p>
                                    </div>
                                    <div className="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:border-indigo-100 transition-all duration-300 transform hover:-translate-y-1 h-auto min-h-[140px]">
                                        <h4 className="text-sm font-bold text-slate-900 flex items-center gap-1.5">
                                            <span className="text-emerald-500">
                                                📈
                                            </span>{" "}
                                            Elite Pass Rate
                                        </h4>
                                        <p class="text-xs font-medium text-slate-500 mt-1">
                                            Over 98% of our students clear their
                                            official trial license logs on their
                                            very first practical trial date.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="lg:col-span-6 relative group">
                            <div className="absolute inset-0 bg-indigo-600/5 rounded-3xl blur-xl group-hover:bg-indigo-600/10 transition-all duration-500"></div>
                            <div className="bg-white p-4 rounded-3xl shadow-xl shadow-slate-200/40 border border-slate-200/60 relative transform group-hover:scale-[1.01] transition-all duration-500 ease-out">
                                <div className="w-full aspect-[4/3] rounded-2xl overflow-hidden border border-slate-100 relative">
                                    <img
                                        src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&q=80&w=800"
                                        className="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out"
                                        alt="Driving school training"
                                    />
                                    <div className="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {/* Video Methodology Section */}
                    <section className="bg-white rounded-3xl border border-slate-200/80 p-8 md:p-12 shadow-md shadow-slate-100/60 grid lg:grid-cols-12 gap-8 items-center reveal-on-scroll hover:shadow-xl transition-all duration-500">
                        <div className="lg:col-span-5 space-y-4">
                            <h2 className="text-2xl font-black text-slate-900 tracking-tight">
                                How We Train
                            </h2>
                            <p className="text-sm font-medium text-slate-600 leading-relaxed">
                                Take a comprehensive digital walk-through of our
                                training execution roadmap. Watch how we combine
                                high-fidelity laboratory driving simulators with
                                isolated dual-control track practice before
                                stepping onto real highway junctions.
                            </p>
                            <div
                                className="inline-flex items-center gap-2 text-xs font-bold text-indigo-600 bg-indigo-50 px-3 py-1.5 rounded-xl animate-bounce"
                                style={{ animationDuration: "3s" }}
                            >
                                <span>▶</span> 4-Minute Strategy Video
                            </div>
                        </div>
                        <div className="lg:col-span-7">
                            <div className="w-full aspect-video rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 relative shadow-inner group">
                                <iframe
                                    className="absolute inset-0 w-full h-full object-cover"
                                    src="https://www.youtube.com/embed/oskiEydAaok?si=YWiL2vHnMHNelp0e"
                                    title="Learnerce Training Methodology"
                                    frameBorder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowFullScreen
                                ></iframe>
                            </div>
                        </div>
                    </section>

                    {/* HQ Location Section */}
                    <section className="grid lg:grid-cols-12 gap-8 items-center border-t border-slate-200/60 pt-16 reveal-on-scroll">
                        <div className="lg:col-span-4 space-y-4 text-center lg:text-left">
                            <h2 className="text-2xl font-black text-slate-900 tracking-tight">
                                Visit Our Headquarters
                            </h2>
                            <p className="text-sm font-medium text-slate-600 leading-relaxed">
                                Our main operational branch and lecture
                                classrooms are structured right in the heart of
                                Godigamuwa. Stop by to view our simulator rooms
                                or to easily process your documentation
                                paperwork.
                            </p>
                            <div className="text-xs font-semibold text-slate-500 space-y-1.5 inline-block text-left p-4 bg-white rounded-2xl border border-slate-100 shadow-inner">
                                <p className="text-slate-900 font-bold flex items-center gap-1.5">
                                    <span className="inline-block w-2 h-2 rounded-full bg-indigo-600"></span>{" "}
                                    Main Address Office:
                                </p>
                                <p className="pl-3.5">
                                    No 15, Udugampola Road, Naiwala
                                </p>
                                <p className="pt-1 pl-3.5 text-slate-400 font-medium italic">
                                    Located adjacent to the iconic M.B. Ground
                                    complex.
                                </p>
                            </div>
                        </div>
                        <div className="lg:col-span-8">
                            <div className="bg-white p-3 rounded-3xl border border-slate-200/80 shadow-lg h-[350px] overflow-hidden relative group">
                                <iframe
                                    className="w-full h-full rounded-2xl border-0 transform transition-all duration-500 group-hover:scale-[1.005]"
                                    src="https://maps.google.com/maps?q=Naiwala%20Udugampola&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    allowFullScreen=""
                                    loading="lazy"
                                    referrerPolicy="no-referrer-when-downgrade"
                                ></iframe>
                            </div>
                        </div>
                    </section>
                </div>
            </main>

            <Footer />
        </div>
    );
}
