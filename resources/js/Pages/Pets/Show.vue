<template>
    <AuthenticatedLayout>
        <div class="max-w-full bg-white p-6 rounded shadow-md">
            <h2 class="text-lg font-semibold text-green-600 mb-4">
                Pet Profile: {{pet.name}}
            </h2>

            <!-- Breed -->
            <div class="mb-4">
                <label for="breed" class="block text-sm font-medium text-gray-700">Breed:</label>
                <span
                    id="breed"
                    v-text="pet.breed"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                ></span>
            </div>

            <!-- Species -->
            <div class="mb-4">
                <label for="species" class="block text-sm font-medium text-gray-700">Species:</label>
                <span
                    id="species"
                    v-text="pet.species"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                ></span>
            </div>

            <!-- Date of Birth -->
            <div class="mb-4">
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth:</label>
                <span
                    id="dob"
                    v-text="pet.dob"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                ></span>
            </div>

            <!-- Gender -->
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender:</label>
                <span
                    id="gender"
                    v-text="getGenderLabel(pet.gender)"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                ></span>
            </div>

            <!-- Vaccinated -->
            <div class="mb-4">
                <label for="vaccinated" class="block text-sm font-medium text-gray-700">Vaccinated:</label>
                <span
                    id="vaccinated"
                    v-html="renderVaccinatedIcon(pet.vaccinated)"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                ></span>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <span
                    id="description"
                    v-text="pet.description"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                ></span>
            </div>
        </div>

        <VaccineLog :vaccinationLogs="pet.vaccination_logs" :petId="pet.id"/>
    </AuthenticatedLayout>
</template>

<script setup>
import { defineProps } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import VaccineLog from './VaccineLog.vue';

const props = defineProps({
    pet: Object
});

const getGenderLabel = (gender) => {
    switch (gender) {
        case 'male':
            return '♂️ Male';
        case 'female':
            return '♀️ Female';
        default:
            return '⚧ Other';
    }
};

const renderVaccinatedIcon = (vaccinated) => {
    return vaccinated ? '✅ Vaccinated' : '❌ Not Vaccinated';
};
</script>
