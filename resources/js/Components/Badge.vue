<script setup>
const props = defineProps({
    status: {
        type: String,
        default: 'info'
    }
});

const match = () => {
    let result = '';

    switch (props.status) {
        case 'success':
        case 'active':
        case 'published':
        case 'completed':
            result = 'bg-badge-primary text-white';
        break;

        case 'error':
        case 'inactive':
        case 'cancelled':
            result = 'bg-badge-danger text-white';
        break;

        case 'processing':
        case 'in-progress':
            result = 'bg-badge-info text-white';
        break;

        default:
            result = 'bg-badge-warning text-white';
        break;
    }

    return result;
}
</script>

<template>
    <div :class="match()" class="badge capitalize">{{ status }}</div>
</template>