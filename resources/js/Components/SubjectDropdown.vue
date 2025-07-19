<script setup>
import { ref } from 'vue';

const props = defineProps({
    subjects: {
        type: Array,
        required: true,
    }
});

const isOpen = ref(false);
</script>

<template>
    <section @click="isOpen = false" :class="isOpen ? 'opacity-100 pointer-events-auto' : 'opacity-0 pointer-events-none'" class="w-full h-screen fixed left-0 top-0 z-20 bg-black/20 transition-opacity duration-500 ease-in-out"></section>
                                                                                                                            
    <div v-auto-animate class="relative">
        <button @click="isOpen = !isOpen" class="btn text-neutral-500 text-sm flex gap-x-2">
            <span class="shrink-0">{{ subjects.length }} subject(s)</span>
            <i :class="isOpen ? 'bx-collapse-vertical' : 'bx-expand-vertical'" class="bx text-sm shrink-0"></i>
        </button>

        <div v-if="isOpen" class="absolute z-40 top-[calc(100%+8px)] rounded-lg shadow-xs bg-white w-full md:max-w-80">
            <div class="py-1 max-h-40 overflow-y-auto scrollbar-hide">
                <div 
                    v-for="subject in subjects" 
                    :key="subject.id" 
                    class="px-4 py-2 text-sm text-neutral-500 hover:bg-neutral-100 truncate"
                >
                    {{ subject.name }}
                </div>
            </div>
        </div>

    </div>
</template>