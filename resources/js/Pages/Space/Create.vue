<template>
    <AuthenticatedLayout>
        <form
            @submit.prevent="submitForm"
            class="max-w-full bg-white p-6 rounded shadow-md"
        >
            <h2 class="text-lg font-semibold text-green-600 mb-4">
                Space Information
            </h2>

            <!-- Space Name -->
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

            <!-- Is Active -->
            <div class="mb-4">
                <label
                    for="is_active"
                    class="block text-sm font-medium text-gray-700"
                    >Is Active:</label
                >
                <select
                    id="is_active"
                    v-model="space.is_active"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                >
                    <option :value="true">Yes</option>
                    <option :value="false">No</option>
                </select>
            </div>

            <!-- Pet Information -->
            <h2 class="text-lg font-semibold text-green-600 mb-4">
                Pet Information
                <button
                    type="button"
                    @click="addPet('openAddModal')"
                    class="text-sm text-green-600 hover:text-green-700 mb-4"
                >
                    Add Pet
                </button>
            </h2>
            <div class="fixed bg-white top-10 right-0 mx-auto z-auto w-1/2 p-3 overflow-auto" v-if="pet?.isCreating">
                <!-- Pet Name -->
                <div class="mb-4">
                    <label
                        for="name"
                        class="block text-sm font-medium text-gray-700"
                        >Pet Name:</label
                    >
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
                    <label
                        for="breed"
                        class="block text-sm font-medium text-gray-700"
                        >Breed:</label
                    >
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
                    <label
                        for="species"
                        class="block text-sm font-medium text-gray-700"
                        >Species:</label
                    >
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
                    <label
                        for="dob"
                        class="block text-sm font-medium text-gray-700"
                        >Date of Birth:</label
                    >
                    <input
                        type="date"
                        id="dob"
                        v-model="pet.dob"
                        required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    />
                </div>

                <!-- Health State -->
                <div class="mb-4">
                    <label
                        for="health_state"
                        class="block text-sm font-medium text-gray-700"
                        >Health State:</label
                    >
                    <input
                        type="text"
                        id="health_state"
                        v-model="pet.health_state"
                        required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    />
                </div>

                <!-- Color -->
                <div class="mb-4">
                    <label
                        for="color"
                        class="block text-sm font-medium text-gray-700"
                        >Color:</label
                    >
                    <input
                        type="text"
                        id="color"
                        v-model="pet.color"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    />
                </div>

                <!-- Gender -->
                <div class="mb-4">
                    <label
                        for="gender"
                        class="block text-sm font-medium text-gray-700"
                        >Gender:</label
                    >
                    <select
                        id="gender"
                        v-model="pet.gender"
                        required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    >
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Vaccinated -->
                <div class="mb-4">
                    <label class="flex items-center">
                        <input
                            type="checkbox"
                            v-model="pet.vaccinated"
                            class="form-checkbox h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                        />
                        <span class="ml-2 text-sm text-gray-700"
                            >Vaccinated</span
                        >
                    </label>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label
                        for="description"
                        class="block text-sm font-medium text-gray-700"
                        >Description:</label
                    >
                    <textarea
                        id="description"
                        v-model="pet.description"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    ></textarea>
                </div>

                <!-- Image Upload -->
                <div class="mb-4">
                    <label
                        for="image"
                        class="block text-sm font-medium text-gray-700"
                        >Image:</label
                    >
                    <input
                        type="file"
                        id="image"
                        @change="handleImageUpload"
                        accept="image/*"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    />
                    <span v-if="imagePreview" class="block mt-2">
                        <img
                            :src="imagePreview"
                            alt="Preview"
                            class="max-w-xs max-h-40"
                        />
                    </span>
                </div>

                <!-- Microchipped -->
                <div class="mb-4">
                    <label class="flex items-center">
                        <input
                            type="checkbox"
                            v-model="pet.microchipped"
                            class="form-checkbox h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                        />
                        <span class="ml-2 text-sm text-gray-700"
                            >Microchipped</span
                        >
                    </label>
                </div>

                <!-- Microchip Number -->
                <div class="mb-4">
                    <label
                        for="microchip_number"
                        class="block text-sm font-medium text-gray-700"
                        >Microchip Number:</label
                    >
                    <input
                        type="text"
                        id="microchip_number"
                        v-model="pet.microchip_number"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    />
                </div>

                <!-- Adopted -->
                <div class="mb-4">
                    <label class="flex items-center">
                        <input
                            type="checkbox"
                            v-model="pet.adopted"
                            class="form-checkbox h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                        />
                        <span class="ml-2 text-sm text-gray-700">Adopted</span>
                    </label>
                </div>

                <!-- Adoption Date -->
                <div class="mb-4" v-if="pet.adopted">
                    <label
                        for="adoption_date"
                        class="block text-sm font-medium text-gray-700"
                        >Adoption Date:</label
                    >
                    <input
                        type="date"
                        id="adoption_date"
                        v-model="pet.adoption_date"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    />
                </div>

                <!-- Neutered -->
                <div class="mb-4">
                    <label class="flex items-center">
                        <input
                            type="checkbox"
                            v-model="pet.neutered"
                            class="form-checkbox h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                        />
                        <span class="ml-2 text-sm text-gray-700">Neutered</span>
                    </label>
                </div>

                <!-- Declawed -->
                <div class="mb-4">
                    <label class="flex items-center">
                        <input
                            type="checkbox"
                            v-model="pet.declawed"
                            class="form-checkbox h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                        />
                        <span class="ml-2 text-sm text-gray-700">Declawed</span>
                    </label>
                </div>

                <!-- Tag Number -->
                <div class="mb-4">
                    <label
                        for="tag_number"
                        class="block text-sm font-medium text-gray-700"
                        >Tag Number:</label
                    >
                    <input
                        type="text"
                        id="tag_number"
                        v-model="pet.tag_number"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    />
                </div>

                <!-- Insurance Provider -->
                <div class="mb-4">
                    <label
                        for="insurance_provider"
                        class="block text-sm font-medium text-gray-700"
                        >Insurance Provider:</label
                    >
                    <input
                        type="text"
                        id="insurance_provider"
                        v-model="pet.insurance_provider"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    />
                </div>
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
    is_active: true,
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
