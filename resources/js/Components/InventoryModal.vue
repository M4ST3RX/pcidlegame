<template>
	<div class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm flex items-center justify-center px-4" @click.self="close">
		<div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-xl shadow-xl w-full max-w-2xl p-6">
			<!-- Header -->
			<div class="flex items-center justify-between mb-6">
				<h2 class="text-xl font-semibold text-white">Select a {{ title }}</h2>
				<button @click="close" class="text-white/70 hover:text-white w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/10 transition" aria-label="Close">
					<IconX class="w-5 h-5" />
				</button>
			</div>

			<!-- Inventory List -->
			<div v-if="items.length" class="overflow-y-auto max-h-[50vh] space-y-4">
				<div v-for="(item, index) in items" :key="index" class="flex justify-between items-center bg-white/10 p-4 rounded-lg border border-white/10">
					<div class="flex items-center gap-4">
						<!-- Icon Placeholder -->
						<div class="w-10 h-10 bg-white/20 rounded flex items-center justify-center text-sm text-white/60">🧩</div>
						<div>
							<p class="text-white font-medium">{{ item.name }}</p>
							<p class="text-sm text-white/50">{{ item.statLabel }}: {{ item.statValue }}</p>
						</div>
					</div>
					<button @click="select(item)" class="px-4 py-2 text-sm font-semibold rounded bg-emerald-500 hover:bg-emerald-600">Install</button>
				</div>
			</div>

			<!-- Empty State -->
			<div v-else class="text-center text-white/60 py-10">No compatible {{ title.toLowerCase() }}s available in your inventory.</div>
		</div>
	</div>
</template>

<script setup>
	import {IconX} from "@tabler/icons-vue";
	import {defineEmits, defineProps} from "vue";
	defineProps({
		title: String, // e.g. "GPU"
		items: Array, // Array of items: [{ name: '', statLabel: '', statValue: '' }]
	});
	const emit = defineEmits(["close", "select"]);

	const close = () => {
		emit("close");
	};

	const select = (item) => {
		emit("select", item);
	};
</script>
