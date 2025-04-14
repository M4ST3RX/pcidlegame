<template>
    <GameLayout>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- PC Name -->
            <div
                class="md:col-span-6 backdrop-blur-md bg-white/10 rounded-xl p-6 shadow-xl"
            >
                <div
                    class="md:col-span-6 backdrop-blur-md bg-white/10 rounded-xl p-6 shadow-xl border border-white/10"
                >
                    <h2 class="text-xl font-semibold mb-4">Main Rig</h2>

                    <div class="mb-2">
                        <p class="text-sm text-white/70">Hashrate</p>
                        <p class="text-lg font-bold">128.5 MH/s</p>
                    </div>
                </div>
            </div>

            <!-- Storage -->
            <div
                class="md:col-span-6 backdrop-blur-md bg-white/10 rounded-xl p-6 shadow-xl border border-white/10"
            >
                <div class="mb-4">
                    <p class="text-sm text-white/70">Storage Usage</p>
                    <div
                        class="w-full bg-white/10 h-4 rounded-full overflow-hidden mt-1"
                    >
                        <div class="bg-indigo-400 h-full w-[70%]"></div>
                        <!-- replace 70% dynamically -->
                    </div>
                    <p class="text-sm mt-1 text-white/50">14.0 / 20.0 TB</p>
                    <!-- replace with dynamic text -->
                </div>

                <button
                    class="w-full py-2 px-4 rounded-lg bg-indigo-500 hover:bg-indigo-600 transition font-semibold"
                >
                    Claim Crypto
                </button>
            </div>
        </div>
    </GameLayout>
</template>

<script setup>
import GameLayout from "@/Layouts/GameLayout.vue";

defineProps(["user"]);
</script>
