<script setup></script>

<template>
    <div class="flex min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white">
        <aside class="w-64 p-4 backdrop-blur-sm bg-white/5 border-r border-white/10 flex flex-col justify-between">
            <!-- Top: Navigation -->
            <nav class="space-y-6">
                <div class="text-2xl font-bold">Crypto Rig</div>

                <!-- Computer Section -->
                <div>
                <p class="text-white/50 text-xs uppercase mb-2 pl-1">Computer</p>
                <ul class="space-y-1">
                    <li><a href="#" class="block py-2 px-3 rounded hover:bg-white/10">Dashboard</a></li>
                    <li><a href="#" class="block py-2 px-3 rounded hover:bg-white/10">PC Builder</a></li>
                    <li><a href="#" class="block py-2 px-3 rounded hover:bg-white/10">Inventory</a></li>
                </ul>
                </div>

                <!-- Activity Section -->
                <div>
                <p class="text-white/50 text-xs uppercase mb-2 pl-1">Activity</p>
                <ul class="space-y-1">
                    <li><a href="#" class="block py-2 px-3 rounded hover:bg-white/10">Scavenging</a></li>
                    <li><a href="#" class="block py-2 px-3 rounded hover:bg-white/10">Wallet</a></li>
                </ul>
                </div>

                <!-- Settings Section -->
                <div>
                <p class="text-white/50 text-xs uppercase mb-2 pl-1">Settings</p>
                <ul class="space-y-1">
                    <li><a href="#" class="block py-2 px-3 rounded hover:bg-white/10">Preferences</a></li>
                </ul>
                </div>
            </nav>

            <!-- Bottom: User Info -->
            <div class="flex items-center justify-between mt-6 pt-4 border-t border-white/10">
                <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center text-sm font-semibold">
                    J
                </div>
                <span class="text-sm text-white/80">JohnDoe</span>
                </div>
                <button class="hover:text-red-400 text-white/70">
                ⎋ <!-- Logout icon placeholder -->
                </button>
            </div>
        </aside>

        <main class="flex-1 p-8">
            <slot />
        </main>
    </div>
</template>
