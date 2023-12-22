<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import MainLayout from '@/Layouts/MainLayout.vue';

const { categories } = defineProps(['categories']);
</script>

<template>
    <Head title="Home" />

    <MainLayout :categories="categories" />
</template>

<style></style>
