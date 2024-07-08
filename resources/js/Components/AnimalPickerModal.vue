<template>
    <div class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center bg-black bg-opacity-50">
      <div class="bg-white rounded-lg shadow-lg p-4 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-lg font-bold">Choose an Animal Emoji</h2>
          <button @click="$emit('close')" class="text-gray-600 hover:text-gray-700">&times;</button>
        </div>
        <div class="grid grid-cols-4 gap-4">
          <span
            v-for="emoji in animalEmojis"
            :key="emoji.code"
            @click="selectEmoji(emoji)"
            class="emoji-item text-3xl cursor-pointer flex justify-center items-center p-3 rounded-lg hover:bg-gray-200"
            :title="emoji.name"
          >
            {{ emoji.symbol }}
          </span>
        </div>
      </div>
    </div>
  </template>

  <script setup>
const animalEmojis = [
  { code: 1, symbol: '🐶', name: 'Dog' },
  { code: 2, symbol: '🐱', name: 'Cat' },
  { code: 3, symbol: '🐭', name: 'Mouse' },
  { code: 4, symbol: '🐹', name: 'Hamster' },
  { code: 5, symbol: '🐰', name: 'Rabbit' },
  { code: 6, symbol: '🦊', name: 'Fox' },
  { code: 7, symbol: '🐻', name: 'Bear' },
  { code: 8, symbol: '🐼', name: 'Panda' },
  { code: 9, symbol: '🐨', name: 'Koala' },
  { code: 10, symbol: '🐯', name: 'Tiger' },
  { code: 11, symbol: '🦁', name: 'Lion' },
  { code: 12, symbol: '🐮', name: 'Cow' },
  { code: 13, symbol: '🐷', name: 'Pig' },
  { code: 14, symbol: '🐸', name: 'Frog' },
  { code: 15, symbol: '🐔', name: 'Chicken' },
  { code: 16, symbol: '🐧', name: 'Penguin' },
  { code: 17, symbol: '🐦', name: 'Bird' },
  { code: 18, symbol: '🐤', name: 'Baby Chick' },
  { code: 19, symbol: '🐣', name: 'Hatching Chick' },
  { code: 20, symbol: '🦅', name: 'Eagle' },
  { code: 21, symbol: '🦆', name: 'Duck' },
  { code: 22, symbol: '🦉', name: 'Owl' },
  { code: 23, symbol: '🦇', name: 'Bat' },
  { code: 24, symbol: '🐺', name: 'Wolf' },
  { code: 25, symbol: '🐗', name: 'Boar' },
  { code: 26, symbol: '🐴', name: 'Horse' },
  { code: 27, symbol: '🦄', name: 'Unicorn' },
  { code: 28, symbol: '🐝', name: 'Honeybee' },
  { code: 29, symbol: '🐛', name: 'Bug' },
  { code: 30, symbol: '🦋', name: 'Butterfly' },
  { code: 31, symbol: '🐌', name: 'Snail' },
  { code: 32, symbol: '🐞', name: 'Lady Beetle' },
  { code: 33, symbol: '🐜', name: 'Ant' },
  { code: 34, symbol: '🦗', name: 'Cricket' },
  { code: 35, symbol: '🕷️', name: 'Spider' },
  { code: 36, symbol: '🦂', name: 'Scorpion' },
  { code: 37, symbol: '🦀', name: 'Crab' },
  { code: 38, symbol: '🦑', name: 'Squid' },
  { code: 39, symbol: '🐙', name: 'Octopus' },
  { code: 40, symbol: '🦐', name: 'Shrimp' },
  { code: 41, symbol: '🐠', name: 'Tropical Fish' },
  { code: 42, symbol: '🐟', name: 'Fish' },
  { code: 43, symbol: '🐡', name: 'Blowfish' },
  { code: 44, symbol: '🐬', name: 'Dolphin' },
  { code: 45, symbol: '🦈', name: 'Shark' },
  { code: 46, symbol: '🐳', name: 'Spouting Whale' },
  { code: 47, symbol: '🐋', name: 'Whale' },
  { code: 48, symbol: '🐊', name: 'Crocodile' },
  { code: 49, symbol: '🐢', name: 'Turtle' },
  { code: 50, symbol: '🦎', name: 'Lizard' },
];
  const selectEmoji = (emoji) => {
    $emit('emoji-selected', emoji);
  };
  </script>
