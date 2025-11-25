<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="py-3 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <div class="relative rounded-2xl overflow-hidden bg-[#D6C8B6] h-[550px] md:h-[650px]">
          <img 
            src="@/assets/bed.png" 
            alt="Arthana Karsa - Interior Design"
            class="w-full h-full object-cover"
          >
          <div class="absolute inset-0 flex justify-center items-center">
            <div class="text-center px-8 md:px-16 max-w-4xl">
              <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Our Catalog Products
              </h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-4 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-[2.7rem] mb-12 font-semibold text-center text-black drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">Desain Sesuai Kebutuhan</h2>
  
      <div v-if="loading" class="text-center py-10">Loading products…</div>

      <div v-else-if="error" class="text-center text-red-500 py-10">
        {{ error }}
        <button @click="fetchProducts" class="ml-3 text-indigo-600 underline">
          Retry
        </button>
      </div>

      <div v-else class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div
          v-for="p in products"
          :key="p.id"
          class="border rounded-lg shadow hover:shadow-lg p-4 transition"
        >
          <img
            :src="p.gambar_url || 'https://via.placeholder.com/300x200?text=No+Image'"
            alt="Product"
            class="w-full rounded-lg mb-4 object-cover h-44"
          />
          <h3 class="text-xl font-semibold mb-2">{{ p.produk }}</h3>
          <p class="text-gray-500 text-sm mb-4">{{ p.deskripsi }}</p>
          <p class="font-bold text-indigo-600">
            {{ formatPrice(p.harga) }}
          </p>
        </div>
      </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import AppLayout from '@/Layouts/App.vue'

const products = ref([])
const loading = ref(true)
const error = ref(null)

async function fetchProducts() {
  loading.value = true
  error.value = null
  try {
    const res = await axios.get('/produk')
    products.value = res.data?.data ?? res.data
  } catch (err) {
    error.value = 'Failed to load products 😢'
    console.error(err)
  } finally {
    loading.value = false
  }
}

onMounted(fetchProducts)

function formatPrice(v) {
  if (!v && v !== 0) return '-'
  return new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR'
  }).format(v)
}
</script>
