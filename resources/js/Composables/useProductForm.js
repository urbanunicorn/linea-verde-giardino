import { ref } from "vue";
import axios from "axios";

export function useProductForm() {
    const product = ref({
        subcategory_id: "",
        title: "",
        description: "",
        price: "",
        brand: "",
        dimension: "",
        weight: "",
        is_on_sale: false,
        discount: "",
        sale_start_date: "",
        sale_end_date: "",
        is_visible: false,
    });

    const images = ref([]);
    const serverErrors = ref({});
    const successMessage = ref("");

    function handleImageUpload(event) {
        images.value = event.target.files;
    }

    async function handleSubmit() {
        const formData = new FormData();
        for (const key in product.value) {
            formData.append(key, product.value[key]);
        }

        for (let i = 0; i < images.value.length; i++) {
            formData.append(`images[${i}]`, images.value[i]);
        }

        try {
            const response = await axios.post("/api/products", formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            });
            console.log(response.data);
            successMessage.value = "Product created successfully!";
        } catch (error) {
            if (error.response) {
                console.error(
                    "Server responded with an error:",
                    error.response.data
                );

                if (error.response.data.errors) {
                    serverErrors = error.response.data.errors;
                }
            } else if (error.request) {
                console.error("No response received:", error.request);
            } else {
                console.error("Error setting up request:", error.message);
            }
        }
        return {
            product,
            images,
            serverErrors,
            successMessage,
            handleImageUpload,
            handleSubmit,
        };
    }
}
