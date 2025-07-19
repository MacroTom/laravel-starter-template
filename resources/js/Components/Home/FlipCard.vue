<script setup>
import { ref } from 'vue';

defineProps({
    track: Object,
});

const isFlipped = ref(false);
</script>

<template>
    <li class="w-full h-110 relative transform-3d">
        <div :class="isFlipped ? 'rotate-y-180' : 'rotate-y-0'" class="w-full h-full backface-hidden duration-500 ease-in-out transform-3d absolute top-0 left-0 flex flex-col items-center gap-y-8 bg-white border border-neutral-200 rounded">
            <div class="w-full space-y-2 p-4">
                <p class="font-medium text-xl">{{ track.title }}</p>
                <p class="text-black/80 text-sm">
                    {{ track.body }}
                </p>
                <button @click="isFlipped = true" class="text-primary gap-x-2 flex items-center font-medium cursor-pointer">
                    Learn more
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </button>
            </div>

            <div class="w-full h-62 grid grid-cols-12 overflow-hidden relative bottom-0 right-0">
                <div class="col-span-2 lg:col-span-3 pointer-events-none"></div>

                <div :class="track.color" class="col-span-10 lg:col-span-9 h-full rounded-tl-3xl pl-6">
                    <div class="w-24">
                        <img class="w-full" src="/assets/stamp-1.svg" alt="stamp"/>
                    </div>

                    <p class="font-medium text-white text-lg">{{ track.role }}</p>

                    <div class="w-full space-y-1 absolute bottom-0">
                        <span class="w-full h-1.5 block rounded-full bg-white/20"></span>
                        <span class="w-1/2 h-1.5 block rounded-full bg-white/20"></span>
                        <span class="w-2/3 h-1.5 block rounded-full bg-white/20"></span>
                    </div>
                </div>
            </div>
        </div>

        <div :class="isFlipped ? 'rotate-y-360' : 'rotate-y-180'" class="w-full h-full backface-hidden duration-500 ease-in-out transform-3d absolute top-0 left-0 flex flex-col items-start justify-between gap-y-8 bg-linear-to-b from-[#9BB2FE]/20 to-white border border-neutral-200 rounded p-4">
            <div class="w-full space-y-4">
                <p class="font-medium text-xl">{{ track.title }}</p>
                
                <ul class="list-disc pl-6 font-light">
                    <li>Learn the foundations of user interface (UI) and user experience (UX) design.</li>
                    <li>Get hands-on with tools like Figma for wireframing and prototyping.</li>
                    <li>Understand design principles like spacing, alignment, and visual hierarchy.</li>
                    <li>Conduct basic user research and usability testing.</li>
                    <li>Work on real design challenges to build a starter portfolio.</li>
                </ul>
            </div>
            <Link href="#" class="text-primary gap-x-2 flex items-center font-medium">
                Enroll now
                <i class='bx bx-right-arrow-alt text-xl'></i>
            </Link>
        </div>
    </li>
</template>