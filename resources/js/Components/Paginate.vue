<script>
import { Link } from '@inertiajs/vue3';
export default{
    components:{
        Link
    },
    props:{
        links: Array,
    },
    data(){
        return{
        }
    },
    methods:{
        // Method to check and get URL query parameters
        getQueryParameters() {
            const queryString = window.location.search;
            const params = new URLSearchParams(queryString);

            // Create an object to store the key-value pairs of query parameters
            const queryParams = {};

            for (const [key, value] of params.entries()) {
                queryParams[key] = value;
            }

            return queryParams;
        },
        addQueryParametersToUrl(url, params) {
            const urlObj = new URL(url);

            // Get the existing query parameters from the URL
            const existingParams = urlObj.searchParams;

            // Add new query parameters to the URL
            params.forEach(param => {
                existingParams.set(param.name, param.value);
            });

            // Update the search property of the URL object
            urlObj.search = existingParams.toString();

            return urlObj.href;
        },
        newLink(intendedlink){
            const filters = this.getQueryParameters();
            // remove page from filters
            if('page' in filters){
                delete filters['page'];
            }
            // append filters to intended link
            return this.addQueryParametersToUrl(intendedlink, Object.entries(filters).map(([name, value]) => ({ name, value })));
        }
    },
    mounted(){
        // console.log(this.links);
    }
}
</script>

<template>
    <div class="w-fit flex items-center gap-1 shrink-0">
        <div class="w-10 h-10 text-xs font-medium flex-shrink-0 flex justify-center items-center" v-for="(link,index) in links" :key="index">
            <Link :href="link?.url ? newLink(link?.url) : '#'" :class="link?.active ? 'bg-paginate-active dark:bg-paginate-active-dark text-writing dark:text-writing-dark border-paginate-active-border dark:border-paginate-active-border-dark' : 'bg-paginate dark:bg-paginate-dark border-paginate-border dark:border-paginate-border-dark'" class="w-full h-full flex justify-center items-center rounded border border-(--border-color) trans" :preserve-state="false">
                <Icon v-if="link?.label?.includes('Previous')" name="arrow-left" class="size-4 trans"/>
                <Icon v-else-if="link?.label?.includes('Next')" name="arrow-right" class="size-4 trans"/>
                <span v-else :class="link?.active ? 'text-writing dark:text-writing-dark' : 'text-slate-600'" class="trans">{{ link?.label }}</span>
                <!-- {{link.label?.includes('Previous') ? '<' : link?.label?.includes('Next') ? '>' : link?.label}} -->
            </Link>
        </div>
    </div>
</template>
