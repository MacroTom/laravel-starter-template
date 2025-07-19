<script setup>
import { onMounted, ref, watch } from 'vue';

const props = defineProps({
    label: String,
    placeholder: String,
    modelValue: File,
    error: String,
    darkMode: Boolean,
    fileTypes: Array
});

const emit = defineEmits(['update:modelValue', 'input']);

const id = ref(null);
const defaultText = 'No file selected...';
const placeholder = ref(props.placeholder || defaultText);
const photo = ref(null);
const temPhoto = ref(null);
const fileTypes = [
    'image/png',
    'image/jpeg',
    'application/pdf',
    'text/csv',
    'application/vnd.ms-excel',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
];
const maxFileSize = 5_242_880;
const maxCount = 1;

watch(
  () => props.modelValue,
  (value) => {
    placeholder.value = value?.name || defaultText;
  }
)

const createId = () => {
    let id = '';
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    for (let i = 0; i < 5; i++) {
        id += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return id;
}

const removeFileExtension = (filename) => {
    const lastDotIndex = filename.lastIndexOf('.');

    if (lastDotIndex === -1) {
        return filename; // No extension found
    } else {
        return filename.substring(0, lastDotIndex);
    }
}

const commaSeparate = (arr) => {
  return arr.join(', ');
}

const onFileChange = (e) => {
    const files = e.target.files;
    let key;
    let file = files[0];
    key = removeFileExtension(file.name);
    if(!temPhoto.value !== key){
        if([...(props.fileTypes || fileTypes)].includes(file.type) && file.size < maxFileSize){
            photo.value = file;
            temPhoto.value = key;
            placeholder.value = photo.value.name;
            emit('update:modelValue', file);
            emit('input');
        }
    }
}

onMounted(() => {
    id.value = createId();
});
</script>

<template>
    <div class="w-full flex flex-col items-start gap-1">
        <label :class="darkMode && 'dark:text-dark'" class="text-xs">{{ label }}</label>
        <div class="w-full flex items-center">
            <label :for="id" class="w-full lg:cursor-pointer flex items-center justify-between bg-transparent border outline-2 outline-transparent p-2.5 rounded-lg input-container">
                <p :class="darkMode && 'dark:text-dark'" class="w-full text-sm font-light text-ellipsis overflow-hidden text-nowrap">{{ placeholder }}</p>
                <div class="pr-2">
                    <i :class="darkMode && 'dark:text-primary-dark'" class="bx bx-upload text-[var(--primary)]"></i>
                </div>
            </label>
            <input
                :id="id"
                type="file"
                @change="onFileChange($event)"
                accept=".png, .jpg, .jpeg, .pdf, .csv, .xls, .xlsx"
                class="hidden"
            />
        </div>
        <small v-show="error" class="text-xs text-red-500 pl-2">{{ error }}</small>
    </div>
</template>
