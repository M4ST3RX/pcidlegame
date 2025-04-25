<script setup>
	import {Head, Link} from "@inertiajs/vue3";

	defineProps({
		canLogin: {
			type: Boolean,
		},
		canRegister: {
			type: Boolean,
		},
		laravelVersion: {
			type: String,
			required: true,
		},
		phpVersion: {
			type: String,
			required: true,
		},
	});

	function handleImageError() {
		document.getElementById("screenshot-container")?.classList.add("!hidden");
		document.getElementById("docs-card")?.classList.add("!row-span-1");
		document.getElementById("docs-card-content")?.classList.add("!flex-row");
		document.getElementById("background")?.classList.add("!hidden");
	}
</script>

<template>
	<div class="min-h-screen bg-gray-900 text-white flex items-center justify-center p-6">
		<div class="text-center">
			<h1 class="text-5xl font-bold mb-4">🖥️ Idle PC Builder</h1>
			<p class="text-lg text-gray-300 mb-6">Assemble your dream PC, mine crypto, and rise through the ranks.</p>

			<button class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg transition" @click="$inertia.visit('/login')">Start Building</button>
		</div>
	</div>
</template>
