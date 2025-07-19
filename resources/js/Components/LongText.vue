<script setup>
import { ref,watch } from 'vue';
import CharacterCounter from './CharacterCounter.vue';

const props = defineProps({
    label: String,
    placeholder: String,
    rows: {
        type: String,
        default: '3',
    },
    modelValue: [String,Number,Boolean],
    error: String,
    darkMode: Boolean,
    max: {
        type: Number,
        default: 1000
    },
    readOnly: Boolean,
    textAreaCounter: {
        type: Boolean,
        default: false
    },
});

const emit = defineEmits([
    'update:modelValue',
    'enter',
    'input',
    'focus',
    'blur'
]);

watch(
  () => props.modelValue,
  (value) => {
    input.value.value = value;
  }
)

const input = ref(null);
</script>

<template>
    <div class="w-full flex flex-col items-start gap-1">
        <CharacterCounter v-if="textAreaCounter" class="text-right"
            v-model="props.modelValue"
            :darkMode="darkMode"
            :max="max"/>

        <label v-if="label" class="label">{{ label }}</label>

        <div :class="error && 'ring-2 ring-red-400'" class="input-container">
            <textarea :readonly="readOnly" spellcheck="false" :rows="rows" ref="input" class="resize-none input appearance-none" :value="modelValue" @input="$emit('update:modelValue',$event.target.value); $emit('input')" :placeholder="placeholder" :maxlength="max"></textarea>
        </div>

        <small v-show="error" class="text-[0.6rem] text-red-500 pl-2">{{ error }}</small>
    </div>
</template>
