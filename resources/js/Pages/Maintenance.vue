<script setup>
import { Head } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";

// You can pass these as props from your Laravel controller if needed
defineProps({
    facebookUrl: {
        type: String,
        default: "https://facebook.com/yournextfestival",
    },
    discordUrl: {
        type: String,
        default: "https://discord.gg/yournextfestival",
    },
});

const showFallback = ref(false); // Show festival design by default
const logoImage = ref(null);

const handleImageError = () => {
    console.log("Logo image failed to load, using fallback");
    showFallback.value = true;
};

onMounted(() => {
    // Check if logo image loads
    const img = new Image();
    img.onload = () => {
        console.log("Logo image loaded successfully");
        showFallback.value = false;
    };
    img.onerror = () => {
        console.log("Logo image failed to load in onMounted");
        showFallback.value = true;
    };
    img.src = "/images/ynf-logo.png";
});
</script>

<template>
    <Head title="Your Next Festival - Under Maintenance" />

    <div
        class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-indigo-900 flex items-center justify-center p-4 overflow-hidden relative"
    >
        <!-- Festival Stage Lights Background -->
        <div class="absolute inset-0 opacity-20">
            <!-- Spotlight beams -->
            <div
                class="absolute top-0 left-1/4 w-32 h-96 bg-gradient-to-b from-yellow-300 via-yellow-200 to-transparent opacity-30 transform rotate-12 blur-sm"
            ></div>
            <div
                class="absolute top-0 right-1/3 w-24 h-80 bg-gradient-to-b from-blue-400 via-blue-300 to-transparent opacity-40 transform -rotate-6 blur-sm"
            ></div>
            <div
                class="absolute top-0 left-1/2 w-28 h-full bg-gradient-to-b from-purple-400 via-purple-300 to-transparent opacity-25 transform rotate-3 blur-sm"
            ></div>
            <div
                class="absolute top-0 right-1/4 w-20 h-72 bg-gradient-to-b from-pink-400 via-pink-300 to-transparent opacity-35 transform rotate-8 blur-sm"
            ></div>
        </div>

        <!-- Floating Music Notes -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Musical notes scattered around -->
            <div
                class="absolute top-20 left-10 text-4xl text-blue-400 opacity-20 animate-bounce"
                style="animation-delay: 0s"
            >
                ♪
            </div>
            <div
                class="absolute top-32 right-16 text-3xl text-purple-400 opacity-30 animate-pulse"
                style="animation-delay: 1s"
            >
                ♫
            </div>
            <div
                class="absolute bottom-40 left-20 text-5xl text-pink-400 opacity-15 animate-bounce"
                style="animation-delay: 2s"
            >
                ♪
            </div>
            <div
                class="absolute bottom-60 right-32 text-2xl text-indigo-400 opacity-25 animate-pulse"
                style="animation-delay: 3s"
            >
                ♫
            </div>
            <div
                class="absolute top-1/2 left-16 text-3xl text-cyan-400 opacity-20 animate-bounce"
                style="animation-delay: 4s"
            >
                ♪
            </div>
            <div
                class="absolute top-1/3 right-12 text-4xl text-violet-400 opacity-25 animate-pulse"
                style="animation-delay: 5s"
            >
                ♫
            </div>
        </div>

        <!-- Sound Wave Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg
                class="w-full h-full"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1000 400"
            >
                <path
                    d="M0,200 Q250,50 500,200 T1000,200"
                    stroke="currentColor"
                    stroke-width="2"
                    fill="none"
                    class="text-blue-400"
                />
                <path
                    d="M0,180 Q250,80 500,180 T1000,180"
                    stroke="currentColor"
                    stroke-width="1"
                    fill="none"
                    class="text-purple-400"
                />
                <path
                    d="M0,220 Q250,120 500,220 T1000,220"
                    stroke="currentColor"
                    stroke-width="1"
                    fill="none"
                    class="text-pink-400"
                />
            </svg>
        </div>

        <div class="relative z-10 text-center max-w-5xl mx-auto">
            <!-- Main Festival Logo/Header -->
            <div class="mb-16">
                <!-- Festival Stage Design -->
                <div class="relative inline-block">
                    <!-- Stage Platform with Logo Background -->
                    <div
                        class="relative bg-gradient-to-t from-gray-800/90 to-gray-700/90 px-16 py-12 rounded-t-3xl shadow-2xl mb-8 border-t-4 border-blue-500 overflow-hidden"
                    >
                        <!-- Logo Background -->
                        <div
                            class="absolute inset-0 flex items-center justify-center"
                        >
                            <img
                                src="/images/ynf-logo.png"
                                alt="Your Next Festival Logo"
                                class="max-w-[70%] max-h-[70%] object-contain opacity-90"
                                @error="handleImageError"
                            />
                        </div>

                        <!-- Gradient Overlay to ensure elements are visible -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900/30 via-gray-800/15 to-gray-700/5"
                        ></div>

                        <!-- Stage Lights -->
                        <div
                            class="absolute -top-6 left-4 right-4 flex justify-between z-10"
                        >
                            <div
                                class="w-4 h-4 bg-yellow-400 rounded-full shadow-lg animate-pulse"
                            ></div>
                            <div
                                class="w-4 h-4 bg-blue-400 rounded-full shadow-lg animate-pulse"
                                style="animation-delay: 0.5s"
                            ></div>
                            <div
                                class="w-4 h-4 bg-purple-400 rounded-full shadow-lg animate-pulse"
                                style="animation-delay: 1s"
                            ></div>
                            <div
                                class="w-4 h-4 bg-pink-400 rounded-full shadow-lg animate-pulse"
                                style="animation-delay: 1.5s"
                            ></div>
                            <div
                                class="w-4 h-4 bg-cyan-400 rounded-full shadow-lg animate-pulse"
                                style="animation-delay: 2s"
                            ></div>
                        </div>

                        <!-- Invisible spacer to maintain platform height -->
                        <div class="relative z-10 invisible">
                            <div class="h-16"></div>
                        </div>
                    </div>

                    <!-- Equalizer Bars (positioned below the stage platform) -->
                    <div class="flex justify-center space-x-1 -mt-4">
                        <div
                            class="w-2 bg-gradient-to-t from-blue-500 to-blue-300 rounded-t animate-pulse h-8"
                            style="animation-delay: 0s"
                        ></div>
                        <div
                            class="w-2 bg-gradient-to-t from-purple-500 to-purple-300 rounded-t animate-pulse h-12"
                            style="animation-delay: 0.1s"
                        ></div>
                        <div
                            class="w-2 bg-gradient-to-t from-pink-500 to-pink-300 rounded-t animate-pulse h-6"
                            style="animation-delay: 0.2s"
                        ></div>
                        <div
                            class="w-2 bg-gradient-to-t from-indigo-500 to-indigo-300 rounded-t animate-pulse h-16"
                            style="animation-delay: 0.3s"
                        ></div>
                        <div
                            class="w-2 bg-gradient-to-t from-cyan-500 to-cyan-300 rounded-t animate-pulse h-10"
                            style="animation-delay: 0.4s"
                        ></div>
                        <div
                            class="w-2 bg-gradient-to-t from-violet-500 to-violet-300 rounded-t animate-pulse h-14"
                            style="animation-delay: 0.5s"
                        ></div>
                        <div
                            class="w-2 bg-gradient-to-t from-blue-500 to-blue-300 rounded-t animate-pulse h-8"
                            style="animation-delay: 0.6s"
                        ></div>
                        <div
                            class="w-2 bg-gradient-to-t from-purple-500 to-purple-300 rounded-t animate-pulse h-12"
                            style="animation-delay: 0.7s"
                        ></div>
                        <div
                            class="w-2 bg-gradient-to-t from-pink-500 to-pink-300 rounded-t animate-pulse h-18"
                            style="animation-delay: 0.8s"
                        ></div>
                    </div>
                </div>
            </div>

            <!-- Festival Maintenance Message -->
            <div class="mb-16">
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight"
                >
                    🎪
                    <span
                        class="bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent"
                        >The Show</span
                    >
                    is Being Built
                </h1>
                <p
                    class="text-xl md:text-2xl text-slate-300 mb-8 leading-relaxed max-w-4xl mx-auto"
                >
                    Our main stage is under construction! We're crafting the
                    ultimate festival experience platform where music lovers
                    connect, discover amazing artists, and never miss their next
                    favorite festival.
                </p>
                <div class="flex items-center justify-center space-x-4 mb-8">
                    <div
                        class="flex items-center space-x-2 text-lg text-yellow-400"
                    >
                        <span>🎵</span>
                        <span>Sound check in progress</span>
                    </div>
                    <div class="text-slate-500">•</div>
                    <div
                        class="flex items-center space-x-2 text-lg text-purple-400"
                    >
                        <span>🎤</span>
                        <span>Artists loading</span>
                    </div>
                    <div class="text-slate-500">•</div>
                    <div
                        class="flex items-center space-x-2 text-lg text-pink-400"
                    >
                        <span>🎸</span>
                        <span>Stages assembling</span>
                    </div>
                </div>
            </div>

            <!-- Festival Progress with Music Theme -->
            <div class="mb-16">
                <div class="flex justify-center items-center space-x-3 mb-6">
                    <span class="text-2xl animate-pulse">🎧</span>
                    <div class="flex space-x-1">
                        <div
                            class="w-4 h-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full animate-bounce"
                            style="animation-delay: 0s"
                        ></div>
                        <div
                            class="w-4 h-4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full animate-bounce"
                            style="animation-delay: 0.2s"
                        ></div>
                        <div
                            class="w-4 h-4 bg-gradient-to-r from-pink-500 to-blue-500 rounded-full animate-bounce"
                            style="animation-delay: 0.4s"
                        ></div>
                    </div>
                    <span class="text-2xl animate-pulse">🎪</span>
                </div>
                <p class="text-slate-400 text-lg">
                    Tuning the experience... Almost ready for the first act!
                </p>
            </div>

            <!-- Social Media - Festival Style -->
            <div
                class="flex flex-col sm:flex-row gap-8 justify-center items-center mb-8"
            >
                <!-- Facebook Link with Festival Icon -->
                <a
                    :href="facebookUrl"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group flex items-center space-x-4 bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 hover:from-blue-700 hover:via-blue-800 hover:to-indigo-800 text-white px-10 py-5 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl border border-blue-500/30"
                >
                    <div class="flex items-center space-x-2">
                        <span class="text-xl">🎪</span>
                        <svg
                            class="w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                            />
                        </svg>
                    </div>
                    <span class="font-bold text-lg"
                        >Join the Festival Community</span
                    >
                </a>

                <!-- Discord Link with Festival Icon -->
                <a
                    :href="discordUrl"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group flex items-center space-x-4 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 hover:from-indigo-700 hover:via-purple-700 hover:to-pink-700 text-white px-10 py-5 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl border border-purple-500/30"
                >
                    <div class="flex items-center space-x-2">
                        <span class="text-xl">🎵</span>
                        <svg
                            class="w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0190 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9554 2.4189-2.1568 2.4189Z"
                            />
                        </svg>
                    </div>
                    <span class="font-bold text-lg"
                        >Chat with Fellow Music Lovers</span
                    >
                </a>
            </div>

            <!-- Festival Footer -->
            <div class="mt-20 pt-8 border-t border-slate-700/50">
                <div class="flex items-center justify-center space-x-4 mb-4">
                    <span class="text-2xl animate-pulse">🎤</span>
                    <p class="text-slate-400 text-lg">
                        Coming Soon: Where Music Meets Community
                    </p>
                    <span class="text-2xl animate-pulse">🎸</span>
                </div>
                <p class="text-slate-500 text-sm">
                    © {{ new Date().getFullYear() }} Your Next Festival. All
                    rights reserved. 🎪
                </p>
            </div>
        </div>

        <!-- Additional Festival Elements -->
        <!-- Crowd silhouette at bottom -->
        <div
            class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black/50 to-transparent pointer-events-none"
        >
            <svg
                class="absolute bottom-0 w-full h-16 text-black/30"
                viewBox="0 0 1200 100"
                preserveAspectRatio="none"
            >
                <path
                    d="M0,100 C150,80 300,60 450,80 C600,100 750,90 900,70 C1050,50 1150,70 1200,80 L1200,100 Z"
                    fill="currentColor"
                />
            </svg>
        </div>
    </div>
</template>

<style scoped>
@keyframes bounce {
    0%,
    20%,
    53%,
    80%,
    100% {
        transform: translate3d(0, 0, 0);
    }
    40%,
    43% {
        transform: translate3d(0, -30px, 0);
    }
    70% {
        transform: translate3d(0, -15px, 0);
    }
    90% {
        transform: translate3d(0, -4px, 0);
    }
}

.animate-bounce {
    animation: bounce 1.5s ease-in-out infinite;
}

/* Custom gradient text animation */
@keyframes gradient-shift {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.bg-gradient-to-r {
    background-size: 200% 200%;
    animation: gradient-shift 3s ease infinite;
}
</style>
