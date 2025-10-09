<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { ref, onMounted } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

const router = useRouter()
// data ringkasan buat dashboard
const totalProduk = ref(0)
const totalPesan = ref(0)


onMounted(async () => {
  try {
    // cek token di localStorage
    const token = localStorage.getItem('token')
    if (!token) {
      router.push('/login')
      return
    }

    // cek validitas token ke server
    await axios.get('/api/dashboard', {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    })
  } catch (err) {
    // token invalid atau expired
    localStorage.removeItem('token')
    router.push('/login')
  }
})

const loadStats = async () => {
  try {
    const produkRes = await axios.get('/products')
    totalProduk.value = produkRes.data.data.length

    // misal nanti endpoint pesan di /api/messages
    const pesanRes = await axios.get('/messages').catch(() => ({ data: { data: [] } }))
    totalPesan.value = pesanRes.data.data.length
  } catch (err) {
    console.error(err)
  }
}

onMounted(loadStats)
</script>

<template>
  <DashboardLayout>
    <div class="space-y-6">
      <!-- Judul -->
      <div>
        <h1 class="text-3xl font-bold text-gray-800">Selamat datang, Admin 👋</h1>
        <p class="text-gray-500">Berikut ringkasan data sistem kamu hari ini.</p>
      </div>

      <!-- Statistik Ringkas -->
      <!-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-md transition">
          <h3 class="text-gray-500 text-sm font-semibold">Total Produk</h3>
          <p class="text-3xl font-bold text-blue-600 mt-2">{{ totalProduk }}</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-md transition">
          <h3 class="text-gray-500 text-sm font-semibold">Pesan Masuk</h3>
          <p class="text-3xl font-bold text-green-600 mt-2">{{ totalPesan }}</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-md transition">
          <h3 class="text-gray-500 text-sm font-semibold">Status Sistem</h3>
          <p class="text-3xl font-bold text-amber-500 mt-2">Aktif</p>
        </div>
      </div> -->

      <!-- Quick Links -->
      <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-xl font-bold mb-4">Aksi Cepat</h2>
        <div class="flex flex-wrap gap-3">
          <a
            href="/admin/produk/create"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"
          >
            ➕ Tambah Produk
          </a>
          <a
            href="/admin/produk"
            class="bg-yellow-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition"
          >
            📦 Kelola Produk
          </a>
          <a
            href="/admin/form"
            class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition"
          >
            📩 Lihat Pesan
          </a>
        </div>
      </div>
    </div>
  </DashboardLayout>
</template>
