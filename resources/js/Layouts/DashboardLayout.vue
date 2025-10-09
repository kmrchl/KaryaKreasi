<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'

const sidebarOpen = ref(true)
const logout = async () => {
  const token = localStorage.getItem('token')

  try {
    await axios.post('/logout', {}, {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    })
  } catch (e) {
    console.error(e)
  }

  localStorage.removeItem('token')
  router.visit('/login')
}
</script>

<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside
      :class="['bg-gray-900 text-white w-64 p-4 transition-transform', sidebarOpen ? 'translate-x-0' : '-translate-x-64']">
      <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
      <nav class="space-y-2">
        <Link href="/admin/dashboard" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</Link>
        <Link href="/admin/produk" class="block px-4 py-2 rounded hover:bg-gray-700">Katalog Produk</Link>
        <Link href="/admin/form" class="block px-4 py-2 rounded hover:bg-gray-700">Form Masuk</Link>
      </nav>

      <button @click="logout" class="mt-auto bg-red-600 px-3 py-2 rounded-lg hover:bg-red-700 transition">
        Logout
      </button>
    </aside>

    <!-- Main -->
    <div class="flex-1 flex flex-col">
      <!-- Topbar -->
      <header class="bg-white shadow p-4 flex justify-between items-center">
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-700 hover:text-black">
          ☰
        </button>
        <h1 class="text-xl font-semibold">Admin Dashboard</h1>
      </header>

      <!-- Page content -->
      <main class="flex-1 p-6">
        <main class="flex-1 p-6 bg-gray-100 overflow-y-auto"></main>
        <slot />
      </main>
    </div>
  </div>
</template>
