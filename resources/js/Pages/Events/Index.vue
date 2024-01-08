<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    events: Array,
});
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
                    <table class="table-auto w-full bg-white text-gray-700">
                        <thead class="bg-gray-800">
                        <tr>
                            <th class="px-4 py-2 text-white font-bold">Event Name</th>
                            <th class="px-4 py-2 text-white font-bold">Type</th>
                            <th class="px-4 py-2 text-white font-bold">Start Date</th>
                            <th class="px-4 py-2 text-white font-bold">Distance</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">

                        <tr v-for="event in events" :key="event.id">
                            <td class="px-4 py-2"><a :href="`/events/${event.id}`">{{ event.name }}</a></td>
                            <td class="px-4 py-2"><a :href="`/events/${event.id}`">{{ event.type }}</a></td>
                            <td class="px-4 py-2"><a :href="`/events/${event.id}`">{{ event.start_date }}</a></td>
                            <td class="px-4 py-2"><a :href="`/events/${event.id}`">{{ event.distance }}</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
