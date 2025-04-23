<template>
	<GameLayout>
		<div class="space-y-8">
			<!-- Section: Case Selection -->
			<div class="bg-white/5 border border-white/10 rounded-xl p-6 backdrop-blur-md shadow-md">
				<h2 class="text-lg font-semibold mb-4">PC Case</h2>

				<div v-if="selectedCase">
					<div class="flex items-center justify-between">
						<div class="flex items-center gap-4">
							<!-- Replace with real image -->
							<div class="w-12 h-12 bg-white/10 rounded flex items-center justify-center text-white/60 text-sm">🖥️</div>
							<p class="text-white font-semibold">NZXT H510 (Example)</p>
						</div>
						<button class="px-4 py-2 rounded bg-indigo-500 hover:bg-indigo-600 font-semibold text-sm">Change Case</button>
					</div>
				</div>

				<div v-else>
					<p class="text-white/60 mb-4">No case selected. Start building your PC by choosing a case.</p>
					<button class="px-4 py-2 rounded bg-indigo-500 hover:bg-indigo-600 font-semibold">Choose Case</button>
				</div>
			</div>

			<!-- Section: PSU + Motherboard -->
			<div v-if="selectedCase" class="space-y-4">
				<!-- PSU Slot -->
				<div class="px-6 py-4 bg-white/5 rounded-xl border border-white/10 backdrop-blur-sm shadow mb-4">
					<p class="text-sm text-white/60 mb-1">Power Supply</p>
					<div class="flex justify-between items-center">
						<span v-if="selectedPSU" class="text-white font-medium">750W Modular PSU</span>
						<span v-else class="text-white/50 italic">Empty Slot</span>
						<button class="text-sm px-4 py-2 rounded bg-emerald-500 hover:bg-emerald-600 font-semibold" @click="openInventoryModal('PSU')">
							{{ selectedPSU ? "Change" : "Install" }}
						</button>
					</div>
				</div>

				<!-- Motherboard Slot -->
				<div class="px-6 py-4 bg-white/5 rounded-xl border border-white/10 backdrop-blur-sm shadow mb-4">
					<p class="text-sm text-white/60 mb-1">Motherboard</p>
					<div class="flex justify-between items-center">
						<span v-if="selectedMotherboard" class="text-white font-medium">ASUS TUF Gaming X570</span>
						<span v-else class="text-white/50 italic">Empty Slot</span>
						<button class="text-sm px-4 py-2 rounded bg-emerald-500 hover:bg-emerald-600 font-semibold" @click="openInventoryModal('MB')">
							{{ selectedMotherboard ? "Change" : "Install" }}
						</button>
					</div>
				</div>
			</div>

			<!-- Section: Remaining Components -->
			<div v-if="selectedMotherboard" class="space-y-4">
				<!-- Example Slot -->
				<div class="px-6 py-4 bg-white/5 rounded-xl border border-white/10 backdrop-blur-sm shadow mb-4">
					<p class="text-sm text-white/60 mb-1">CPU</p>
					<div class="flex justify-between items-center">
						<span class="text-white">AMD Ryzen 7 5800X</span>
						<button class="text-sm px-4 py-2 rounded bg-indigo-500 hover:bg-indigo-600 font-semibold">Change</button>
					</div>
				</div>

				<!-- Add RAM, GPU, Storage... -->
			</div>
		</div>
		<InventoryModal v-if="showModal" :title="modalSlotType" :items="modalInventory" @close="showModal = false" @select="handleEquip" />
	</GameLayout>
</template>

<script setup>
	import GameLayout from "@/Layouts/GameLayout.vue";
	import InventoryModal from "@/Components/InventoryModal.vue";
	import {ref} from "vue";

	const showModal = ref(false);
	const modalSlotType = ref(null); // e.g. 'GPU'
	const modalInventory = ref([]); // filtered items

	// Placeholder logic
	const selectedCase = ref(true);
	const selectedMotherboard = ref(true);
	const selectedPSU = ref(false);

	const fakeInventory = {
		GPU: [
			{name: "RTX 3080", statLabel: "Hashrate", statValue: "92 MH/s"},
			{name: "RX 6800", statLabel: "Hashrate", statValue: "80 MH/s"},
		],
		CPU: [{name: "Ryzen 7 5800X", statLabel: "Multiplier", statValue: "1.25x"}],
		MB: [
			{name: "ASUS 540X", statLabel: "Multiplier", statValue: "1x", rarity: "Legendary", rarityClass: "text-yellow-400", quality: 87, qualityColor: "bg-emerald-400"},
			{name: "ASUS 740X", statLabel: "Multiplier", statValue: "1x", rarity: "Epic", rarityClass: "text-purple-400", quality: 87, qualityColor: "bg-emerald-400"},
			{name: "ASUS 740X", statLabel: "Multiplier", statValue: "1x", rarity: "Epic", rarityClass: "text-purple-400", quality: 87, qualityColor: "bg-emerald-400"},
			{name: "ASUS 740X", statLabel: "Multiplier", statValue: "1x", rarity: "Rare", rarityClass: "text-blue-400", quality: 87, qualityColor: "bg-emerald-400"},
			{name: "ASUS 740X", statLabel: "Multiplier", statValue: "1x", rarity: "Rare", rarityClass: "text-blue-400", quality: 87, qualityColor: "bg-emerald-400"},
			{name: "ASUS 740X", statLabel: "Multiplier", statValue: "1x", rarity: "Common", rarityClass: "text-gray-400", quality: 87, qualityColor: "bg-emerald-400"},
			{name: "ASUS 740X", statLabel: "Multiplier", statValue: "1x", rarity: "Common", rarityClass: "text-gray-400", quality: 87, qualityColor: "bg-emerald-400"},
			{name: "ASUS 740X", statLabel: "Multiplier", statValue: "1x", rarity: "Common", rarityClass: "text-gray-400", quality: 87, qualityColor: "bg-emerald-400"},
		],
	};

	const openInventoryModal = (slotType) => {
		modalSlotType.value = slotType;
		modalInventory.value = fakeInventory[slotType] || [];
		showModal.value = true;
	};

	const handleEquip = (item) => {
		console.log("Equipped:", item);
		showModal.value = false;
	};
</script>
