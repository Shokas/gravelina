<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Events">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Events List
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <li v-for="event in events" :key="event.id">
                        <a :href="`/events/${event.id}`">
                            {{ event.name }} | {{ event.start_date }} | {{ event.distance }} | {{ event.type }}
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    props: {
        events: Array,
    },
};
</script>
