<script setup>
import { ref } from 'vue';

const props = defineProps({
    value: {
        type: Boolean,
        default: false
    }
});
const emit = defineEmits(['toggled']);

const enabled = ref(props.value);

const toggle = () => {
    enabled.value = !enabled.value;
    emit('toggled', enabled.value);
}
</script>

<template>
    <div @click="toggle" :class="enabled ? 'bg-primary-dark' : 'bg-[#E4E5EC]'" class="w-fit h-8 p-1 flex items-center justify-center rounded-3xl relative cursor-pointer transition-colors duration-300 ease-in-out">
        <div :class="enabled ? 'after:left-[1.5rem] after:bg-gray-100' : 'after:left-1 after:bg-gray-400'" class="w-12 h-full flex items-center rounded-3xl relative after:absolute after:content-[''] after:size-5 after:rounded-full after:transition-all after:duration-300 after:ease-in-out"></div>
    </div>
</template>
