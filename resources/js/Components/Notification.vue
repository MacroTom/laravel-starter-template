<script setup>
import { onMounted, onBeforeUnmount, reactive } from 'vue';
import { store } from '@/Stores/notification.js';

const props = defineProps({
    notification: Object,
});

const state = reactive({
    progress: 100,
    width: null,
    timer: null,
    timeOut: null
});

onBeforeUnmount(() => {
    clearTimers();
});

const clearTimers = () => {
    if(state.timer && state.timeOut){
        clearInterval(state.timer);
        clearTimeout(state.timeOut);
    }
}

const startProgress = () => {
    const speed = 120;
    const width = document.querySelector('body')?.clientWidth;
    const clipWidth = width > 384 ? 384 : width;
    const px = (clipWidth / props.notification?.duration) * speed;
    const percent = (px / clipWidth) * 100;

    state.timer = setInterval(() => {
        state.progress -= percent;
    }, speed);

    state.timeOut = setTimeout(() => {
        clearInterval(state.timer);
        store.deleteNotification(props.notification?.uid);
    }, props.notification?.duration);
}

onMounted(() => {
    startProgress();
});
</script>

<template>
    <!-- notification container -->
    <div class="w-full h-fit py-2 rounded shadow-lg bg-white relative">
        <!-- content -->
        <div class="w-full h-full p-2 flex items-center">
            <!-- icon -->
            <!-- <Icon class="text-primary size-5" name="bell"/> -->

            <!-- message -->
            <div class="w-full h-full pl-2 flex flex-col items-start justify-center">
                <small :class="notification?.type === 'success' ? 'text-green-600' : 'text-red-400'" class="text-xs font-medium">{{ notification?.type === 'success' ? 'Operation completed' : 'An error has occurred' }}</small>
                <p class="text-neutral-600">{{ notification?.message }}</p>
            </div>

            <!-- close -->
            <button @click="store.deleteNotification(notification?.uid); clearTimers()" class="btn h-full flex items-center shrink-0 px-2 border-l border-(--border-color) text-slate-400 hover:text-slate-600">
                <Icon class="size-4" name="close"/>
            </button>
        </div>

        <!-- progress bar -->
        <div :style="`width: ${state.progress}%`" class="h-1 bg-primary absolute left-0 bottom-0 md:top-[initial] trans"></div>
    </div>
</template>