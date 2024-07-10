<template>
    <AuthenticatedLayout>
        <form @submit.prevent="submitForm" class="max-w-full bg-white p-6 rounded shadow-md">
            <h2 class="text-lg font-semibold text-green-600 mb-4">
                Add a Controller
            </h2>


            <span>PDC IDENTIFICATION NUMBER</span> : <span class="font-bold bg-white rounded-md text-[blue]">{{ unique_id }}</span>
            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input
                    type="text"
                    id="name"
                    v-model="formData.name"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                />
            </div>

            <div class="mb-4">
                <label for="space_id" class="block text-sm font-medium text-gray-700">Space:</label>
                <select
                    id="space_id"
                    v-model="formData.space_id"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                >
                    <option v-for="space in spaces" :key="space.id" :value="space.id">{{ space.name }}</option>
                </select>
            </div>

            <div class="mb-4 flex flex-row flex-wrap gap-2">
                <input
                    id="is_active"
                    v-model="formData.is_active"
                    required
                    type="checkbox"
                    class="mt-1 block px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                /> Activate?
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea
                    id="description"
                    v-model="formData.description"
                    rows="3"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                ></textarea>
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 my-4"
            >
                Add controller
            </button>
        </form>
        <Overview/>
    </AuthenticatedLayout>
</template>

<script setup>
import { router, useForm, usePage } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Overview from '@/Components/Overview.vue';
const props = defineProps({
    spaces: Array,
    unique_id: Number
});
const formData = useForm({
        name: '',
        space_id: 1,
        description: '',
        is_active: false
    });

function submitForm() {
    if(usePage().props.is_demo){
        alert('Disabled for demo version, Contact for business query juborajnaofel@gmail.com');

        return;
    }

    formData.post(route('controllers.store'), {
        onSuccess() {
            router.get(route('controllers.index'));
        }
    });
}
</script>

<style scoped>
/* Add your custom styles here */
</style>
