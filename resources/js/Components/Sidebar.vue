<template>
    <div class="bg-green-800 text-white">
      <template v-for="(item, index) in sidebarItems" :key="index">
        <a :href="route(item.routeName)" :class="{
            'bg-green-900': isCurrentRoute(item.routeName),
            'text-gray-300': !isCurrentRoute(item.routeName),
          }" class="hover:bg-green-900 flex flex-row items-center py-4 px-3">

          <span v-if="item.iconName" class="">
            <CustomIconLib
              :icon-name="item.iconName"
              :color="'#fff'"
              :size="10"
            />
          </span>
          <span>{{ item.text }}</span>
        </a>
      </template>
    </div>
  </template>

  <script setup>
  import { defineProps } from 'vue';
  import CustomIconLib from '@/Components/CustomIconLib.vue';

  const props = defineProps({
    sidebarItems: {
      type: Array,
      required: true,
    },
  });

  const route = (name) => {
    return '#'; // Replace with actual routing logic
  };

  const isCurrentRoute = (routeName) => {
    return false; // Replace with actual current route logic
  };
  </script>
