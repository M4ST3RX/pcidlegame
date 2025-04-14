<template>
    <GameLayout>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- PC Name -->
            <div class="md:col-span-6 backdrop-blur-md bg-white/10 rounded-xl p-6 shadow-xl border border-white/10">
                <h2 class="text-xl font-semibold mb-4">Main Rig</h2>

                <!-- Hashrate -->
                <div class="mb-4">
                    <p class="text-sm text-white/70">Hashrate</p>
                    <p class="text-lg font-bold">128.5 MH/s</p>
                </div>

                <!-- Storage Usage -->
                <div class="mb-4">
                    <p class="text-sm text-white/70">Storage Usage</p>
                    <div class="w-full bg-white/10 h-4 rounded-full overflow-hidden mt-1">
                    <div class="bg-indigo-400 h-full w-[70%]"></div>
                    </div>
                    <p class="text-sm mt-1 text-white/50">14.0 / 20.0 TB</p>
                </div>

                <!-- RAM Usage -->
                <div>
                    <p class="text-sm text-white/70">RAM Usage</p>
                    <div class="w-full bg-white/10 h-4 rounded-full overflow-hidden mt-1">
                    <div class="bg-green-400 h-full w-[60%]"></div>
                    </div>
                    <p class="text-sm mt-1 text-white/50">12.0 / 20.0 GB</p>
                </div>
            </div>

            <div class="md:col-span-6 backdrop-blur-md bg-white/10 rounded-xl p-6 shadow-xl border border-white/10">
                <!-- Active Mining Session -->
                <div v-if="isMining">
                    <h2 class="text-xl font-semibold mb-4">Mining: Ethereum</h2>

                    <div class="mb-2">
                    <p class="text-sm text-white/70">Mined This Session</p>
                    <p class="text-lg font-bold">0.0142 ETH</p>
                    </div>

                    <div class="mb-4">
                    <p class="text-sm text-white/70">Difficulty</p>
                    <p class="text-sm text-white/50">80 MH/s</p>
                    </div>

                    <button
                    class="w-full py-2 px-4 rounded-lg bg-indigo-500 hover:bg-indigo-600 transition font-semibold"
                    >
                    Claim Crypto
                    </button>
                </div>

                <!-- No Active Session -->
                <div v-else class="text-center">
                    <h2 class="text-xl font-semibold mb-4">No Crypto Mining Session</h2>
                    <p class="text-white/60 mb-4">You're not mining anything right now.</p>

                    <button
                    class="py-2 px-4 rounded-lg bg-emerald-500 hover:bg-emerald-600 transition font-semibold"
                    >
                    Start Mining
                    </button>
                </div>
            </div>
        </div>
    </GameLayout>
</template>

<script setup>
import GameLayout from "@/Layouts/GameLayout.vue";
import { ref } from "vue";

defineProps(["user"]);

const isMining = ref(true);
</script>
