<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
const { products } = defineProps(['products']);
</script>

<template>
    <Head title="Prodotti" />
    <AdminLayout>
        <slot>
            <main class="container px-[80px] mx-auto">
                <div class="container mx-auto flex justify-end">
                    <a :href="route('products.create')"
                        class=" flex justify-center items-center group h-12 w-48 overflow-hidden rounded-2xl bg-green-500 text-lg font-bold text-white right-0">
                        Nuovo Prodotto
                    </a>
                </div>
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5 container mx-auto ">
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Prodotto</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Visibile</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Prezzo</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Marca</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Sconto</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Prezzo Scontato</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            <tr v-for="product in products.data" class="hover:bg-gray-50">
                                <!-- Product -->
                                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                    <div class=" h-10 w-10">

                                        <!-- Product Image -->
                                        <img class="h-full w-full rounded-full object-cover object-center"
                                            :src="product.images[0].image_path" alt="" />

                                    </div>

                                    <!-- Product Name -->
                                    <div class="text-sm">
                                        <div class="font-medium text-gray-700">{{ product.title }}</div>
                                    </div>
                                </th>

                                <!-- Is Visible -->
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <span v-if="product.is_visible == 1" class=" py-4  text-green-600">
                                            Online
                                        </span>
                                        <span v-if="product.is_visible == 0" class=" py-4  text-red-600">
                                            Bozza
                                        </span>
                                    </div>
                                </td>

                                <!-- Price -->
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                        {{ product.price }}€
                                    </span>
                                </td>

                                <!-- Brand -->
                                <td class="px-6 py-4">{{ product.brand }}</td>

                                <!-- Is On Sale -->
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <span v-if="product.is_on_sale == 1" class=" py-4">
                                            Scontato
                                        </span>
                                        <span v-if="product.is_on_sale == 0" class=" py-4">
                                            Prezzo pieno
                                        </span>
                                    </div>
                                </td>

                                <!-- Discount -->
                                <td class="px-6 py-4">
                                    <span v-if="product.is_on_sale == 1"
                                        class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                                        {{ product.discount }}€
                                    </span>
                                </td>
                                <!-- Icon -->
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-4">
                                        <!-- Delete -->
                                        <a x-data="{ tooltip: 'Delete' }" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                                x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </a>

                                        <!-- Edit -->
                                        <a x-data="{ tooltip: 'Edite' }" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                                x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Paginate -->
                <div class="container mx-auto mb-20 flex justify-end">
                    <div class="flex select-none space-x-1 text-gray-700 ">
                        <a :href="products.prev_page_url"
                            class="rounded-md bg-gray-200 px-4 py-2 transition duration-300 hover:bg-gray-400 ">
                            Previous
                        </a>
                        <a :href="products.next_page_url"
                            class="rounded-md bg-gray-200 px-4 py-2 transition duration-300 hover:bg-gray-400"> Next
                        </a>
                    </div>
                </div>
            </main>
        </slot>
    </AdminLayout>
</template>

<style></style>
