<script setup>
import moment from 'moment';
import currency from 'currency.js';

const props = defineProps({
    format: {
        type: String,
        default: 'HH:mma DD/MM/yy'
    },
    value: [String, Number],
    relative: Boolean,
});

const formatDate = (value) => {
    return props.relative ? moment(value).fromNow() : moment(value).format(props.format);
}

const formatCurrency = (value) => {
    return currency(value, {separator: ',', symbol: '₦', precision: 0}).format();
}
</script>

<template>
    {{ formatDate(value) }}
</template>