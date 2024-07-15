<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SpaceList from '@/Components/SpaceList.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    total_pet_space: Number,
    total_active_pet_space: Number,
    spaces:Array
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="">
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
                            🟢 Active Pet Space
                        </h2>
                        <p class="text-3xl font-bold text-blue-600">
                            {{ total_active_pet_space }}
                        </p>
                    </div>
                    <div class="p-4 flex flex-row">
                        <span> ➕ </span>
                        <Link :href="route('spaces.create')">
                            Create Space
                        </Link>
                    </div>
                </div>
            </div>
            <SpaceList :spaces="spaces" default-display='block'/>
        </div>
    </AuthenticatedLayout>
</template>
