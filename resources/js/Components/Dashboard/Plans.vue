<script setup>
import { computed } from 'vue';
import { formatCurrency } from '@/Composables/currency.js'

const props = defineProps({
    country: Object,
    pricing: Object,
    error: String,
});

const emit = defineEmits(['change']);

const model = defineModel();

const country = computed(() => props.country);

const plans = [
    {
        name: 'One Time',
        id: 'one-time',
    },
    {
        name: 'Installment',
        id: 'installment',
    },
];

const price = (plan) => {
    return formatCurrency(
        props.pricing[plan.id][country.value.iso_code],
        country.value.symbol, 
        country.value.iso_code === 'NG' ? 0 : 2
    );
}

const handleSelect = (plan) => {
    model.value = plan.id;
    emit('change', plan.id);
}
</script>

<template>
    <ul class="w-full grid grid-cols-1 md:grid-cols-2 gap-y-4 lg:gap-x-6">
        <li class="w-full min-h-[20rem] bg-surface rounded space-y-4">

        </li>
        <li class="w-full min-h-[20rem] bg-surface rounded space-y-4">

        </li>
    </ul>
</template>