<script setup>
import { ref, watch, computed } from 'vue';

import Icon from './Icon.vue';

const props = defineProps({
    type: String,
    label: String,
    placeholder: String,
    modelValue: [String,Number],
    error: String,
    darkMode: Boolean,
    max: {
        type: Number,
        default: 1000
    },
    readOnly: Boolean,
    background: {
        type: String,
        default: 'bg-transparent'
    },
    border: {
        type: String,
        default: 'rounded-lg'
    },
    padding: {
        type: String,
        default: 'p-2.5'
    },
    copyButtonStyles: {
        type: String,
        default: 'absolute right-1 rounded-lg bg-[#0C4592] text-white px-2 py-1'
    },
    copyInputStyles: {
        type: String,
        default: ''
    },
    copyText: {
        type: String,
        default: null
    },
    min: {
        type: Number,
        default: 0
    },
});

const emit = defineEmits(['update:modelValue','enter','input','focus', 'blur', 'keyup']);

const dateValue = ref(new Date());

watch(
  () => props.modelValue,
  (value) => {
    input.value.value = value;
  }
)


const input = ref(null);

const inputType = ref(props.type);

const toggle = () => {
    if(inputType.value === 'password'){
        inputType.value = 'text';
    }
    else{
        inputType.value = 'password';
    }
    input.value.type = inputType.value;
}

const copyToClipboard = () => {
    // Select the text field
    input.value.select();
    input.value.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(input.value.value);
}

</script>

<template>
    <div class="w-full flex flex-col items-start gap-1">
        <label v-if="label" class="label">{{ label }}</label>
        <div :class="error && 'ring-2 ring-red-400'" class="w-full relative flex items-center input-container">
            <input :readonly="true" spellcheck="false" v-if="type === 'copy'" ref="input" @keyup.enter="$emit('enter')" type="text" :class="error && 'ring-2 ring-red-400', copyInputStyles" class="w-full input number appearance-none" :value="modelValue" @input="$emit('update:modelValue',$event.target.value); $emit('input')" :placeholder="placeholder" :maxlength="max"/>
            <button type="button" @click="copyToClipboard" v-if="type === 'copy'" :class="copyButtonStyles">
                <i class="bx bx-copy"></i>
                <span>{{ copyText || '' }}</span>
            </button>

            <input class="w-full input number appearance-none" :readonly="readOnly" spellcheck="false" v-else-if="['number','text','password','email', 'tel'].includes(type)" ref="input" @keyup="$emit('keyup')" @keyup.enter="$emit('enter')" @focus="$emit('focus')" @blur="$emit('blur')" :type="type" :value="modelValue" @input="$emit('update:modelValue',$event.target.value); $emit('input')" :placeholder="placeholder" :maxlength="max" :min="min"/>
            <button type="button" @click="toggle" v-if="type === 'password'" class="absolute right-4">
                <Icon :class="darkMode && 'text-icon dark:text-icon-dark'" class="w-4 h-4" :name="inputType === 'password' ? 'eye' : 'eye-slash'"/>
            </button>
        </div>
        <small v-show="error" class="text-[0.6rem] text-red-500 pl-2">{{ error }}</small>
    </div>
</template>
