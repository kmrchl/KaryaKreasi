<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { ref } from 'vue'
import axios from 'axios'

const form = ref({
  kategori: '',
  deskripsi: '',
  harga: '',
  gambar: null,
})

const handleSubmit = async () => {
  const fd = new FormData()
  Object.entries(form.value).forEach(([key, val]) => fd.append(key, val))

  await axios.post('/kategori', fd, {
    headers: { 'Content-Type': 'multipart/form-data' },
  })
  alert('Kategoori berhasil ditambahkan!')
  window.location.href = '/admin/kategori'
}
</script>

<template>
  <DashboardLayout>
    <div class="max-w-lg mx-auto">
      <h2 class="text-2xl font-bold mb-4">Tambah Kategori</h2>

      <form @submit.prevent="handleSubmit">
        <div class="mb-4">
          <label class="block mb-1">Nama Kategori</label>
          <input v-model="form.kategori" type="text" class="w-full border-gray-300 rounded" />
        </div>
        <div class="mb-4">
          <label class="block mb-1">Deskripsi</label>
          <textarea v-model="form.deskripsi" class="w-full border-gray-300 rounded"></textarea>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
      </form>
    </div>
  </DashboardLayout>
</template>
