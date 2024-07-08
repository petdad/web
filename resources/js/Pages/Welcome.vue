<template>
    <div class="bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Sidebar -->
                <div class="md:col-span-1">
                    <div class="flex items-center justify-center">
                         <ApplicationLogo height="300px"/>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">
                            Navigation
                        </h2>
                        <nav>
                            <ul class="space-y-2">
                                <li v-if="canLogin">
                                    <a href="login"
                                        class="flex items-center space-x-2 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9v6a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-6"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z">
                                            </path>
                                        </svg>
                                        <span>Log in</span>
                                    </a>
                                </li>
                                <li v-if="canRegister">
                                    <a href="register"
                                        class="flex items-center space-x-2 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span>Register</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Main Content -->
                <div class="md:col-span-1">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <div class="mt-8">
                            <h1 class="text-3xl font-semibold text-green-500 dark:text-green-500 mb-4">
                                Project PetDad
                            </h1>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                Optimize Pet Care with an Integrated IoT System
                                for Monitoring and Maintenance, combining robust
                                hardware and intelligent software solutions.
                            </p>
                            <div class="mt-4">
                                <img :src="hardwareImage" alt="Project" class="max-w-full h-auto" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div class="mt-12 text-center text-sm text-gray-500 dark:text-gray-400">
                © 2024 Project Pet Dad. All Rights Reserved.
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
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
    hardwareImage: String
});
</script>

<style>
/* Add your custom styles here */
</style>
