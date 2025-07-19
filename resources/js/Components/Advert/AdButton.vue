<script setup>

</script>

<template>
    <Link :href="route('checkout')" class="flex flex-col items-center">
      <span class="bg-primary text-white px-10 py-4 rounded-xl font-medium text-lg mb-2">
        APPLY NOW <span class="ml-2">→</span>
        <div class="block text-xs font-light mt-1">takes less than 1 min</div>
      </span>
      <div class="flex items-center gap-x-10">
        <div class="flex items-center relative">
          <img src="/assets/advert/girl_1.webp" class="size-6.5 object-cover object-center rounded-full relative left-0" />
          <div class="size-6.5 bg-[#3B83FF] rounded-full absolute left-4">
            <img src="/assets/advert/girl_2.webp" class="size-full object-cover object-center rounded-full" />
          </div>
          <img src="/assets/advert/girl_3.webp" class="size-6.5 object-cover object-right rounded-full absolute left-8" />
        </div>

        <div class="flex flex-col">
          <ul class="flex items-center">
              <li><img src="/assets/internship/star.svg" alt="star"/></li>
              <li><img src="/assets/internship/star.svg" alt="star"/></li>
              <li><img src="/assets/internship/star.svg" alt="star"/></li>
              <li><img src="/assets/internship/star.svg" alt="star"/></li>
              <li><img src="/assets/internship/star.svg" alt="star"/></li>
          </ul>
          <span class="text-xs text-[#000F16]">Join 227+ students</span>
        </div>
      </div>
    </Link>
</template>