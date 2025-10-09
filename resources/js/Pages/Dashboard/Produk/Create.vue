<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { ref } from 'vue'
import axios from 'axios'

const form = ref({
  produk: '',
  deskripsi: '',
  harga: '',
  gambar: null,
})

const handleSubmit = async () => {
  const fd = new FormData()
  Object.entries(form.value).forEach(([key, val]) => fd.append(key, val))

  await axios.post('/products', fd, {
    headers: { 'Content-Type': 'multipart/form-data' },
  })
  alert('Produk berhasil ditambahkan!')
  window.location.href = '/admin/produk'
}
</script>

<template>
  <DashboardLayout>
    <div class="max-w-lg mx-auto">
      <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>

      <form @submit.prevent="handleSubmit">
        <div class="mb-4">
          <label class="block mb-1">Nama Produk</label>
          <input v-model="form.produk" type="text" class="w-full border-gray-300 rounded" />
        </div>
        <div class="mb-4">
          <label class="block mb-1">Deskripsi</label>
          <textarea v-model="form.deskripsi" class="w-full border-gray-300 rounded"></textarea>
        </div>
        <div class="mb-4">
          <label class="block mb-1">Harga</label>
          <input v-model="form.harga" type="number" class="w-full border-gray-300 rounded" />
        </div>
        <div class="mb-4">
          <label class="block mb-1">Gambar</label>
          <input type="file" @change="e => form.gambar = e.target.files[0]" class="w-full border-gray-300 rounded" />
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
      </form>
    </div>
  </DashboardLayout>
</template>
