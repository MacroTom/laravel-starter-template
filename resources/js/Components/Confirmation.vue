<script setup>
import { ref } from 'vue';

defineProps({
    processing: {
        type: Boolean,
        default: false
    }
});

const show = ref(false);

const title = ref('Confirmation');
const message = ref('This is the confirmation message, do you want to perform this action ?');

const close = () => {
    show.value = false;
}

const proceedButton = ref({});
const cancelButton = ref({});

const ButtonTypes = {
    success: 'bg-primary dark:primary-dark',
    error: 'bg-[#FB583A]'
}

const trigger = (heading, body, proceed = {text: 'Proceed', action: () => {}}, cancel = {text: 'Cancel', action: () => {}}) => {
    title.value = heading;
    message.value = body;
    proceedButton.value = proceed;
    cancelButton.value = cancel;
    show.value = true;
}

defineExpose({
    close,
    trigger,
});
</script>

<template>
    <Teleport to="body">
        <div v-if="show" class="w-screen h-screen fixed left-0 top-0 z-[65] flex items-center justify-center bg-black/60 backdrop-blur-sm">
            <div class="w-full mx-4 max-w-md min-h-[8rem] rounded-lg bg-white trans shadow-lg pb-4 pt-2 space-y-4 relative">
                <header class="w-full h-14 px-4 md:px-6 flex items-center justify-center">
                    <p class="text-lg font-semibold">{{ title }}</p>
                    <button @click="close" class="btn absolute top-4 right-4">
                        <Icon name="close" class="w-5 h-5 text-icon dark:text-icon-dark"/>
                    </button>
                </header>
                <div class="w-full min-h-[4rem] max-h-[25rem] overflow-y-auto scrollbar-hide md:scrollbar-default px-4 md:px-6">
                    <p class="text-center trans">{{ message }}</p>
                </div>
                <div class="w-full max-h-14 px-4 md:px-6 flex items-center justify-end gap-x-4">
                    <button @click="cancelButton?.action(); close()" class="btn btn-lg secondary flex-1">{{ cancelButton?.text || 'Cancel' }}</button>
                    <button @click="proceedButton?.action(); close()" :disabled="processing" :class="proceedButton.type ? ButtonTypes[proceedButton.type] : ButtonTypes['error']" class="btn btn-lg text-white flex-1 trans">{{ proceedButton?.text || 'Proceed' }}</button>
                </div>
            </div>
        </div>
    </Teleport>
</template>
