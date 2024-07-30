<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    iconName: {
        type: String,
        required: true,
    },
    classNames: {
        type: String,
        default: null,
    },
    color: {
        type: String,
        default: null,
    },
    size: {
        type: [Number, String],
        default: null,
    },
});
</script>


<template>
        <template v-if="iconName === 'ppd-controller'">
            🕹️
        </template>
        <template v-else-if="iconName === 'ppd-device'">
            🔌
        </template>
        <template v-else-if="iconName === 'ppd-pet'">
            🐹
        </template>
        <template v-else-if="iconName === 'ppd-space'">
            ⏹
        </template>
        <template v-else-if="iconName === 'ppd-doc'">
            ⛑
        </template>
        <template v-else-if="iconName === 'ppd-dashboard'">
            📊
        </template>
</template>
