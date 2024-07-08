<template>
    <div :class="['bg-white', 'rounded-lg', 'p-4', 'mb-4', index % 2 === 0 ? 'bg-gray-200' : 'bg-gray-300']">
      <div class="flex justify-between">
        <span class="font-bold text-gray-700">{{ label }}:</span>
        <span class="text-gray-600">{{ value }}</span>
      </div>
    </div>
  </template>

  <script setup>
  import { defineProps } from 'vue';

  // Destructure props directly within the setup
  const { label, value, index } = defineProps(['label', 'value', 'index']);
  </script>
