<script setup>
import { store } from '@/Stores/notification.js';

import Notification from '@/Components/Notification.vue';
</script>

<template>
    <Teleport to="body">
        <div v-auto-animate class="w-full max-w-sm h-fit space-y-2 fixed z-[70] top-0 right-0 md:top-8 lg:top-6 md:right-6">
            <Notification 
                v-for="notification in store.notifications" 
                :key="notification.uid"
                :notification="notification"
            />
        </div>
    </Teleport>
</template>