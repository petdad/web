<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    total_controllers: Number,
    total_devices: Number,
    controllers: Array,
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
                    
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">Total Controllers</h2>
                        <p class="text-3xl font-bold text-gray-900">
                            {{ total_controllers }}
                        </p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            💉 Total Devices
                        </h2>
                        <p class="text-3xl font-bold text-blue-600">
                            {{ total_devices }}
                        </p>
                    </div>
                    <div class="p-4 flex flex-row">
                        <span> ➕ </span>
                        <Link :href="route('controllers.create')"> Add Controller </Link>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-5">
    <div v-for="controller in controllers" :key="controller.id" class="max-w-full rounded overflow-hidden shadow-lg bg-white">
        <div class="p-4">
            <h2 class="text-xl font-semibold text-gray-800">{{ controller.name }}</h2>
        </div>
        <div class="p-4">
            <span v-for="device in controller?.devices">{{ device.name }}</span>
        </div>
    </div>
</div>




        </div>
    </AuthenticatedLayout>
</template>
