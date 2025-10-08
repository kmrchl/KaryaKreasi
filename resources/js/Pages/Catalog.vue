<template>
  <AppLayout>
    <section class="mt-10">
      <h2 class="text-3xl font-bold mb-6 text-center">Our Product Catalog</h2>

      <div v-if="loading" class="text-center py-10">Loading products…</div>

      <div v-else class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div v-for="p in products" :key="p.id" class="border rounded-lg shadow p-4">
          <img
            :src="p.gambar_url || 'https://via.placeholder.com/300x200?text=No+Image'"
            alt="Product"
            class="w-full rounded-lg mb-4 object-cover h-44"
          />
          <h3 class="text-xl font-semibold mb-2">{{ p.produk }}</h3>
          <p class="text-gray-500 text-sm mb-4">{{ p.deskripsi }}</p>
          <p class="font-bold">Rp {{ formatPrice(p.harga) }}</p>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import AppLayout from '@/Layouts/App.vue';

const products = ref([]);
const loading = ref(true);

onMounted(async () => {
  try {
    const res = await axios.get('/api/produk');
    // Karena kita pakai ProductResource::collection -> respon ada di res.data.data
    products.value = res.data?.data ?? res.data;
  } catch (err) {
    console.error('Failed to fetch products', err);
  } finally {
    loading.value = false;
  }
});

function formatPrice(v) {
  if (!v && v !== 0) return '-';
  return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(v);
}
</script>
