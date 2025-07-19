<script setup>
import { toast } from '@/Stores/toast.js';

import Icon from './Icon.vue';

import { closeToast } from '@/Composables/toastHandler.js';

const toastData = () => {
    return {
        type: toast.type,
        message: toast.message
    };
}
</script>
<template>
  <transition name="slideDownModal">
    <div
      v-if="toastData().type !== null"
      :class="{
        'border-primary bg-white': toastData().type === 'success',
        'border-red-500 bg-red-50': toastData().type === 'error',
      }"
      class="flex w-11/12 items-center gap-4 rounded-lg border-2 px-4 py-5 md:w-[30rem] fixed top-3 translate-x-[-50%] left-[50%] shadow-xl z-[400]"
    >
      <!-- close button -->
      <button
        @click="closeToast()"
        class="absolute top-2 right-2 text-neutral-400 hover:text-neutral-800 focus:text-neutral-800"
      >
        <span class="sr-only">Close</span>
        <span>
          <i class="bx bx-x text-2xl"></i>
        </span>
      </button>
      <!-- close button end -->
      <div
        v-if="toastData().type === 'success'"
        class="flex-shrink-0"
      >
        <Icon name="check-square" class="text-primary w-10"></Icon>
      </div>
      <div
        v-if="toastData().type === 'error'"
        class="flex-shrink-0"
      >
        <Icon name="warning" class="text-red-500 w-10"></Icon>
      </div>
      <div>
        <p class="mt-1 text-writing">
          {{ toastData().message }}
        </p>
      </div>
    </div>
  </transition>
</template>
