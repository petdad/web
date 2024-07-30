<template>
    <div class="bg-gray-100 dark:bg-gray-900 min-h-screen">
        <Head title="Dashboard" />

        <AuthenticatedLayout>
            <div class="max-w-full px-1">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4">

                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">Total Pets</h2>
                        <p class="text-3xl font-bold text-gray-900">{{ total_pets }}</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">💉 Vaccinated Pets</h2>
                        <p class="text-3xl font-bold text-blue-600">{{ total_pets_vaccinated }}</p>
                    </div>
                    <div class="p-4 flex flex-row items-center space-x-2">
                        <span>➕</span>
                        <Link :href="route('pets.create')" class="text-blue-600 hover:underline">Add Pet</Link>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-5">
                <div v-for="pet in pets" :key="pet.id" class="max-w-full rounded overflow-hidden shadow-lg bg-white">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800">{{ pet.name }}</h2>
                        <p class="text-gray-600 mb-2">{{ pet.species }} | Breed: {{ pet.breed }}</p>
                        <p class="text-gray-600 mb-2">DOB: {{ pet.dob }}</p>
                        <p class="text-gray-600 mb-2">Health: {{ pet.health_state }}</p>

                        <template v-if="pet.color">
                            <p class="text-gray-600 mb-2">Color: {{ pet.color }}</p>
                        </template>
                        <template v-if="pet.gender">
                            <p class="text-gray-600 mb-2">Gender: {{ pet.gender }}</p>
                        </template>
                        <template v-if="pet.vaccinated === 1">
                            <p class="text-gray-600 mb-2">Vaccinated: Yes</p>
                        </template>
                        <template v-else-if="pet.vaccinated === 0">
                            <p class="text-gray-600 mb-2">Vaccinated: No</p>
                        </template>

                        <div class="mt-4 flex items-center space-x-4">
                            <button @click="viewPet(pet.id)" class="bg-green-500 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center hover:bg-green-600">
                                <span class="mr-2">👁️‍🗨️</span> View
                            </button>
                            <button @click="editPet(pet)" class="bg-blue-500 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center hover:bg-blue-600">
                                <span class="mr-2">✏️</span> Edit
                            </button>
                            <button @click="deletePet(pet.id)" class="bg-red-500 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center hover:bg-red-600">
                                <span class="mr-2">🗑️</span> Delete
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </div>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router, usePage } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps({
    total_pets: Number,
    total_pets_vaccinated: Number,
    pets: Array,
});

const editPet = (pet) => {
    if(usePage().props.is_demo){
        alert('Edit is not allowed in demo. Contact juborajnaofel@gmail.com');
        return;
    }
};

const deletePet = (petId) => {
    if(usePage().props.is_demo){
        alert('Deletion is not allowed in demo. Contact juborajnaofel@gmail.com');
        return;
    }
};


const viewPet = (petId) => {
    router.visit(route('pets.show', petId));
};
</script>
