<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  email: '',
  password: '',
})

const submit = () => {
  form.post(route('login'), {
    onSuccess: () => {
      // redirect otomatis di-handle inertia
    },
  })
}
</script>

<template>
  <div class="flex min-h-screen items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-bold text-center mb-6">Login Admin</h2>

      <form @submit.prevent="submit" class="space-y-4">
        <div>
          <label class="text-sm text-gray-700">Email</label>
          <input
            v-model="form.email"
            type="email"
            required
            class="w-full mt-1 px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200"
          />
        </div>
        <div>
          <label class="text-sm text-gray-700">Password</label>
          <input
            v-model="form.password"
            type="password"
            required
            class="w-full mt-1 px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200"
          />
        </div>
        <div v-if="form.errors.email" class="text-red-500 text-sm text-center">
          {{ form.errors.email }}
        </div>
        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition"
        >
          Login
        </button>
      </form>
    </div>
  </div>
</template>
