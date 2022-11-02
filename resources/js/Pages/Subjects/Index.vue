<template>
    <div>
        <div v-for="subjectsData in subjects" :key="subjectsData.id">
            <p>We have {{ subjectsData.subject_name }} from {{ subjectsData.subject_code }}.</p>
            <p>{{ subjectsData.classroom }} - {{ subjectsData.instructor }}</p>
        </div>
    </div>
</template>

<script setup>
    defineProps(['subjects']);
</script>

