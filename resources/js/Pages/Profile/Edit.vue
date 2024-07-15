<template>
    <Head title="Profile" />

    <AuthenticatedLayout>
        <div class="py-6 px-4 lg:px-8">
            <div class="max-w-full">
                <div class="bg-white shadow sm:rounded-lg">
                    
                    <div class="flex">
                        <button
                            @click="activeTab = 'profile'"
                            :class="{ 'bg-green-500 text-white': activeTab === 'profile', 'text-gray-600': activeTab !== 'profile' }"
                            class="flex-1 py-2 px-4 font-semibold text-sm focus:outline-none rounded-tl-lg rounded-bl-lg"
                        >
                            Profile Information
                        </button>
                        <button
                            @click="activeTab = 'password'"
                            :class="{ 'bg-green-500 text-white': activeTab === 'password', 'text-gray-600': activeTab !== 'password' }"
                            class="flex-1 py-2 px-4 font-semibold text-sm focus:outline-none"
                        >
                            Update Password
                        </button>
                        <button
                            @click="activeTab = 'delete'"
                            :class="{ 'bg-green-500 text-white': activeTab === 'delete', 'text-gray-600': activeTab !== 'delete' }"
                            class="flex-1 py-2 px-4 font-semibold text-sm focus:outline-none rounded-tr-lg rounded-br-lg"
                        >
                            Delete Account
                        </button>
                    </div>
                    

                    
                    <div class="p-2">
                        <div v-if="activeTab === 'profile'">
                            <UpdateProfileInformationForm
                                :must-verify-email="mustVerifyEmail"
                                :status="status"

                            />
                        </div>
                        <div v-else-if="activeTab === 'password'">
                            <UpdatePasswordForm />
                        </div>
                        <div v-else-if="activeTab === 'delete'">
                            <DeleteUserForm />
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { ref } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

const activeTab = ref('profile');

const props = defineProps({
    mustVerifyEmail: Boolean,
    status: String,
});
</script>
