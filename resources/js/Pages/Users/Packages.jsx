import React from "react";
import Header from "../../Components/Header";
import Footer from "../../Components/Footer";

export default function Packages() {
    return (
        <div className="bg-dot-pattern text-slate-800 antialiased min-h-screen flex flex-col justify-between">
            <style>{`
        .bg-dot-pattern {
            background-color: #fafbfc;
            background-image: radial-gradient(#e2e8f0 1.5px, transparent 1.5px);
            background-size: 24px 24px;
        }
      `}</style>

            <Header />

            <main className="flex-grow pt-12 pb-24">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    {/* Page Header */}
                    <div className="text-center max-w-2xl mx-auto space-y-3 mb-16">
                        <span className="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-white text-indigo-600 border border-slate-200 shadow-sm tracking-wide uppercase">
                            💎 Transparent Pricing
                        </span>
                        <h1 className="text-4xl font-black text-slate-900 tracking-tight">
                            Choose Your{" "}
                            <span className="text-indigo-600">
                                Driving Course
                            </span>
                        </h1>
                        <p className="text-slate-500 font-medium leading-relaxed">
                            All packages include official RMV exam booking
                            support, medical test alignment, and practical
                            instruction options.
                        </p>
                    </div>

                    {/* Packages Container */}
                    <div className="space-y-12">
                        {/* PACKAGE 1: PREMIUM DUAL-VEHICLE COMBO */}
                        <div className="bg-white rounded-3xl border border-slate-200/80 shadow-md shadow-slate-100 overflow-hidden flex flex-col md:flex-row transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-slate-200/60 transition-all duration-300 group">
                            <div className="md:w-[40%] bg-slate-50/50 p-8 border-b md:border-b-0 md:border-r border-slate-200/60 flex flex-col justify-between relative overflow-hidden">
                                <div className="absolute top-4 right-4 bg-emerald-500 text-white font-extrabold text-[10px] uppercase tracking-wider py-1 px-2.5 rounded-lg shadow-md z-20 animate-pulse">
                                    Most Popular 🔥
                                </div>
                                <div className="space-y-4">
                                    <div className="w-full aspect-[16/10] bg-slate-100 rounded-2xl overflow-hidden relative border border-slate-200/60 shadow-inner z-10">
                                        <img
                                            src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&q=80&w=600"
                                            alt="Premium Combo"
                                            className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                                        />
                                    </div>
                                    <div className="space-y-1">
                                        <h3 className="text-xl font-black text-slate-900 group-hover:text-indigo-600 transition-colors">
                                            Premium Dual-Vehicle Combo
                                        </h3>
                                        <p className="text-xs font-semibold text-slate-400 uppercase tracking-wider">
                                            Car (Manual/Auto) + Motorbike
                                        </p>
                                    </div>
                                </div>
                                <div className="pt-8 space-y-4">
                                    <div className="flex items-baseline gap-1">
                                        <span className="text-slate-400 text-sm font-bold notranslate">
                                            LKR
                                        </span>
                                        <span class="text-4xl font-black text-slate-900 tracking-tight notranslate">
                                            45,500
                                        </span>
                                        <span className="text-slate-400 text-xs font-semibold ml-1">
                                            / Full Course
                                        </span>
                                    </div>
                                    <a
                                        href="#"
                                        className="block w-full text-center py-3.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl transition-all shadow-md active:scale-95"
                                    >
                                        Register Now
                                    </a>
                                </div>
                            </div>
                            <div className="md:w-[60%] p-8 md:p-10 flex flex-col justify-between space-y-8 bg-white">
                                <div className="space-y-3">
                                    <h4 className="text-xs font-bold text-indigo-600 uppercase tracking-widest">
                                        Course Architecture
                                    </h4>
                                    <p className="text-sm font-medium text-slate-600 leading-relaxed">
                                        Our absolute comprehensive course
                                        structure. Perfect for candidates
                                        looking to clear both light-vehicle and
                                        motorcycle classifications on their very
                                        first practical trial date.
                                    </p>
                                </div>
                                <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div className="flex gap-3">
                                        <div className="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">
                                            🚗
                                        </div>
                                        <div>
                                            <h5 className="text-xs font-bold text-slate-900">
                                                Training Metrics
                                            </h5>
                                            <p className="text-xs font-medium text-slate-500">
                                                15 Practical Car Hours + 5
                                                Dedicated Bike Track Lessons.
                                            </p>
                                        </div>
                                    </div>
                                    <div className="flex gap-3">
                                        <div className="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">
                                            🛣️
                                        </div>
                                        <div>
                                            <h5 className="text-xs font-bold text-slate-900">
                                                Road Classifications
                                            </h5>
                                            <p className="text-xs font-medium text-slate-500">
                                                Residential Tracks, High-Traffic
                                                Intersections, and Night
                                                Progression.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div className="pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] font-bold text-slate-400">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>{" "}
                                    Installment payment plans available (Pay 50%
                                    upfront)
                                </div>
                            </div>
                        </div>

                        {/* PACKAGE 2: STANDARD LIGHT VEHICLE */}
                        <div className="bg-white rounded-3xl border border-slate-200/80 shadow-md shadow-slate-100 overflow-hidden flex flex-col md:flex-row transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-slate-200/60 transition-all duration-300 group">
                            <div className="md:w-[40%] bg-slate-50/50 p-8 border-b md:border-b-0 md:border-r border-slate-200/60 flex flex-col justify-between relative overflow-hidden">
                                <div className="absolute top-4 right-4 bg-indigo-600 text-white font-extrabold text-[10px] uppercase tracking-wider py-1 px-2.5 rounded-lg shadow-md z-20">
                                    Best Value 🏷️
                                </div>
                                <div className="space-y-4">
                                    <div className="w-full aspect-[16/10] bg-slate-100 rounded-2xl overflow-hidden relative border border-slate-200/60 shadow-inner z-10">
                                        <img
                                            src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c?auto=format&fit=crop&q=80&w=600"
                                            alt="Standard Car"
                                            className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                                        />
                                    </div>
                                    <div className="space-y-1">
                                        <h3 className="text-xl font-black text-slate-900 group-hover:text-indigo-600 transition-colors">
                                            Standard Light Vehicle
                                        </h3>
                                        <p className="text-xs font-semibold text-slate-400 uppercase tracking-wider">
                                            Car Only (Manual or Automatic)
                                        </p>
                                    </div>
                                </div>
                                <div className="pt-8 space-y-4">
                                    <div className="flex items-baseline gap-1">
                                        <span className="text-slate-400 text-sm font-bold notranslate">
                                            LKR
                                        </span>
                                        <span class="text-4xl font-black text-slate-900 tracking-tight notranslate">
                                            32,000
                                        </span>
                                        <span className="text-slate-400 text-xs font-semibold ml-1">
                                            / Full Course
                                        </span>
                                    </div>
                                    <a
                                        href="#"
                                        className="block w-full text-center py-3.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl transition-all shadow-md active:scale-95"
                                    >
                                        Register Now
                                    </a>
                                </div>
                            </div>
                            <div className="md:w-[60%] p-8 md:p-10 flex flex-col justify-between space-y-8 bg-white">
                                <div className="space-y-3">
                                    <h4 class="text-xs font-bold text-indigo-600 uppercase tracking-widest">
                                        Course Architecture
                                    </h4>
                                    <p className="text-sm font-medium text-slate-600 leading-relaxed">
                                        Specifically designed to help students
                                        master light motor vehicles. Focuses
                                        deeply on standard maneuvers required
                                        for the driving test, reverse parking,
                                        and urban traffic road conditions.
                                    </p>
                                </div>
                                <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div className="flex gap-3">
                                        <div className="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">
                                            🚗
                                        </div>
                                        <div>
                                            <h5 className="text-xs font-bold text-slate-900">
                                                Training Metrics
                                            </h5>
                                            <p className="text-xs font-medium text-slate-500">
                                                12 Fully Immersive Driving Track
                                                & On-Road Training Hours.
                                            </p>
                                        </div>
                                    </div>
                                    <div className="flex gap-3">
                                        <div className="w-8 h-8 rounded-lg bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 font-bold text-sm">
                                            ⚙️
                                        </div>
                                        <div>
                                            <h5 className="text-xs font-bold text-slate-900">
                                                Instruction Method
                                            </h5>
                                            <p className="text-xs font-medium text-slate-500">
                                                Calm, structured 1-on-1 pacing,
                                                ideal for complete beginners.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div className="pt-4 border-t border-slate-100 flex items-center gap-2 text-[11px] font-bold text-slate-400">
                                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>{" "}
                                    Free revision lesson included if scheduled
                                    within 3 days of your exam slot.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <Footer />
        </div>
    );
}
