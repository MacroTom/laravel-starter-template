<script setup>
import { ref } from 'vue';
import { usePage, router } from '@inertiajs/vue3';
import Paginate from '@/Components/Paginate.vue';
import Card from '@/Components/Card.vue';

const props = defineProps({
    showControls: {
        type: Boolean,
        default: true,
    },
    links: Object,
    title: {
        type: String,
        default: 'Title'
    },
    placeholder: {
        type: String,
        default: 'Search something'
    },
    colspan: {
        type: Number,
        required: true
    },
    from: {
        type: Number,
        default: 0
    },
    to: {
        type: Number,
        default: 0
    },
    total: {
        type: Number,
        default: 0
    },
});

const { url: path } = usePage();

const q = ref(null);

// Create a URL object
const urlObj = new URL(path, window.location.origin);

// Get the URL parameters
const urlParams = new URLSearchParams(urlObj.search);

const perPage = ref(urlParams.has('perPage') ? parseInt(urlParams.get('perPage')) : null);

const clearSearch = () => {
    // Check if a parameter exists
    if (urlParams.has('q') && !q.value) {
        urlParams.delete('q');
        search();
    }
}

const search = () => {

    if(perPage.value){
        urlParams.set('perPage', perPage.value.toString());
    }
    else if(urlParams.has('perPage')){
        urlParams.delete('perPage');
    }

    if (q.value) {
        urlParams.set('q', q.value);
    }

    urlObj.search = urlParams.toString();

    router.get(urlObj.toString(), {}, {
        preserveState: true,
        preserveScroll: true,
    });
}

</script>

<template>
    <Card class="card w-full space-y-4 p-4 md:p-6">
        <section class="w-full flex flex-col gap-y-3 md:flex-row items-start md:items-center md:justify-between">
            <p class="text-lg font-medium">{{ title }}</p>

            <div v-show="showControls" class="flex items-center gap-2">
                <!-- Search bar -->
                <div class="flex items-center border border-(--border-color) p-2 md:px-3 md:py-2 rounded-full trans has-[:focus]:ring-2 has-[:focus]:border-transparent ring-primary">
                    <Icon name="search" class="size-4 trans"/>
                    <input @keyup.enter="search" @input="clearSearch" v-model="q" enterkeyhint="Search" class="w-full md:w-56 max-w-md pl-2 bg-transparent outline-none text-xs trans placeholder:font-light" :placeholder="placeholder" type="text"/>
                </div>

                <div class="flex items-center gap-x-2 shrink-0">
                    <span class="text-xs text-writing dark:text-writing-dark trans hidden md:block">Show</span>
                    <input class="max-w-8 py-1.5 bg-transparent outline-none text-writing dark:text-writing-dark trans text-xs text-center border border-(--border-color) rounded focus:ring-2 ring-primary placeholder:text-xs number" v-model="perPage" placeholder="16" type="number"/>
                    <span class="text-xs text-writing dark:text-writing-dark trans">Entries</span>
                </div>
            </div>
        </section>

        <section class="w-full md:max-h-[50rem] overflow-auto scrollbar-hide pb-1 border-b border-(--border-color)">
            <table class="tbl">
                <thead class="font-medium">
                    <slot name="thead"/>
                </thead>
                <tbody>
                    <slot name="tbody">
                        <tr class="w-full">
                            <td :colspan="colspan" class="w-full h-40 md:h-80">
                                <div class="w-fit md:w-full flex flex-col md:flex-row items-center gap-4 md:justify-center">
                                    <!-- <div>
                                        <img src="/images/patterns/table-empty-light.svg" alt="empty-image"/>
                                    </div> -->
                                    <div class="w-fit md:w-full max-w-[16rem] md:max-w-sm text-wrap">
                                        <slot name="empty"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </slot>
                </tbody>
            </table>
        </section>
        <div v-if="showControls" class="tfoot">
            <section class="flex items-center justify-between">
                <small class="md:hidden text-xs text-[#999BA8] trans">
                    {{ from }} to {{ to }}
                </small>
                <small class="hidden md:block text-xs text-[#999BA8] trans">
                    Showing - {{ from }} to {{ to }} of {{ total }} Entries
                </small>
                <Paginate :links="links"/>
            </section>
        </div>
    </Card>
</template>
