<script setup>
import { ref, computed, onMounted, watch } from 'vue';
import { Combobox, ComboboxInput, ComboboxOptions, ComboboxOption, ComboboxButton, TransitionRoot } from '@headlessui/vue';

const props = defineProps({
    label: String,
    placeholder: String,
    modelValue: [String,Number,Boolean,Object],
    error: String,
    options: Array,
    keys: {
        type: Object,
        default: {
            label: 'name',
            value: null,
        }
    },
    readOnly: Boolean,
    autoClearSelectedOption: Boolean
});

const emit = defineEmits([
    'update:modelValue',
    'enter',
    'change',
    'focus',
    'blur',
    'input',
]);

const selectedOption = ref(null);

watch(
    () => props.modelValue,
    (value) => {
        selectedOption.value = populateOption();
    }
);

watch(
    () => props.options,
    (value) => {
        selectedOption.value = populateOption();
    }
);

const query = ref('');

const filteredOptions = computed(() =>
    query.value === ''
    ? props?.options
    : props?.options?.filter((option) => {
        if(typeof option === 'string'){
            return option.toLowerCase().includes(query.value.toLowerCase())
        }
        return option[props?.keys?.label]
            .toLowerCase()
            .replace(/\s+/g, '')
            .includes(query.value.toLowerCase().replace(/\s+/g, ''));
    })
);

const DisplayValue = (option, hide=false) => {
    if(option === null || hide){
        return '';
    }

    if(typeof option !== 'object'){
        return option;
    }

    return option[props?.keys?.label];
}

const sendEmits = (option) => {
    if(option !== null){
        let value = 'value' in props?.keys ? option[props?.keys.value] : option;

        emit('update:modelValue', value);

        emit('change', value);

        props.autoClearSelectedOption && (selectedOption.value = null);
    }
}

const populateOption = () => {

    if(props.modelValue === null){
        return '';
    }

    if(typeof props.options !== 'object'){
        return props.modelValue;
    }

    if('value' in props.keys){
        const result = props.options.find(option => option[props?.keys.value] === props.modelValue);
        return result === undefined ? props.modelValue : result;
    }

    return props.modelValue;
}

onMounted(() => (selectedOption.value = populateOption()));
</script>

<template>
    <div class="w-full flex flex-col items-start gap-1">
        <label v-if="label" class="label">{{ label }}</label>
        <Combobox v-model="selectedOption" @update:modelValue="sendEmits($event)" class="w-full" nullable>
            <div class="relative mt-1">
                <div :class="error && 'ring-2 ring-red-400'" class="cursor-default input-container">
                    <ComboboxInput class="input leading-5" @blur="query !== '' && (query = '')" :displayValue="(option) => DisplayValue(option, autoClearSelectedOption)" :placeholder="placeholder" @change="query = $event.target.value; $emit('input', $event.target.value)"/>
                    <ComboboxButton class="absolute inset-y-0 right-0 flex items-center pr-2 outline-none">
                        <Icon class="size-4 text-neutral-300" name="arrow-down" aria-hidden="true"/>
                    </ComboboxButton>
                </div>

                <ComboboxOptions class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black/5 focus:outline-none sm:text-sm">
                    <div v-if="!filteredOptions?.length && !props.options?.length" class="relative cursor-default select-none px-4 py-2 text-gray-700">
                        Nothing found.
                    </div>
                    <div v-else-if="!filteredOptions?.length && query !== ''" class="relative cursor-default select-none px-4 py-2 text-gray-700">
                        Searching...
                    </div>

                    <ComboboxOption
                        v-for="(option,index) in filteredOptions"
                        as="template"
                        :key="index"
                        :value="option"
                        v-slot="{ selected, active }"
                    >
                        <li class="relative cursor-default select-none py-2 pl-2 pr-4"
                            :class="{
                            'bg-primary text-white': active,
                            'text-writing': !active,
                            }"
                        >
                        <slot :selected="selected" :active="active" :option="option">
                            <span class="block truncate" :class="{ 'font-medium': selected, 'font-normal': !selected }">
                                {{ DisplayValue(option) }}
                            </span>

                            <!-- <span v-if="selected && selectedOption !== ''" :class="{ 'text-white': active, 'text-teal-600': !active }" class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <Icon class="h-5 w-5" name="check-square" aria-hidden="true" />
                            </span> -->
                        </slot>

                        </li>
                    </ComboboxOption>

                </ComboboxOptions>
            </div>
        </Combobox>
        <small v-show="error" class="text-[0.6rem] text-red-500 pl-2">{{ error }}</small>
    </div>
</template>

<!-- <div class="w-full flex flex-col items-start gap-1">
    <label v-if="label" :class="darkMode && 'dark:text-dark'" class="text-xs text-writing dark:text-writing-dark">{{ label }}</label>
    <select ref="input" :class="error && 'ring-2 ring-red-400', darkMode && 'dark:focus:border-transparent dark:focus:ring-2 dark:text-dark dark:ring-primary-dark'" class="w-full bg-transparent border border-input-border dark:border-input-border-dark focus:ring-2 ring-primary outline-none p-2.5 rounded-lg trans" :value="modelValue" @change="$emit('update:modelValue',$event.target.value); $emit('input', $event.target.value)">
        <option value="">{{ placeholder ?? '' }}</option>
        <option :value="typeof option !== 'object' ? option : option[props.keys.value]" v-for="(option,index) in options" :key="index">
            {{ typeof option !== 'object' ? option : option[props.keys.label] }}
        </option>
    </select>
    <small v-show="error" class="text-[0.6rem] text-red-500 pl-2">{{ error }}</small>
</div> -->
