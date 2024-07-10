<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SpaceList from '@/Components/SpaceList.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    total_pets: Number,
    total_pets_vaccinated: Number,
    pets: Array,
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="">
            <div class="max-w-full px-1">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4"
                >
                    <!-- Statistic Cards -->
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">Total Pets</h2>
                        <p class="text-3xl font-bold text-gray-900">
                            {{ total_pets }}
                        </p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            💉 Vaccinated Pets
                        </h2>
                        <p class="text-3xl font-bold text-blue-600">
                            {{ total_pets_vaccinated }}
                        </p>
                    </div>
                    <div class="p-4 flex flex-row">
                        <span> ➕ </span>
                        <Link :href="route('pets.create')"> Add Pet </Link>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-5">
    <!-- Iterate over each pet -->
    <div v-for="pet in pets" :key="pet.id" class="max-w-full rounded overflow-hidden shadow-lg bg-white">
        <!-- <img class="w-full h-56 object-cover object-center" :src="pet.image_url" alt="Pet Image"> -->
        <div class="p-4">
            <h2 class="text-xl font-semibold text-gray-800">{{ pet.name }}</h2>
            <p class="text-gray-600 mb-2">{{ pet.species }} | Breed: {{ pet.breed }}</p>
            <p class="text-gray-600 mb-2">DOB: {{ pet.dob }}</p>
            <p class="text-gray-600 mb-2">Health: {{ pet.health_state }}</p>

            <!-- Conditional fields -->
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
            <!-- Add more conditional fields as needed -->

            <!-- <template v-if="pet.description">
                <p class="text-gray-600 mb-2">Description: {{ pet.description }}</p>
            </template> -->
            <template v-if="pet.microchipped === 1">
                <p class="text-gray-600 mb-2">Microchipped: Yes</p>
            </template>
            <template v-else-if="pet.microchipped === 0">
                <p class="text-gray-600 mb-2">Microchipped: No</p>
            </template>
            <template v-if="pet.adopted === 1">
                <p class="text-gray-600 mb-2">Adopted: Yes</p>
            </template>
            <template v-else-if="pet.adopted === 0">
                <p class="text-gray-600 mb-2">Adopted: No</p>
            </template>
            <template v-if="pet.neutered === 1">
                <p class="text-gray-600 mb-2">Neutered: Yes</p>
            </template>
            <template v-else-if="pet.neutered === 0">
                <p class="text-gray-600 mb-2">Neutered: No</p>
            </template>
            <template v-if="pet.declawed === 1">
                <p class="text-gray-600 mb-2">Declawed: Yes</p>
            </template>
            <template v-else-if="pet.declawed === 0">
                <p class="text-gray-600 mb-2">Declawed: No</p>
            </template>
            <template v-if="pet.tag_number">
                <p class="text-gray-600 mb-2">Tag Number: {{ pet.tag_number }}</p>
            </template>
            <template v-if="pet.insurance_provider">
                <p class="text-gray-600 mb-2">Insurance Provider: {{ pet.insurance_provider }}</p>
            </template>
        </div>
    </div>
</div>




        </div>
    </AuthenticatedLayout>
</template>
