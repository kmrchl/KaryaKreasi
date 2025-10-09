<script setup>
import { ref } from 'vue'
import axios from 'axios'
import { router } from '@inertiajs/vue3'

const email = ref('')
const password = ref('')
const error = ref('')

const login = async () => {
  try {
    const res = await axios.post('/login', {
      email: email.value,
      password: password.value
    })

    // simpan token ke localStorage
    localStorage.setItem('token', res.data.token)

    // redirect ke dashboard
    router.visit('/admin/dashboard')
  } catch (e) {
    error.value = 'Email atau password salah 😢'
  }
}
</script>

<template>
  <div class="flex min-h-screen items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-bold text-center mb-6">Login Admin</h2>

      <form @submit.prevent="login" class="space-y-4">
        <div>
          <label class="text-sm text-gray-700">Email</label>
          <input
            v-model="email"
            type="email"
            required
            class="w-full mt-1 px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200"
          />
        </div>
        <div>
          <label class="text-sm text-gray-700">Password</label>
          <input
            v-model="password"
            type="password"
            required
            class="w-full mt-1 px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200"
          />
        </div>
        <div v-if="error" class="text-red-500 text-sm text-center">{{ error }}</div>
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
