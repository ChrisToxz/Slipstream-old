<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import VideoCard from "@/Components/VideoCard.vue";

</script>

<template>
    <Head title="Dashboard" />
    <MainLayout>
        <div class="w-full flex justify-center">
            <div class="w-[calc(100%-46px)] grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[26px]">
                <VideoCard />
                <VideoCard />
                <VideoCard />
                <VideoCard />
            </div>
        </div>
    </MainLayout>
</template>

<style>
</style>
