<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
    label: String,
    checked: {
        type: Boolean,
        default: false
    },
    value: {
        type: [Boolean, String, Number, null],
        default: false
    },
    error: String,
    disabled: {
        type: Boolean,
        default: false
    },
});

const emit = defineEmits(['change']);

const selected = ref(props.checked);

const toggle = () => {
    if(props.disabled) return;
    
    if(typeof props.value === 'boolean'){
        selected.value = !selected.value;
        emit('change', selected.value);
    }
    else{
        emit('change', props.value);
    }
}

watch(
  () => props.checked,
  (value) => {
    selected.value = value;
  }
)
</script>

<template>
    <div class="w-fit">
        <div class="flex items-center gap-2">
            <div @click="toggle" :class="selected ? 'bg-primary outline-primary' : 'bg-transparent outline-(--border-color)'" class="w-3.5 h-3.5 trans rounded flex justify-center items-center lg:cursor-pointer outline-2">
                <Icon name="tick" :class="selected ? 'text-white' : 'text-transparent'" class="size-5"/>
            </div>
            <label @click="toggle" v-if="label || $slots.default" class="lg:cursor-pointer label text-sm text-neutral-600">
                <span v-if="$slots.default">
                    <slot/>
                </span>
                <span v-if="!$slots.default">
                    {{ label }}
                </span>
            </label>
        </div>
        <small v-show="error" class="text-[0.6rem] text-red-500 pl-2">{{ error }}</small>
    </div>
</template>