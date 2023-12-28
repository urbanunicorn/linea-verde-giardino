<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";

// Receive the product as a prop from Inertia/Laravel
const props = defineProps(["product"]);

const product = ref(props.product); // Local reactive copy of the product
const images = ref([]);
const serverErrors = ref({});
const successMessage = ref("");

// Function to handle image uploads
function handleImageUpload(event) {
    images.value = event.target.files;
}

// Function to submit the form
async function handleSubmit() {
    const formData = new FormData();
    for (const key in product.value) {
        formData.append(key, product.value[key]);
    }

    for (let i = 0; i < images.value.length; i++) {
        formData.append(`images[${i}]`, images.value[i]);
    }

    try {
        // Assuming your backend endpoint to update the product
        await Inertia.post(`/api/products/${product.value.id}`, formData, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        });
        successMessage.value = "Product updated successfully!";
    } catch (error) {
        if (error.response) {
            console.error(
                "Server responded with an error:",
                error.response.data
            );
            if (error.response.data.errors) {
                serverErrors.value = error.response.data.errors;
            }
        } else if (error.request) {
            console.error("No response received:", error.request);
        } else {
            console.error("Error setting up request:", error.message);
        }
    }
}

// Fetch subcategories if needed
const subcategories = ref([]);

onMounted(async () => {
    try {
        const response = await axios.get("/api/subcategories");
        subcategories.value = response.data;
    } catch (error) {
        console.error("Error fetching subcategories:", error);
    }
});
</script>

<template>
    <div class="container mx-auto max-w-2xl">
        <form @submit.prevent="handleSubmit">
            <!-- Display error or success messages -->

            <div v-if="successMessage" class="success-message">
                {{ successMessage }}
            </div>

            <div v-if="Object.keys(serverErrors).length" class="error-messages">
                <div v-for="(messages, field) in serverErrors" :key="field">
                    <strong>{{ field }}:</strong>
                    <ul>
                        <li v-for="message in messages" :key="message">
                            {{ message }}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Actual form -->
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Product Information
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Enter details about the product.
                    </p>

                    <div
                        class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"
                    >
                        <!-- Title -->
                        <div class="sm:col-span-full">
                            <label
                                for="title"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Title</label
                            >
                            <input
                                type="text"
                                id="title"
                                v-model="product.title"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>

                        <!-- Subcategory ID -->
                        <div class="sm:col-span-full">
                            <label
                                for="subcategory"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Subcategory</label
                            >
                            <select
                                id="subcategory"
                                v-model="product.subcategory_id"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >
                                <option
                                    v-for="subcategory in subcategories"
                                    :value="subcategory.id"
                                    :key="subcategory.id"
                                >
                                    {{ subcategory.name }}
                                </option>
                            </select>
                        </div>

                        <!-- Description -->
                        <div class="sm:col-span-full">
                            <label
                                for="description"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Description</label
                            >
                            <textarea
                                id="description"
                                v-model="product.description"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                rows="3"
                            ></textarea>
                        </div>

                        <!-- Price -->
                        <div class="sm:col-span-2">
                            <label
                                for="price"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Price</label
                            >
                            <input
                                type="number"
                                id="price"
                                v-model="product.price"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                        <!-- Dimension -->
                        <div class="sm:col-span-2">
                            <label
                                for="dimension"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Dimension</label
                            >
                            <input
                                type="text"
                                id="dimension"
                                v-model="product.dimension"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>

                        <!-- Weight -->
                        <div class="sm:col-span-2">
                            <label
                                for="weight"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Weight</label
                            >
                            <input
                                type="text"
                                id="weight"
                                v-model="product.weight"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>

                        <!-- Is On Sale -->
                        <div class="sm:col-span-full">
                            <label
                                for="is-on-sale"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Is On Sale</label
                            >
                            <input
                                type="checkbox"
                                id="is-on-sale"
                                v-model="product.is_on_sale"
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                            />
                        </div>

                        <!-- Discount -->
                        <div class="sm:col-span-2">
                            <label
                                for="discount"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Discount</label
                            >
                            <input
                                type="text"
                                id="discount"
                                v-model="product.discount"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>

                        <!-- Sale Start Date -->
                        <div class="sm:col-span-2">
                            <label
                                for="sale-start-date"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Sale Start Date</label
                            >
                            <input
                                type="date"
                                id="sale-start-date"
                                v-model="product.sale_start_date"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>

                        <!-- Sale End Date -->
                        <div class="sm:col-span-2">
                            <label
                                for="sale-end-date"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Sale End Date</label
                            >
                            <input
                                type="date"
                                id="sale-end-date"
                                v-model="product.sale_end_date"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>

                        <!-- Is Visible -->
                        <div class="sm:col-span-full">
                            <label
                                for="is-visible"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Is Visible</label
                            >
                            <input
                                type="checkbox"
                                id="is-visible"
                                v-model="product.is_visible"
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                            />
                        </div>
                        <!-- Image Upload Section -->
                        <div class="col-span-full">
                            <label
                                for="images"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Product Images</label
                            >
                            <input
                                type="file"
                                id="images"
                                multiple
                                @change="handleImageUpload"
                                class="block w-full text-sm text-gray-900 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-white file:text-indigo-700 hover:file:bg-indigo-50"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-6 flex items-center justify-end gap-x-6">
                <button
                    type="button"
                    class="text-sm font-semibold leading-6 text-gray-900"
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    Save
                </button>
            </div>
        </form>
    </div>
</template>

<style>
.error-messages {
    margin-top: 1rem;
    padding: 1rem;
    background-color: #ffebe6;
    border: 1px solid #ff0000;
    color: #ff0000;
    border-radius: 5px;
}

.error-messages ul {
    list-style: none;
    padding: 0;
}
</style>
