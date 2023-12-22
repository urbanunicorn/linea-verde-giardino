<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

const { categories } = defineProps(['categories']);
</script>

<template>
    <header class="bg-white text-black">
        <div class="container px-[80px] mx-auto">

            <!-- UPPER HEADER -->
            <div id="upper-header"
                class="flex justify-around py-[8px] border-b-2 border-solid border-gray-300 items-center">
                <div class="flex items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/220px-Flag_of_Italy.svg.png"
                        alt="italy_flag">
                    <p class="ps-1 uppercase text-xs text-gray-500">italiano</p>
                </div>
                <p class="uppercase text-xs text-gray-500">prodotti 100% originali</p>
                <p class="uppercase text-xs text-gray-500">reso facile</p>
                <p class="uppercase text-xs text-gray-500">pagamento sicuro</p>
            </div>

            <!-- MIDDLE HEADER -->
            <div id="middle-header" class="flex justify-around items-center">

                <!-- MIDDLE - FIRST HALF -->
                <div id="logo-container" class="basis-6/12 py-3">
                    <img id="logo" src="images/logo.svg" alt="LineaVerde">
                </div>

                <!-- MIDDLE - SECOND HALF -->
                <div class="flex justify-around items-center basis-6/12 ps-16">

                    <!-- SEARCHBAR -->
                    <form action="/search" class="w-[350px] w-full px-4">
                        <div class="relative">
                            <input type="text" name="q"
                                class="w-full h-10 shadow p-4 rounded-full outline-none focus:border-lime-500 focus:border-2 focus:outline-none"
                                placeholder="Cerca">
                            <button type="submit">
                                <svg class="text-green-500 h-5 w-5 absolute top-2.5 right-3 fill-current"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                    style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                    <path
                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </form>

                    <div>
                        <a href="#"
                            class="font-bold text-black px-5 hover:text-green-500 transition ease-in-out duration-150"><i
                                class="material-symbols-outlined text-4xl pt-2">shopping_cart</i></a>
                    </div>

                    <!-- LOGIN / REGISTER -->
                    <div v-if="$page.props.auth.user">
                        <div
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center py-2 border border-transparent leading-4 font-medium rounded-md text-black hover:text-green-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ms-1 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                    </div>

                    <template v-else class="flex justify-around">
                        <Link :href="route('login')" class="font-bold text-black hover:text-green-500 pe-2">
                        Accedi</Link>

                        <Link :href="route('register')" class="font-bold text-black hover:text-green-500 ps-2">
                        Registrati</Link>
                    </template>
                </div>
            </div>

            <!-- LOWER HEADER -->
            <div id="lower-header" class="flex w-full px-12">
                <ul class="flex justify-around w-full text-xl mb-1">
                    <li v-for="category in categories" :key="category.id">
                        <a href="#"
                            class="font-bold py-1 hover:text-green-500 hover:border-b-4 hover:border-green-500 transition ease-in-out duration-150">{{
                                category.name }}</a>
                    </li>
                </ul>
            </div>

        </div>
    </header>
</template>

<style lang="scss" scoped>
header {
    position: sticky;
    top: 0;
    right: 0;
    left: 0;
}

#upper-header {
    img {
        height: 15px;
        width: 25px;
    }

    p {
        font-size: 11px;
    }
}

#logo {
    height: 108px;
    width: 347px;
    object-fit: cover;
    cursor: pointer;
}
</style>