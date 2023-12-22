<script setup>
import { ref } from 'vue';
import { defineProps } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

const showingNavigationDropdown = ref(false);

const { categories } = defineProps(['categories']);

</script>

<template>
    <Header :categories="categories" />
    <main>
        <p class=" container px-[80px] mx-auto text-justify py-10">Lorem ipsum dolor sit amet, consectetur adipisicing
            elit.
            Molestias
            nostrum vero,
            quaerat explicabo qui ex
            quisquam impedit iste veritatis dolore cupiditate reprehenderit inventore dolorem tenetur vel minus, earum
            delectus nulla.
            Mollitia architecto sed perferendis obcaecati eos atque et praesentium hic voluptatibus numquam nisi eius,
            cupiditate, in fugiat unde sit optio, debitis quisquam nihil aliquam? Ullam a voluptatum accusamus dolore
            corporis.
        </p>
    </main>
    <Footer />
</template>