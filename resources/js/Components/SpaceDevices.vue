<template>
    <div class="flex flex-wrap w-fullmt-1 rounded-md overflow-hidden">
      <div class="text-sm">
        <div class="flex flex-row overflow-auto bg-white text-black text-sm rounded-sm p-2 gap-x-2">
          <template v-for="controller in space?.controllers" :key="controller.id" class="device-status">
            <span class="bg-slate-500 text-white" >
                 {{ space?.controllers?.length }} Controllers
            </span>
            <span v-for="device in controller.devices" :key="device.id" class="device-status">
                {{ device.id }}
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
