import React, { useState } from "react";
import Header from "../../Components/Header";
import Footer from "../../Components/Footer";

export default function Gallery() {
    const [modalData, setModalData] = useState({ isOpen: false, category: "" });

    const imageDatabase = {
        graduates: [
            "https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600",
            "https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&q=80&w=600",
            "https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&q=80&w=600",
        ],
        fleet: [
            "https://images.unsplash.com/photo-1511919884226-fd3cad34687c?auto=format&fit=crop&q=80&w=600",
            "https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&q=80&w=600",
        ],
        grounds: [
            "https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&q=80&w=600",
            "https://images.unsplash.com/photo-1590674899484-d5640e854abe?auto=format&fit=crop&q=80&w=600",
        ],
        theory: [
            "https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=600",
            "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600",
        ],
    };

    const titleDatabase = {
        graduates: "Happy Graduates Gallery",
        fleet: "Our Dual-Controlled Training Vehicles",
        grounds: "Practice Field Track Layouts",
        theory: "Theory & Road Rules Classroom",
    };

    const openModal = (cat) => setModalData({ isOpen: true, category: cat });
    const closeModal = () => setModalData({ isOpen: false, category: "" });

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
                    {/* Header */}
                    <div className="text-center max-w-2xl mx-auto space-y-3 mb-16">
                        <span className="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-white text-indigo-600 border border-slate-200 shadow-sm tracking-wide uppercase">
                            ⚡ Life at Learnerce
                        </span>
                        <h1 className="text-4xl font-black text-slate-900 tracking-tight">
                            Our{" "}
                            <span className="text-indigo-600">
                                Success Gallery
                            </span>
                        </h1>
                        <p className="text-slate-500 font-medium leading-relaxed">
                            Explore real snapshots of our training fields,
                            vehicle fleets, lecture rooms, and happy students
                            receiving their driving licenses.
                        </p>
                    </div>

                    {/* Category Cards Layout */}
                    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        {/* Graduates Card */}
                        <div
                            onClick={() => openModal("graduates")}
                            className="bg-white p-4 rounded-3xl border border-slate-200/80 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group"
                        >
                            <div className="w-full aspect-square rounded-2xl overflow-hidden relative border border-slate-100 bg-slate-100">
                                <img
                                    src={imageDatabase.graduates[0]}
                                    className="w-full h-full object-cover"
                                    alt="Graduates"
                                />
                                <span className="absolute bottom-3 left-3 bg-slate-900/70 backdrop-blur-md text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-lg tracking-wider">
                                    License Winners 🏆
                                </span>
                            </div>
                            <div className="pt-4 px-1">
                                <h3 className="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors text-base">
                                    Happy Graduates
                                </h3>
                                <p className="text-xs font-semibold text-slate-400 mt-0.5">
                                    Click to view photos
                                </p>
                            </div>
                        </div>

                        {/* Fleet Card */}
                        <div
                            onClick={() => openModal("fleet")}
                            className="bg-white p-4 rounded-3xl border border-slate-200/80 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group"
                        >
                            <div className="w-full aspect-square rounded-2xl overflow-hidden relative border border-slate-100 bg-slate-100">
                                <img
                                    src={imageDatabase.fleet[0]}
                                    className="w-full h-full object-cover"
                                    alt="Vehicles"
                                />
                                <span className="absolute bottom-3 left-3 bg-slate-900/70 backdrop-blur-md text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-lg tracking-wider">
                                    Dual Control 🚗
                                </span>
                            </div>
                            <div className="pt-4 px-1">
                                <h3 className="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors text-base">
                                    Training Vehicles
                                </h3>
                                <p className="text-xs font-semibold text-slate-400 mt-0.5">
                                    Click to view photos
                                </p>
                            </div>
                        </div>

                        {/* Grounds Card */}
                        <div
                            onClick={() => openModal("grounds")}
                            className="bg-white p-4 rounded-3xl border border-slate-200/80 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group"
                        >
                            <div className="w-full aspect-square rounded-2xl overflow-hidden relative border border-slate-100 bg-slate-100">
                                <img
                                    src={imageDatabase.grounds[0]}
                                    className="w-full h-full object-cover"
                                    alt="Grounds"
                                />
                                <span className="absolute bottom-3 left-3 bg-slate-900/70 backdrop-blur-md text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-lg tracking-wider">
                                    Practice Tracks 🛣️
                                </span>
                            </div>
                            <div className="pt-4 px-1">
                                <h3 className="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors text-base">
                                    Practice Grounds
                                </h3>
                                <p className="text-xs font-semibold text-slate-400 mt-0.5">
                                    Click to view photos
                                </p>
                            </div>
                        </div>

                        {/* Theory Card */}
                        <div
                            onClick={() => openModal("theory")}
                            className="bg-white p-4 rounded-3xl border border-slate-200/80 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group"
                        >
                            <div className="w-full aspect-square rounded-2xl overflow-hidden relative border border-slate-100 bg-slate-100">
                                <img
                                    src={imageDatabase.theory[0]}
                                    className="w-full h-full object-cover"
                                    alt="Theory"
                                />
                                <span className="absolute bottom-3 left-3 bg-slate-900/70 backdrop-blur-md text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-lg tracking-wider">
                                    Exam Prep 📝
                                </span>
                            </div>
                            <div className="pt-4 px-1">
                                <h3 className="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors text-base">
                                    Lecture Sessions
                                </h3>
                                <p className="text-xs font-semibold text-slate-400 mt-0.5">
                                    Click to view photos
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            {/* REACT POPUP MODAL */}
            {modalData.isOpen && (
                <div
                    onClick={closeModal}
                    className="fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-md flex items-center justify-center p-4"
                >
                    <div
                        onClick={(e) => e.stopPropagation()}
                        className="bg-white w-full max-w-4xl rounded-3xl overflow-hidden shadow-2xl relative border border-slate-100 max-h-[85vh] flex flex-col"
                    >
                        <div className="p-6 border-b border-slate-100 flex items-center justify-between">
                            <div>
                                <h2 className="text-xl font-black text-slate-900">
                                    {titleDatabase[modalData.category]}
                                </h2>
                                <p className="text-xs font-semibold text-slate-400 mt-0.5">
                                    Click anywhere outside or the close button
                                    to return
                                </p>
                            </div>
                            <button
                                onClick={closeModal}
                                className="w-10 h-10 rounded-xl bg-slate-50 hover:bg-slate-100 flex items-center justify-center font-bold text-slate-500 hover:text-slate-900 text-xl"
                            >
                                &times;
                            </button>
                        </div>
                        <div className="p-8 overflow-y-auto">
                            <div className="grid grid-cols-2 sm:grid-cols-3 gap-4">
                                {imageDatabase[modalData.category]?.map(
                                    (url, i) => (
                                        <div
                                            key={i}
                                            className="aspect-video rounded-xl overflow-hidden border border-slate-100 shadow-sm"
                                        >
                                            <img
                                                src={url}
                                                className="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                                alt="Gallery item"
                                            />
                                        </div>
                                    ),
                                )}
                            </div>
                        </div>
                    </div>
                </div>
            )}

            <Footer />
        </div>
    );
}
