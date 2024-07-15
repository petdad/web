<template>
    <div class="flex flex-row mt-2">
      <div class="text-sm">
        <div class="bg-green-100 text-black text-sm rounded-sm p-2">
          <span class="bg-slate-500 text-white p-2">
            {{ space?.controllers?.length }} Controller{{ space?.controllers?.length === 1 ? '' : 's' }}
          </span>
          <div class="overflow-auto mt-4">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-8 gap-4">
              <template v-for="controller in space?.controllers" :key="controller.id">
                <template v-for="device in controller.devices" :key="device.id">

                  <div class="bg-white shadow-md p-4 rounded-md">
                    <h2 class="text-lg font-semibold">{{ device.device_name }}</h2>
                    <div class="flex flex-row flex-wrap gap-3">

                      <span
                        :class="{
                          'bg-green-500': device.device_status == 'inactive',
                          'bg-red-500': device.device_status == 'active'
                        }"
                        class="text-white px-2 py-1 rounded-full text-xs font-semibold"
                      >
                        {{ device.device_status }}
                      </span>
                      <span
                        class="text-white px-2 py-1 rounded-full text-xs font-semibold bg-blue-600"
                      >
                      {{ device.device_type }}
                    </span>
                    </div>

                  </div>
                </template>
              </template>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: 'SpaceDevices',
    props: {
      space: {
        type: Object,
        required: true
      }
    }
  };
  </script>

  <style scoped>
  .bg-green-100 {
    background-color: #6EE7B7;
  }

  .text-sm {
    font-size: 0.875rem;
  }

  .text-black {
    color: black;
  }
  </style>
