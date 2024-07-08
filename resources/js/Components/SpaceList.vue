<template>
    <div class="flex flex-col gap-4 mx-5 my-10">
        <div v-if="spaces?.length <= 0">
            No Records Found [+] <a>Create a Space</a>
        </div>
        <div
            v-for="(space, index) in spaces"
            :key="index"
            class="card bg-green-700 rounded-lg overflow-hidden shadow-lg text-white"
        >
            <div
                class="card-header bg-green-600 px-6 py-4 flex flex-row justify-between cursor-pointer"
                @click="handelSpaceAccordion(index)"
            >
                <span class="text-xl font-semibold">{{ space.name }}</span>
                <span v-if="space.is_active" class="active-status"
                    >🟢 Active</span
                >
            </div>

            <div :id="'space_card_'+index" class="p-1" :class="defaultDisplay">
                <div class="flex flex-col md:flex-row gap-1">
                    <div class="bg-white text-black p-2 w-full">Pets:
                        <span v-for="pet in space?.pets">
                            {{ pet.name }}
                        </span>
                        <span v-if="space?.pets?.length < 1">
                            No pets added to this space
                        </span>
                    </div>

                </div>
                <SpaceDevices :space="space" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import SpaceDevices from '@/Components/SpaceDevices.vue';
import { space } from 'postcss/lib/list';

const props = defineProps({
    spaces: Array, // Assuming spaces is passed as a prop
    defaultDisplay: String
});

function handelSpaceAccordion(index){
    let spaceCard = document.querySelector('#space_card_'+index);
    let displayState = spaceCard.style.display;
    if(displayState === 'none'){
        spaceCard.style.display = 'block';
        return;
    }
    spaceCard.style.display = 'none';
}
</script>

<style scoped>
.card {
    /* Your card styles */
}
.card-header {
    /* Header styles */
}
.active-status {
    /* Styles for active status */
}
.gate-status {
    /* Styles for gate status */
}
</style>
