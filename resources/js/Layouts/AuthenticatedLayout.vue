<template>
    <div class="flex flex-col md:flex-row h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="bg-green-500 w-full md:w-64 p-4">
            <!-- Avatar Card -->
            <div class="mb-8 bg-white rounded-lg p-2">
                <!-- User Name -->
                <div class="flex items-center mb-2">
                    <div class="flex-shrink-0 h-10 w-10">
                        <!-- Placeholder for user avatar or initials -->
                        <div class="bg-gray-300 rounded-full h-10 w-10 flex items-center justify-center">
                            <span class="text-gray-600 text-sm">{{
                                $page.props.auth.user.name.charAt(0)
                                }}</span>
                        </div>
                    </div>
                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800">
                            {{ $page.props.auth.user.name }}
                        </div>
                        <!-- User Role -->
                        <div class="text-sm text-gray-600">Role: Member</div>
                    </div>
                </div>

                <nav class="space-y-2">
                    <!-- Profile Link -->
                    <a href="profile"
                        class="flex items-center text-sm text-gray-600 hover:text-gray-800 transition duration-150 ease-in-out">
                        Profile
                    </a>

                    <!-- Log Out Link -->
                    <div>
                        <button type="button" @click="logoutHandle"
                            class="flex items-center text-sm text-gray-600 hover:text-gray-800 transition duration-150 ease-in-out">
                            Log Out
                        </button>
                    </div>
                </nav>
            </div>

            <!-- Vertical Navigation Menu with Green Theme -->
            <Sidebar :sidebar-items="sidebarItems" />
        </aside>

        <!-- Main Content -->
        <main class="overflow-auto">
            <div class="m-3">
                <Alert v-if="$page.props.is_demo" :type="'warning'" :message="'Data is deleted everyday as it is a demo version. In demo Create, Update and Deletion is disabled!  Contact for business query at email:juborajnaofel@gmail.com'" @close="closeAlert" />
                <slot />
            </div>
        </main>
    </div>
</template>

<script setup>
import Sidebar from '@/Components/Sidebar.vue';
import Alert from '@/Components/Alert.vue';
import { router, useForm } from '@inertiajs/vue3';

const sidebarItems = [
  { text: 'Dashboard', routeName: 'dashboard', iconName: 'ppd-dashboard' },
  { text: 'Pets', routeName: 'pets.index', iconName: 'ppd-pet' },
  { text: 'Pet Space', routeName: 'spaces.index', iconName: 'ppd-space' },
  { text: 'Controllers', routeName: 'controllers.index', iconName: 'ppd-controller' },
  { text: 'Devices', routeName: 'devices.index', iconName: 'ppd-device' },
  { text: 'Vets', routeName: 'vets.index', iconName: 'ppd-doc' },
];

const logoutHandle = () => {
    const form = useForm({});
    form.post(route('logout'))
}
</script>

<style scoped>
/* Adjustments for sidebar and main content layout */
@media (min-width: 768px) {
    .flex {
        flex-direction: row;
    }

    aside {
        flex: 0 0 auto;
    }

    main {
        flex: 1 1 0%;
    }
}
</style>
