<script setup>
import { ref } from 'vue';

const props = defineProps({
  dismissible: {
    type: Boolean,
    default: true,
  },
  imageSrc: {
    type: String,
    required: true
  },
  altText: {
    type: String,
    default: 'Image preview'
  }
});

const visible = ref(false);

const hide = () => {
  if(props.dismissible) {
    visible.value = false;
  }
};

const show = () => {
  visible.value = true;
};

defineExpose({
  hide,
  show
});
</script>

<template>
  <Teleport to="body">
    <div 
      v-if="visible" 
      class="w-screen h-screen fixed left-0 top-0 z-[60] flex items-center justify-center bg-black/60 backdrop-blur-sm"
      @click.self="hide"
    >
      <div class="relative max-w-[90vw] max-h-[90vh] rounded-lg overflow-hidden">
        <button 
          v-if="dismissible"
          @click="hide" 
          class="btn absolute right-2 top-2 z-10 p-1 rounded-full bg-black/50 hover:bg-black/70 transition-colors"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        
        <img 
          :src="imageSrc" 
          :alt="altText" 
          class="max-w-[90vw] max-h-[90vh] object-contain"
        />
      </div>
    </div>
  </Teleport>
</template>