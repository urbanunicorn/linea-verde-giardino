<script setup>
import { ref } from 'vue';
import { defineProps } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

import ControlPanel_Header from '@/Components/ControlPanel_Header.vue';
import ControlPanel_Footer from '@/Components/ControlPanel_Footer.vue';

</script>

<template >
    <body class="h-screen flex flex-col ">

        <ControlPanel_Header></ControlPanel_Header>

        <slot></slot>

        <ControlPanel_Footer class="grow flex items-end"></ControlPanel_Footer>
    </body>
</template>