<template>
    <AuthenticatedLayout>
        <form @submit.prevent="submitForm" class="max-w-full bg-white p-6 rounded shadow-md">
            <h2 class="text-lg font-semibold text-green-600 mb-4">
                Add a Pet
            </h2>

            <!-- Pet Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input
                    type="text"
                    id="name"
                    v-model="pet.name"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                />
            </div>

            <!-- Breed -->
            <div class="mb-4">
                <label for="breed" class="block text-sm font-medium text-gray-700">Breed:</label>
                <input
                    type="text"
                    id="breed"
                    v-model="pet.breed"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                />
            </div>

            <!-- Species -->
            <div class="mb-4">
                <label for="species" class="block text-sm font-medium text-gray-700">Species:</label>
                <input
                    type="text"
                    id="species"
                    v-model="pet.species"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                />
            </div>

            <!-- Date of Birth -->
            <div class="mb-4">
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth:</label>
                <input
                    type="date"
                    id="dob"
                    v-model="pet.dob"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                />
            </div>

            <!-- Gender -->
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender:</label>
                <select
                    id="gender"
                    v-model="pet.gender"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Vaccinated -->
            <div class="mb-4">
                <label for="vaccinated" class="block text-sm font-medium text-gray-700">Vaccinated:</label>
                <input
                    type="checkbox"
                    id="vaccinated"
                    v-model="pet.vaccinated"
                    class="mt-1 form-checkbox h-5 w-5 text-green-600"
                />
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea
                    id="description"
                    v-model="pet.description"
                    rows="3"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                ></textarea>
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 my-4"
            >
                Add Pet
            </button>
        </form>
    </AuthenticatedLayout>

</template>

<script setup>
import { router, useForm, usePage } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const pet = useForm({
    name: '',
    breed: '',
    species: '',
    dob: '',
    gender: 'male',
    vaccinated: false,
    description: ''
});

function submitForm() {
    if(usePage().props.is_demo){
        alert('Disabled for demo version, Contact for business query at email: juborajnaofel@gmail.com');

        return;
    }

    pet
        .post(route('pets.store'),{
            onSuccess(){
                router.get(route('pets.index'))
            }
        })
}
</script>
