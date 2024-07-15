<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SpaceList from '@/Components/SpaceList.vue';
import { Head } from '@inertiajs/vue3';
import Overview from '@/Components/Overview.vue';

const props = defineProps({
    total_pet_space: Number,
    total_active_pet_space: Number,
    vet_contacts: Number,
    total_pets: Number,
    spaces:Array
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="">
            <Overview/>
            <div class="max-w-full sm:px-6 lg:px-8">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4"
                >
                    
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            Total Pet Space
                        </h2>
                        <p class="text-3xl font-bold text-gray-900">
                            {{ total_pet_space }}
                        </p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            Total Pets
                        </h2>
                        <p class="text-3xl font-bold text-gray-900">
                            {{ total_pets }}
                        </p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            🟢 Active Pet Space
                        </h2>
                        <p class="text-3xl font-bold text-blue-600">
                            {{ total_active_pet_space }}
                        </p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">Vet Contacts</h2>
                        <p class="text-3xl font-bold text-green-600">
                            {{ vet_contacts }}
                        </p>
                    </div>

                    
                    
                </div>
            </div>
            <SpaceList :spaces="spaces" default-display='block'/>
        </div>
    </AuthenticatedLayout>
</template>
