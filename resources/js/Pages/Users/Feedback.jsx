import React, { useState } from "react";
import Header from "../../Components/Header";
import Footer from "../../Components/Footer";

export default function Feedback() {
    const [rating, setRating] = useState(0);
    const [hoverRating, setHoverRating] = useState(0);
    const [selectedChip, setSelectedChip] = useState("");
    const [name, setName] = useState("");
    const [instructor, setInstructor] = useState("");
    const [comments, setComments] = useState("");

    const handleSubmit = (e) => {
        e.preventDefault();
        if (rating === 0) {
            alert(
                "Please click a star rating configuration metric to provide a numeric score before submitting.",
            );
            return;
        }
        alert(
            "Thank you! Your learning review asset record has been received successfully.",
        );
        window.location.href = "/";
    };

    const chipClass = (value) =>
        `border p-3 rounded-xl text-center cursor-pointer block group transition-all relative ${
            selectedChip === value
                ? "border-indigo-600 bg-indigo-50/40 text-indigo-700"
                : "border-slate-200 bg-slate-50/30 hover:bg-slate-50 text-slate-600"
        }`;

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
                <div className="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center max-w-2xl mx-auto space-y-3 mb-12">
                        <span className="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-indigo-50 text-indigo-600 border border-indigo-100 uppercase tracking-wide">
                            💬 Student Testimonials
                        </span>
                        <h1 className="text-3xl font-black text-slate-900 tracking-tight">
                            Share Your{" "}
                            <span className="text-indigo-600">
                                Learning Experience
                            </span>
                        </h1>
                        <p className="text-sm font-medium text-slate-500 leading-relaxed">
                            Your valuable feedback helps us constantly refine
                            our defensive instruction strategies and modern
                            simulator frameworks.
                        </p>
                    </div>

                    <div className="bg-white p-6 md:p-10 rounded-3xl border border-slate-200/80 shadow-lg space-y-8">
                        <form onSubmit={handleSubmit} className="space-y-6">
                            {/* Star Panel */}
                            <div className="space-y-2 text-center pb-4 border-b border-slate-100">
                                <label className="text-xs font-bold text-slate-400 uppercase tracking-wider block">
                                    Overall Experience Rating
                                </label>
                                <div className="flex items-center justify-center gap-2 pt-1">
                                    {[1, 2, 3, 4, 5].map((star) => (
                                        <button
                                            key={star}
                                            type="button"
                                            onClick={() => setRating(star)}
                                            onMouseEnter={() =>
                                                setHoverRating(star)
                                            }
                                            onMouseLeave={() =>
                                                setHoverRating(0)
                                            }
                                            className={`text-3xl md:text-4xl transition-transform active:scale-90 filter drop-shadow-sm ${
                                                star <= (hoverRating || rating)
                                                    ? "text-amber-400 scale-110"
                                                    : "text-slate-200"
                                            }`}
                                        >
                                            ★
                                        </button>
                                    ))}
                                </div>
                            </div>

                            <div className="grid sm:grid-cols-2 gap-6">
                                <div className="space-y-1.5">
                                    <label
                                        htmlFor="student_name"
                                        className="text-xs font-bold text-slate-700 uppercase tracking-wider"
                                    >
                                        Your Name
                                    </label>
                                    <input
                                        type="text"
                                        id="student_name"
                                        required
                                        value={name}
                                        onChange={(e) =>
                                            setName(e.target.value)
                                        }
                                        placeholder="Amara Perera"
                                        className="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 text-sm focus:outline-none focus:border-indigo-500 focus:bg-white transition-all"
                                    />
                                </div>
                                <div className="space-y-1.5">
                                    <label
                                        htmlFor="assigned_instructor"
                                        className="text-xs font-bold text-slate-700 uppercase tracking-wider"
                                    >
                                        Your Primary Instructor
                                    </label>
                                    <div className="relative">
                                        <select
                                            id="assigned_instructor"
                                            required
                                            value={instructor}
                                            onChange={(e) =>
                                                setInstructor(e.target.value)
                                            }
                                            className="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 text-sm focus:outline-none appearance-none cursor-pointer"
                                        >
                                            <option value="" disabled>
                                                Select your coach
                                            </option>
                                            <option value="sarah">
                                                Instructor Sarah Wickrema
                                            </option>
                                            <option value="david">
                                                Instructor David Perera
                                            </option>
                                            <option value="jude">
                                                Instructor Jude Silva
                                            </option>
                                        </select>
                                        <div className="pointer-events-none absolute inset-y-0 right-4 flex items-center text-slate-400">
                                            ▼
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {/* Package Selector */}
                            <div className="space-y-2">
                                <label className="text-xs font-bold text-slate-700 uppercase tracking-wider block">
                                    Completed Training Package
                                </label>
                                <div className="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                    <div
                                        onClick={() => setSelectedChip("combo")}
                                        className={chipClass("combo")}
                                    >
                                        <span className="text-xs font-bold block">
                                            🚗 + 🏍️ Premium Combo
                                        </span>
                                    </div>
                                    <div
                                        onClick={() => setSelectedChip("car")}
                                        className={chipClass("car")}
                                    >
                                        <span className="text-xs font-bold block">
                                            Car Only Standard
                                        </span>
                                    </div>
                                    <div
                                        onClick={() =>
                                            setSelectedChip("express")
                                        }
                                        className={chipClass("express")}
                                    >
                                        <span className="text-xs font-bold block">
                                            ⚡ Express Refresher
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div className="space-y-1.5">
                                <label
                                    htmlFor="feedback_comments"
                                    className="text-xs font-bold text-slate-700 uppercase tracking-wider"
                                >
                                    Your Review / Comments
                                </label>
                                <textarea
                                    id="feedback_comments"
                                    required
                                    rows="5"
                                    value={comments}
                                    onChange={(e) =>
                                        setComments(e.target.value)
                                    }
                                    placeholder="Tell us about your experience..."
                                    className="w-full px-4 py-3.5 rounded-xl bg-slate-50/50 border border-slate-200 text-sm focus:outline-none focus:border-indigo-500 focus:bg-white resize-none transition-all"
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                className="w-full py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl text-sm transition-all active:scale-[0.99]"
                            >
                                Submit My Feedback
                            </button>
                        </form>
                    </div>
                </div>
            </main>

            <Footer />
        </div>
    );
}
