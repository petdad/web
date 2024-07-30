<template>
    <div class="flex flex-col gap-4 mx-5 my-10">
        <div v-if="spaces?.length <= 0" class="text-gray-600">
            No Records Found
            <span class="text-green-600">[+]</span>
            <a href="#" class="text-green-600">Create a Space</a>
        </div>
        <div
            v-for="(space, index) in spaces"
            :key="index"
            class="bg-green-700 rounded-lg overflow-hidden shadow-lg text-white"
        >
            <div
                class="card-header bg-green-600 px-6 py-4 flex flex-row justify-between cursor-pointer hover:bg-green-600"
                @click="handelSpaceAccordion(index)"
            >
                <span class="text-xl font-semibold capitalize">{{
                    space.name
                }}</span>
            </div>
            <div class="flex items-center space-x-4 p-2">
                <button
                    :id="'space_card_btn_view_' + index"
                    @click="handelSpaceAccordion(index)"
                    class="btn-green"
                >
                <span class="mr-2">👁️</span> View
                </button>
                <button @click="handleEditSpace(space)" class="btn-blue">
                    <span class="mr-2">✏️</span> Edit
                </button>
                <button @click="handleDeleteSpace(space.id)" class="btn-red">
                    <span class="mr-2">🗑️</span> Delete
                </button>
                <button @click="handleAssignDevice(space.id)" class="btn-slate">
                    <span class="mr-2">✚</span> Assign Device
                </button>
                <button @click="handleAssignPet(space.id)" class="btn-slate">
                    <span class="mr-2">✚</span> Assign Pet
                </button>
                <span v-if="space.is_active" class="text-green-200"
                    >🟢 Active</span
                >
                <span v-else class="text-red-500">⚪️ Inactive</span>
            </div>

            <div
                :id="'space_card_' + index"
                class="p-1"
                :class="defaultDisplay"
            >
                <div class="flex flex-col md:flex-row gap-1">
                    <div
                        class="bg-green-200 rounded-sm font-bold text-black p-2 w-full md:w-auto md:flex-grow"
                    >
                        Pets:
                        <template v-if="space?.pets?.length > 0">
                            <span
                                v-for="(pet, petIndex) in space.pets"
                                :key="petIndex"
                                class="mr-1 font-bold"
                                >{{ pet.name }}</span
                            >
                        </template>
                        <template v-else>
                            <span>No pets added to this space</span>
                        </template>
                    </div>
                </div>
                <div>
                    <SpaceDevices :space="space" />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps, onMounted } from 'vue';
import { router, usePage } from '@inertiajs/vue3';
import SpaceDevices from '@/Components/SpaceDevices.vue';

const props = defineProps({
    spaces: Array,
    defaultDisplay: String,
});

onMounted(() => {
    if (props?.defaultDisplay == 'block-first') {
        props?.spaces?.forEach((element, i) => {
            if (i === 0) {
                document.querySelector('#space_card_btn_view_0').innerHTML =
                    '<span class="mr-2">❌</span> Hide';
                return;
            }
            handelSpaceAccordion(i);
        });
    }
});

function handelSpaceAccordion(index) {
    const spaceCard = document.querySelector('#space_card_' + index);
    spaceCard.style.display =
        spaceCard.style.display === 'none' ? 'block' : 'none';

    if (spaceCard.style.display == 'none') {
        document.querySelector('#space_card_btn_view_' + index).innerHTML =
            '<span class="mr-2">👁️</span> View';
    } else {
        document.querySelector('#space_card_btn_view_' + index).innerHTML =
            '<span class="mr-2">❌</span> Hide';
    }
}

function handleEditSpace(space) {
    if (usePage().props.is_demo) {
        alert('Edit is not allowed in demo. Contact juborajnaofel@gmail.com');
        return;
    }
    console.log('Editing space:', space);
}

function handleDeleteSpace(spaceId) {
    if (usePage().props.is_demo) {
        alert('Deletion not allowed in demo. Contact juborajnaofel@gmail.com');
        return;
    }
    console.log('Deleting space with ID:', spaceId);
}

function handleAssignDevice(spaceId) {
    if (usePage().props.is_demo) {
        alert(
            'Device assignment not allowed in demo. Contact juborajnaofel@gmail.com'
        );
        return;
    }
    console.log('Assigning device to space with ID:', spaceId);
}

function handleAssignPet(spaceId) {
    if (usePage().props.is_demo) {
        alert(
            'Pet assignment not allowed in demo. Contact juborajnaofel@gmail.com'
        );
        return;
    }
    console.log('Assigning pet to space with ID:', spaceId);
}
</script>

<style scoped>
.card-header {
    border-bottom: 2px solid #4a5568;
}

.active-status {
    font-size: 16px;
}

.btn-green,
.btn-blue,
.btn-red,
.btn-slate {
    cursor: pointer;
    transition: background-color 0.3s ease;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    display: flex;
    align-items: center;
}

.btn-green:hover,
.btn-blue:hover,
.btn-red:hover,
.btn-slate:hover {
    filter: brightness(90%);
}

.btn-green {
    background-color: #48bb78;
    color: white;
}

.btn-blue {
    background-color: #4299e1;
    color: white;
}

.btn-red {
    background-color: #f56565;
    color: white;
}

.btn-slate {
    background-color: #718096;
    color: white;
}
</style>
