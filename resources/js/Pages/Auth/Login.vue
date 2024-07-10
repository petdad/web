<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

const insertDemoCred = () => {
    form.email = 'demo@petdad.juborajnaofel.xyz';
    form.password = 'password';
}
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div v-if="$page.props.is_demo">
            This is demo credential for this demo version:

            <div class="overflow-x-auto my-2">
                <table class="min-w-full bg-white border border-gray-200">
                    <tr>
                        <td class="px-3 py-4 whitespace-nowrap border-b border-gray-200">Email: </td>
                        <td class="px-3 py-4 whitespace-nowrap border-b border-gray-200">demo@petdad.juborajnaofel.xyz</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-4 whitespace-nowrap border-b border-gray-200">Password: </td>
                        <td class="px-3 py-4 whitespace-nowrap border-b border-gray-200">password</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-4 whitespace-nowrap border-b border-gray-200" colspan="2">
                            <button type="button" class="rounded-md bg-slate-700 text-white p-2" @click="insertDemoCred"> Insert in Form </button>
                        </td>
                    </tr>
                </table>
            </div>
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

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
