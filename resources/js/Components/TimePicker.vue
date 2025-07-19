<script setup>
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';

defineProps({
    modelValue: String,
});

const emit = defineEmits(['picked']);

const pad = (value) => {
    return value.toString().padStart(2, "0");
}

const setModalValue = (value) => {
    const arr = value.map(time => {
        return `${pad(time.hours)}:${pad(time.minutes)}`;
    });

    emit('picked', arr.join('-'));
    // console.log(arr);
}
</script>

<template>
    <VueDatePicker
            @update:model-value="setModalValue"
            time-picker
            range
            :is-24="false"
        >
        <template #trigger>
            <slot/>
        </template>
    </VueDatePicker>
</template>
