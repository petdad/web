<template>
    <div>
      <div
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 transition-opacity"
        v-if="isShowOverView"
      >
        <div class="bg-white p-6 rounded-lg shadow-lg min-w-[800px]">
          <div class="flex flex-col gap-4">
            <div class="flex flex-row gap-5 justify-end ">
              <span @click="close" class="text-lg font-bold cursor-pointer"
                > ❌ Close and go to Dashboard</span
              >
            </div>
            <Overview />
          </div>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  import Overview from '@/Components/Overview.vue';
  import { ref } from 'vue';

  const isShowOverView = ref(
    localStorage.getItem('show_overview') == "don't_show" ? false : true
  );

  function close() {
    isShowOverView.value = false;
  }
  </script>

  <style scoped>
  .modal-content {
    min-width: 800px;
  }

  .modal-overlay {
    z-index: 50;
  }
  </style>
