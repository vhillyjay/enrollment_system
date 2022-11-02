<template>
    <form @submit.prevent="submit">
      <label for="name">Subject Name:</label>
      <input id="subject_name" v-model="form.subject_name" />
      <label for="subject_code">Subject Code:</label>
      <input id="subject_code" v-model="form.subject_code" />
      <label for="classroom">Classroom:</label>
      <input id="classroom" v-model="form.classroom" />
      <label for="instructor">Instructor:</label>
      <input id="instructor" v-model="form.instructor" />
      <button type="submit">Submit</button>
    </form>
</template>
  
<script>
  import { reactive } from 'vue'
  import { Inertia } from '@inertiajs/inertia'
  
  export default {
    setup () {
      const form = reactive({
        subject_name: null,
        subject_code: null,
        classroom: null,
        instructor: null,
      })
  
      function submit() {
        Inertia.post('/subjects', form)
      }
  
      return { form, submit }
    },
  }
</script>