<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import DashboardLayout from '@/Layouts/DashboardLayout.vue'

const produkList = ref([])

const getProduk = async () => {
  const res = await axios.get('/products')
  produkList.value = res.data.data // karena kamu pakai ProductResource::collection()
}

const deleteProduk = async (id) => {
  if (confirm('Yakin mau hapus produk ini?')) {
    await axios.delete(`/products/${id}`)
    await getProduk()
  }
}

onMounted(getProduk)
</script>

<template>
  <DashboardLayout>
    <div>
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Katalog Produk</h2>
        <a href="/admin/produk/create" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Produk</a>
      </div>

      <table class="w-full bg-white rounded shadow">
        <thead class="bg-gray-200">
          <tr>
            <th class="p-3 text-left">Produk</th>
            <th class="p-3 text-left">Deskripsi</th>
            <th class="p-3 text-left">Harga</th>
            <th class="p-3 text-left">Gambar</th>
            <th class="p-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="p in produkList" :key="p.id" class="border-b hover:bg-gray-50">
            <td class="p-3">{{ p.produk }}</td>
            <td class="p-3">{{ p.deskripsi }}</td>
            <td class="p-3">Rp{{ p.harga.toLocaleString('id-ID') }}</td>
            <td class="p-3">
              <img v-if="p.gambar" :src="`/storage/${p.gambar}`" alt="gambar produk" class="w-16 h-16 object-cover rounded" />
            </td>
            <td class="p-3 text-center space-x-2">
              <a :href="`/admin/produk/${p.id}/edit`" class="text-blue-600 hover:underline">Edit</a>
              <button @click="deleteProduk(p.id)" class="text-red-600 hover:underline">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </DashboardLayout>
</template>
