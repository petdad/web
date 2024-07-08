<template>
    <AuthenticatedLayout>
        <form
            @submit.prevent="submitForm"
            class="max-w-full bg-white p-6 rounded shadow-md"
        >
            <h2 class="text-lg font-semibold text-green-600 mb-4">
                Vet Information
            </h2>

            <div class="mb-4">
                <label
                    for="name"
                    class="block text-sm font-medium text-gray-700"
                    >Name:</label
                >
                <input
                    type="text"
                    id="name"
                    v-model="space.name"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                />
            </div>

            <div class="mb-4">
                <label
                    for="phone"
                    class="block text-sm font-medium text-gray-700"
                    >Phone:</label
                >
                <input
                    type="text"
                    id="phone"
                    v-model="space.phone"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                />
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 my-10"
            >
                Submit
            </button>
        </form>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue'; // Import ref from Vue 3 Composition API

const space = useForm({
    name: '',
    phone: '',
});

const pets = ref([]);
const pet = ref({ isCreating: false });

function addPet(action) {
    if (action == 'openAddModal') {
        pet.value.isCreating = true;
    }
    pets.value.push(pet);
}

function removePet(index) {
    pets.value.splice(index, 1);
}

function submitForm() {
    // Assuming you have Axios installed, if not install it via npm or yarn
    space
        .post(route('spaces.store'))
        .then((response) => {
            console.log('Form submitted successfully!', response.data);
            // Handle success, e.g., show a success message
        })
        .catch((error) => {
            console.error('Error submitting form:', error);
            // Handle error, e.g., show an error message
        });
}
</script>

<style scoped>
/* Add your custom styles here */
</style>
