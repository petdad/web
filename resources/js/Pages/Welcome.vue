<template>
    <div class="bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-full mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <!-- Navigation Bar -->
            <div
                class="fixed top-0 left-0 right-0 z-50 bg-green-500 dark:bg-blue-800 bg-opacity-50 backdrop-filter backdrop-blur-lg shadow-lg p-4 flex justify-between items-center mb-8"
            >
                <div>
                    <ApplicationLogo height="40px" />
                </div>
                <nav class="flex space-x-4">
                    <a
                        href="login"
                        v-if="canLogin"
                        class="bg-blue-500 dark:bg-blue-800 text-white hover:bg-blue-600 dark:hover:bg-blue-700 hover:text-blue-100 dark:hover:text-blue-300 px-4 py-2 rounded-md text-sm font-medium transition duration-300"
                    >
                        Log in
                    </a>
                    <a
                        href="register"
                        v-if="canRegister"
                        class="bg-green-500 dark:bg-green-800 text-white hover:bg-green-600 dark:hover:bg-green-700 hover:text-green-100 dark:hover:text-green-300 px-4 py-2 rounded-md text-sm font-medium transition duration-300"
                    >
                        Register
                    </a>
                </nav>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                <!-- Main Content -->
                <div class="md:col-span-1">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"
                    >
                        <div class="mt-8">
                            <h1
                                class="text-3xl font-semibold text-green-500 dark:text-green-500 mb-4"
                            >
                                Project PetDad
                            </h1>

                            <p
                                class="text-gray-600 dark:text-gray-400 leading-relaxed"
                            >
                                Optimize Pet Care with an Integrated IoT System
                                for Monitoring and Maintenance, combining robust
                                hardware and intelligent software solutions.
                            </p>
                            <NeedInvestor />
                            <div class="mt-4">
                                <img
                                    :src="hardwareImage"
                                    alt="Project"
                                    class="w-full h-auto mx-auto"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="md:col-span-1">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"
                    >
                        <h2
                            class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4"
                        >
                            Navigation
                        </h2>
                        <video
                            class="w-full max-h-[300px] md:max-h-[500px]"
                            autoplay
                            muted
                            loop
                        >
                            <source
                                src="https://petdad.juborajnaofel.xyz/PROJECT-PETDAD.mp4"
                                type="video/mp4"
                            />
                            <!-- Add more source tags for different video formats -->
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div
                class="mt-12 text-center text-sm text-gray-500 dark:text-gray-400"
            >
                © 2024 Project Pet Dad. All Rights Reserved.
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import NeedInvestor from '@/Components/NeedInvestor.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    hardwareImage: String,
});
</script>

<style>
/* Add your custom styles here */
</style>
