<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head title="Forgot Password" />

        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset
            link that will allow you to choose a new one.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="bg-green-500 rounded-lg p-6">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div v-if="!$page.props.is_demo" class="flex items-center justify-end mt-4">

                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="$page.props.is_demo || form.processing">

                    Email Password Reset Link
                </PrimaryButton>
            </div>
            <div v-if="$page.props.is_demo" class="mb-4 font-medium text-sm text-blue-600">
                THIS IS DEMO VERSION: REGISTRATION, RESET PASSWORD NOT ALLOWED. GOTO LOGIN PAGE TO LOGIN WITH DEMO CREDENTIALS
            </div>
        </form>
    </GuestLayout>
</template>
