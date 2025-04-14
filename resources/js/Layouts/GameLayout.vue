<script setup></script>

<template>
    <div
        class="flex min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white"
    >
        <aside
            class="w-64 p-4 backdrop-blur-sm bg-white/5 border-r border-white/10"
        >
            <nav class="space-y-4">
                <div class="text-2xl font-bold mb-6">Crypto Rig</div>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block hover:text-indigo-400"
                            >Dashboard</a
                        >
                    </li>
                    <li>
                        <a href="#" class="block hover:text-indigo-400"
                            >Inventory</a
                        >
                    </li>
                    <li>
                        <a href="#" class="block hover:text-indigo-400"
                            >PC Builder</a
                        >
                    </li>
                    <li>
                        <a href="#" class="block hover:text-indigo-400"
                            >Scavenging</a
                        >
                    </li>
                    <li>
                        <a href="#" class="block hover:text-indigo-400"
                            >Wallet</a
                        >
                    </li>
                    <li>
                        <a href="#" class="block hover:text-indigo-400"
                            >Settings</a
                        >
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <slot />
        </main>
    </div>
</template>
