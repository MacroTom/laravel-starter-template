<script setup>
import { ref, watch, computed } from 'vue';
import moment from 'moment';
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';

const props = defineProps({
    label: String,
    placeholder: String,
    modelValue: [String,Number,Boolean],
    error: String,
    darkMode: Boolean,
    formatDate: {
        type: String,
        default: 'yy-MM-DD'
    },
    readOnly: Boolean,
    disableDates: {
        type: Boolean,
        default: false
    },
    dateSwipe: {
        type: Boolean,
        default: false
    },
    dateScroll: {
        type: Boolean,
        default: false
    },
});

const emit = defineEmits(['update:modelValue','enter','input','focus', 'blur']);

const dateValue = ref(new Date());

watch(
  () => props.modelValue,
  (value) => {
    input.value.value = value;
  }
)


const input = ref(null);

const formatDate = (value,format='yy-MM-DD') => {
    return moment(value).format(format);
};

const setModalValue = (value) => {
    let formatted = formatDate(value,props.formatDate);
    dateValue.value = formatted;
    emit('update:modelValue', formatted);
    emit('input', formatted);
}

const date = ref(new Date());

const disabledDates = computed(() => {
  const today = new Date();
  const disabledDates = [];

  // Calculate the earliest allowed date (e.g., 30 days in the past)
  const earliestAllowedDate = new Date(today);
  earliestAllowedDate.setDate(today.getDate() - 30); // Adjust this number as needed

  // Generate an array of disabled dates from yesterday to the earliest allowed date
  let currentDate = new Date(today);
  currentDate.setDate(currentDate.getDate() - 1); // Start from yesterday
  while (currentDate >= earliestAllowedDate) {
    disabledDates.push(new Date(currentDate));
    currentDate.setDate(currentDate.getDate() - 1); // Move to the previous day
  }

  return props.disableDates ? disabledDates : [];
});
</script>

<style scoped>
input{
    @apply bg-transparent text-sm
}
</style>

<template>
    <div class="w-full flex flex-col items-start gap-1">
        <label v-if="label" :class="darkMode && 'dark:text-dark'" class="text-xs text-writing dark:text-writing-dark">{{ label }}</label>
        <div class="w-full relative flex items-center">
            <VueDatePicker textInput @update:model-value="setModalValue" :format="formatDate" :preview-format="formatDate" v-model="dateValue" :enable-time-picker="false" :disable-month-year-select="disableDates" hide-offset-dates auto-apply :month-change-on-scroll="dateScroll" :disabled-week-days="disableDates ? [6, 0] : []" :disabled-dates="disabledDates" :no-swipe="dateSwipe">
                <template #trigger>
                    <input spellcheck="false" ref="input" type="text" :class="error && 'ring-2 ring-red-400', darkMode && 'dark:border-border-dark dark:focus:border-transparent dark:focus:ring-2 dark:text-dark dark:ring-primary-dark'" class="w-full bg-transparent border focus:ring-2 ring-primary outline-none p-2.5 rounded-lg placeholder:text-xs placeholder:font-light" :value="modelValue" @input="$emit('update:modelValue',$event.target.value)" :placeholder="placeholder"/>
                </template>
            </VueDatePicker>
            <button type="button" @click="input.click()" class="absolute right-4">
                <i class="bx bx-calendar text-primary-dark text-lg"></i>
            </button>
        </div>
        <small v-show="error" class="text-[0.6rem] text-red-500 pl-2">{{ error }}</small>
    </div>
</template>
