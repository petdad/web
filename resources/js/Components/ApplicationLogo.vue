<template>
    <svg xmlns="http://www.w3.org/2000/svg" :height="height" viewBox="0 0 200 240">
        <!-- Background Circle -->
        <circle cx="100" cy="100" r="90" fill="#34D399" />

        <!-- Head -->
        <circle cx="100" cy="80" r="50" fill="#10B981" />

        <!-- Ears -->
        <path d="M75,60 Q65,40 55,60" stroke="#065F46" stroke-width="5" fill="none" />
        <path d="M125,60 Q135,40 145,60" stroke="#065F46" stroke-width="5" fill="none" />

        <!-- Eyes -->
        <circle cx="80" cy="75" r="8" fill="#065F46" />
        <circle cx="120" cy="75" r="8" fill="#065F46" />
        <circle cx="82" cy="73" r="3" fill="#FFF" />
        <circle cx="118" cy="73" r="3" fill="#FFF" />

        <!-- Nose -->
        <circle cx="100" cy="90" r="5" fill="#065F46" />

        <!-- Mouth -->
        <path d="M95,105 Q100,115 105,105" stroke="#065F46" stroke-width="2" fill="none" />

        <!-- Body -->
        <ellipse cx="100" cy="160" rx="70" ry="50" fill="#10B981" />

        <!-- Legs -->
        <rect x="60" y="150" width="20" height="30" fill="#065F46" />
        <rect x="120" y="150" width="20" height="30" fill="#065F46" />

        <!-- Tail -->
        <path d="M150,160 Q170,140 180,160" stroke="#065F46" stroke-width="5" fill="none" />

        <!-- Text "PetDad" -->
        <text x="50" y="220" font-family="Arial, sans-serif" font-size="30" fill="#065F46">
            PetDad
        </text>
    </svg>
</template>
<script setup>
const props = defineProps({
    height: String
})
</script>
