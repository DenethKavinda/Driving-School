import React, { useState, useEffect } from "react";
import Header from "../../Components/Header";
import Footer from "../../Components/Footer";

export default function PracticeExam() {
    const [isExamStarted, setIsExamStarted] = useState(false);
    const [timeLeft, setTimeLeft] = useState(25 * 60); // 25 Minutes in seconds
    const [currentQuestionIndex, setCurrentQuestionIndex] = useState(1);

    useEffect(() => {
        if (!isExamStarted) return;

        const timerInterval = setInterval(() => {
            setTimeLeft((prevTime) => {
                if (prevTime <= 1) {
                    clearInterval(timerInterval);
                    alert(
                        "The allotted 25-minute practice session time has concluded. Your exam answers have been submitted.",
                    );
                    window.location.reload();
                    return 0;
                }
                return prevTime - 1;
            });
        }, 1000);

        return () => clearInterval(timerInterval);
    }, [isExamStarted]);

    const formatTime = () => {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        return `${minutes < 10 ? "0" : ""}${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;
    };

    const simulateNext = () => {
        setCurrentQuestionIndex(8);
        alert(
            "UI State Change Confirmed: Next question item object would fetch here.",
        );
    };

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
                <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    {!isExamStarted ? (
                        /* Start Splash Screen */
                        <div className="bg-white p-8 md:p-12 rounded-3xl border border-slate-200/80 shadow-lg space-y-8 max-w-2xl mx-auto">
                            <div className="text-center space-y-3">
                                <span className="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-indigo-50 text-indigo-600 border border-indigo-100 uppercase tracking-wide">
                                    📝 Official Mock Evaluation
                                </span>
                                <h1 className="text-3xl font-black text-slate-900 tracking-tight">
                                    Driving Theory{" "}
                                    <span className="text-indigo-600">
                                        Practice Exam
                                    </span>
                                </h1>
                            </div>
                            <button
                                onClick={() => setIsExamStarted(true)}
                                className="w-full py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl shadow-lg text-base"
                            >
                                Start MCQ Examination
                            </button>
                        </div>
                    ) : (
                        /* Main Interactive MCQ Display */
                        <div className="space-y-6">
                            <div className="sticky top-20 z-40 bg-white/90 backdrop-blur-md p-4 rounded-2xl border border-slate-200/80 shadow-md flex items-center justify-between">
                                <div className="flex items-center gap-3">
                                    <span className="text-xs font-bold text-slate-400 uppercase">
                                        Progress:
                                    </span>
                                    <div className="w-32 bg-slate-100 h-2 rounded-full overflow-hidden border">
                                        <div
                                            className="bg-indigo-600 h-full transition-all duration-300"
                                            style={{
                                                width:
                                                    currentQuestionIndex === 1
                                                        ? "5%"
                                                        : "40%",
                                            }}
                                        ></div>
                                    </div>
                                    <span className="text-xs font-extrabold text-slate-700">
                                        Q {currentQuestionIndex} of 20
                                    </span>
                                </div>

                                <div
                                    className={`flex items-center gap-2 font-black px-4 py-2 rounded-xl text-sm transition-all ${
                                        timeLeft < 180
                                            ? "bg-rose-600 text-white animate-pulse"
                                            : "bg-rose-50 border border-rose-100 text-rose-700"
                                    }`}
                                >
                                    <span>⏳</span>
                                    <span>{formatTime()}</span>
                                </div>
                            </div>

                            <div className="bg-white p-6 md:p-10 rounded-3xl border border-slate-200/80 shadow-md space-y-8">
                                <div className="space-y-3">
                                    <span className="text-xs font-extrabold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-md uppercase">
                                        Question 0{currentQuestionIndex}
                                    </span>
                                    <h2 className="text-xl font-black text-slate-900">
                                        When approaching a pedestrian crossing
                                        where people are waiting to cross the
                                        road structure, what is the correct
                                        defensive execution?
                                    </h2>
                                </div>

                                <div className="space-y-3">
                                    <label className="flex items-center gap-4 p-4 rounded-2xl border border-slate-200/60 hover:bg-slate-50 cursor-pointer group">
                                        <input
                                            type="radio"
                                            name="mcq_option"
                                            className="w-4 h-4 text-indigo-600"
                                        />
                                        <span className="text-sm font-semibold text-slate-700 group-hover:text-slate-900">
                                            Sound the horn continuously to warn
                                            pedestrians.
                                        </span>
                                    </label>
                                    <label className="flex items-center gap-4 p-4 rounded-2xl border border-slate-200/60 hover:bg-slate-50 cursor-pointer group">
                                        <input
                                            type="radio"
                                            name="mcq_option"
                                            className="w-4 h-4 text-indigo-600"
                                        />
                                        <span className="text-sm font-semibold text-slate-700 group-hover:text-slate-900">
                                            Slow down immediately, approach with
                                            care, and stop completely.
                                        </span>
                                    </label>
                                </div>

                                <div className="flex items-center justify-between pt-6 border-t border-slate-100">
                                    <button
                                        className="px-5 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-400 bg-slate-50"
                                        disabled
                                    >
                                        ← Previous
                                    </button>
                                    <button
                                        onClick={simulateNext}
                                        className="px-6 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm transition-all active:scale-95"
                                    >
                                        Next Question →
                                    </button>
                                </div>
                            </div>
                        </div>
                    )}
                </div>
            </main>

            <Footer />
        </div>
    );
}
