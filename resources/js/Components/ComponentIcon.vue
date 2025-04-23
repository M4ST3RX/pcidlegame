<template>
	<div class="w-10 h-10 rounded flex items-center justify-center" :class="rarityBackground">
		<img v-if="src" :src="imageUrl" alt="Component Icon" class="w-full h-full object-contain" />
	</div>
</template>

<script setup>
	const props = defineProps({
		rarity: String,
		rarityBackground: String,
		src: String,
	});

	// This builds: /storage/components/gpu_3080.png
	const imageUrl = computed(() => `/storage/components/${props.src}`);
</script>
