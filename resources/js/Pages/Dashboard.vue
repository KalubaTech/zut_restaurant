<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <AuthenticatedLayout>
        <HomePage />
    </AuthenticatedLayout>
</template>
<script>
import HomePage from './HomePage.vue';

export default {
    name: 'MainComponent',  
    components: {
        HomePage
    }
}
</script>

