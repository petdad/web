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
                    <form action="logout" method="POST">
                        <button type="submit"
                            class="flex items-center text-sm text-gray-600 hover:text-gray-800 transition duration-150 ease-in-out">
                            Log Out
                        </button>
                    </form>
                </nav>
            </div>

            <!-- Vertical Navigation Menu with Green Theme -->
            <Sidebar :sidebar-items="sidebarItems" />
        </aside>

        <!-- Main Content -->
        <main class="overflow-auto">
            <div class="m-3">
                <slot />
            </div>
        </main>
    </div>
</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
import Sidebar from '@/Components/Sidebar.vue';

const sidebarItems = [
  { text: 'Dashboard', routeName: 'dashboard', iconName: 'ppd-dashboard' },
  { text: 'Pets', routeName: 'dashboard', iconName: 'ppd-pet' },
  { text: 'Controllers', routeName: 'dashboard', iconName: 'ppd-controller' },
  { text: 'Devices', routeName: 'dashboard', iconName: 'ppd-device' },
  { text: 'Pet Space', routeName: 'spaces.index', iconName: 'ppd-space' },
  { text: 'Vets', routeName: 'vets.index', iconName: 'ppd-doc' },
];
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
