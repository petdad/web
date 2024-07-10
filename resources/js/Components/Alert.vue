<template>
    <div :class="alertClasses">
        <div class="flex items-center">
            <div class="px-4 py-3">
                <div class="text-lg font-bold">{{ type }}</div>
                <div class="text-sm">{{ message }}</div>
            </div>
            <div class="ml-auto">
                <button
                    @click="closeAlert"
                    class="text-gray-500 hover:text-gray-700"
                >
                    <svg
                        class="h-6 w-6 fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 6.36 5.652a.5.5 0 0 0-.707.707L9.293 10l-3.64 3.64a.5.5 0 0 0 .707.707L10 10.707l3.64 3.64a.5.5 0 0 0 .707-.707L10.707 10l3.64-3.64a.5.5 0 0 0 0-.707z"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        type: { type: String, required: true },
        message: { type: String, required: true },
    },
    computed: {
        alertClasses() {
            return {
                'bg-blue-100 border-blue-500 text-blue-900':
                    this.type === 'info',
                'bg-yellow-100 border-yellow-500 text-yellow-900':
                    this.type === 'warning',
                'bg-red-100 border-red-500 text-red-900': this.type === 'error',
            };
        },
    },
    methods: {
        closeAlert() {
            this.$emit('close');
        },
    },
};
</script>

<style>
.alert {
    border-width: 1px;
    border-radius: 0.25rem;
    padding: 0.75rem;
    margin-bottom: 1rem;
}
</style>
