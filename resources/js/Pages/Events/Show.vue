<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import moment from "moment";

defineProps({
    event: Object,
});

const formatDate = (date) => {
    return moment(date).format('YYYY-MM-DD HH:mm');
};
</script>

<template>
    <AppLayout title="Events">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Event - {{ event.name }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">{{ event.name }}</h1>
                    <div class="mb-4">
                        <span class="text-gray-600 dark:text-gray-300">{{ event.description }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="text-gray-600 dark:text-gray-300">Location:</span>
                        {{ event.location }}
                    </div>

                    <div class="mb-4">
                        <span class="text-gray-600 dark:text-gray-300">Type:</span>
                        {{ event.type }}
                    </div>

                    <div class="mb-4">
                        <span class="text-gray-600 dark:text-gray-300">Distance:</span>
                        {{ event.distance }}
                    </div>

                    <div class="mb-4">
                        <span class="text-gray-600 dark:text-gray-300">Elevation:</span>
                        {{ event.elevation_gain }}
                    </div>

                    <div class="mb-4">
                        <span class="text-gray-600 dark:text-gray-300">Start Date:</span>
                        {{ formatDate(event.start_date) }}
                    </div>

                    <a href="/events" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Back to Events
                    </a>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
