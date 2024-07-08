<template>
    <AuthenticatedLayout>
        <SpaceList :spaces="spaces.data" default-display='none'/>
        <div class="flex space-x-2 mx-5 justify-center">

    <button v-if="previousLink.url"
            :class="{ 'bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded': !previousLink.active, 'bg-gray-300 text-gray-600 px-4 py-2 rounded cursor-not-allowed': previousLink.active }">
      <div v-html="previousLink.label"></div>
    </button>

    <button v-for="link in spaces.links"
            :key="link.label"
            :class="{ 'bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded': link.active, 'bg-gray-300 text-gray-600 px-4 py-2 rounded cursor-not-allowed': !link.active }"
            @click="navigateTo(link.url)">
        <div v-html="link.label"></div>
    </button>

    <!-- Next button -->
    <button v-if="nextLink.url"
            :class="{ 'bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded': !nextLink.active, 'bg-gray-300 text-gray-600 px-4 py-2 rounded cursor-not-allowed': nextLink.active }">
        <div v-html="nextLink.label"></div>
    </button>
  </div>
    </AuthenticatedLayout>
</template>
<script setup>
import SpaceList from "@/Components/SpaceList.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    spaces: Array
});

const navigateTo = (url) => {
  console.log("Navigating to", url);
};

const previousLink = props.spaces.links.find(link => link.label === "&laquo; Previous");
const nextLink = props.spaces.links.find(link => link.label === "Next &raquo;");

</script>
