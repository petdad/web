<template>
    <div class="flex flex-wrap w-full mt-2 overflow-hidden">
      <div class="text-sm">
        <div class="flex flex-row overflow-auto bg-green-100 text-black text-sm rounded-sm p-2 gap-x-2">
            <span class="bg-slate-500 text-white p-4" >
                 {{ space?.controllers?.length }} Controller{{space?.controllers?.length == 1? '': 's'}}
            </span>
          <template v-for="controller in space?.controllers" :key="controller.id" class="device-status">
            <span v-for="device in controller.devices" :key="device.id" class="device-status">
                <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                    <div class="flex items-center justify-between mb-2">
                    <h2 class="text-lg font-semibold">{{ device.device_name }}</h2>
                    <span :class="{ 'bg-green-500': device.device_status === 'on', 'bg-red-500': device.device_status === 'off' }" class="text-white px-2 py-1 rounded-full text-xs font-semibold">{{ device.device_status }}</span>
                    </div>
                    <p class="text-sm text-gray-600">{{ device.device_type }}</p>
                </div>
            </span>
          </template>
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
  /* No additional styles needed if using Tailwind for all classes */
  </style>
