<template>
    <div class="max-w-full bg-white p-6 rounded shadow-md">
      <h2 class="text-lg font-semibold text-green-600 mb-4">Vaccination Logs</h2>

      <ul class="mb-4 space-y-2">
        <li v-for="(log, index) in vaccinationLogs" :key="index" class="flex items-center justify-between bg-gray-100 px-4 py-2 rounded-md">
          <span class="text-sm text-gray-600">{{ formatDate(log.created_at) }} - {{ log.vaccine_name }}</span>
          <button @click="deleteLog(index)" class="text-red-500 hover:text-red-700 focus:outline-none">Delete</button>
        </li>
      </ul>

      <form @submit.prevent="addLog" class="flex items-center space-x-2">
        <input v-model="newLog.administered_at" type="date" class="form-input" required>
        <input v-model="newLog.vaccine_name" type="text" placeholder="Vaccine Name" class="form-input" required>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Add Log</button>
      </form>
    </div>
  </template>

  <script setup>
  import { useForm, usePage } from '@inertiajs/vue3';
  import { defineProps } from 'vue';

  const props = defineProps({
    petId: Number,
    vaccinationLogs: Array,
  });

  const newLog = useForm({
    vaccine_name: '',
    petId: props.petId,
    administered_at: null
  });

  const addLog = () => {
    if(usePage().props.is_demo){
        alert('Insertion not allowed in demo. Contact juborajnaofel@gmail.com');
        return;
    }
    newLog.post(route('vaccination_logs.store'));
  };

  const deleteLog = (index) => {
    if(usePage().props.is_demo){
        alert('Deletion is not allowed in demo. Contact juborajnaofel@gmail.com');
        return;
    }
    props.vaccinationLogs.splice(index, 1);
    
    useForm().delete(route('vaccination_logs.destroy', { id: index }));
  };

  const formatDate = (dateString) => {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return new Date(dateString).toLocaleDateString(undefined, options);
  };
  </script>

  <style scoped>
  .form-input {
    padding: 0.75rem;
    border: 1px solid #e2e8f0;
    border-radius: 0.375rem;
    outline: none;
    transition: border-color 0.2s ease-in-out;
    width: 100%;
    max-width: 12rem;
  }

  .form-input:focus {
    border-color: #48bb78;
  }
  </style>
