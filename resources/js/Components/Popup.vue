<script setup>
import { ref } from 'vue';

const props = defineProps({
    title: {
        type: String,
        default: 'Some Title'
    },
    dismissible: {
        type: Boolean,
        default: true,
    },
});

const visible = ref(false);


const hide = () => {
    if(props.dismissible){
        visible.value = false;
    }
}

const show = () => {
    visible.value = true;
}


defineExpose({
    hide,
    show
});

</script>

<template>
    <Teleport to="body">
        <div v-if="visible" class="w-screen h-screen fixed left-0 top-0 z-[60] flex items-center justify-center bg-black/50">
            <div class="w-full mx-4 max-w-md min-h-[8rem] rounded bg-white trans shadow-lg p-4 md:p-6 space-y-6">
                <header class="w-full flex items-center justify-between">
                    <p class="text-lg font-medium">{{ title }}</p>

                    <button @click="hide()" :disabled="!dismissible" class="p-1 md:p-2 rounded flex justify-center items-center cursor-pointer bg-[#F3F3F5]">
                        <Icon name="close" class="size-5 text-primary-200" />
                    </button>
                </header>
                <div class="w-full p-0.5 min-h-[8rem] max-h-full md:max-h-[32rem] mb-4 overflow-y-auto scrollbar-hide lg:scrollbar-default">
                    <slot/>
                </div>
                <div class="w-full max-h-14 flex items-center justify-end gap-x-2">
                    <slot name="footer"/>
                </div>
            </div>
        </div>
    </Teleport>
</template>
