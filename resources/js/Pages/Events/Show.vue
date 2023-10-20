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
                    <h1>{{ event.name }}</h1>
                    <p>{{ event.description }}</p>
                    <p>{{ event.start_date }} - {{ event.end_date }}</p>
                    <p>{{ event.location }}</p>
                    <p>{{ event.distance }}km</p>
                    <p>{{ event.elevation_gain }}m</p>
                    <p>{{ event.difficulty }}</p>
                    <p>{{ event.type }}</p>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    props: {
        event: Object,
    },
};
</script>
