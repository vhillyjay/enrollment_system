<template>
<Head title="Subjects Edit" />
<AuthenticatedLayout>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-white">
            <form @submit.prevent="update" class="py-6 px-9">
                <div class="mb-5">
                    <label for="subject_name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Subject Name:
                    </label>
                    <input id="subject_name" v-model="form.subject_name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="subject_code" class="mb-3 block text-base font-medium text-[#07074D]">
                    Subject Code:
                    </label>
                    <input id="subject_code" v-model="form.subject_code" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="classroom" class="mb-3 block text-base font-medium text-[#07074D]">
                    Classroom:
                    </label>
                    <input id="classroom" v-model="form.classroom" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="instructor" class="mb-3 block text-base font-medium text-[#07074D]">
                    Instructor:
                    </label>
                    <input id="instructor" v-model="form.instructor" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div>
                    <button type="submit" class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</AuthenticatedLayout>
</template>

<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import { Head, Link } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    subjects: Object,
});

const form = reactive({
  subject_name: props.subjects.subject_name,
  subject_code: props.subjects.subject_code,
  classroom: props.subjects.classroom,
  instructor: props.subjects.instructor,
})

function update() {
  Inertia.post(`/subjects/${props.subjects.id}`, {
    _method: 'put',
    subject_name: form.subject_name,
    subject_code: form.subject_code,
    classroom: form.classroom,
    instructor: form.instructor,
  })
}
</script>