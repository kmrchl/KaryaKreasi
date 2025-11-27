<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { ref, onMounted } from 'vue'
import axios from 'axios'

const form = ref({
  id_kategori: '',
  produk: '',
  deskripsi: '',
  harga: '',
  gambar: null,
})

const categories = ref([])

const loadCategories = async () => {
  try {
    const res = await axios.get('/kategori')
    categories.value = res.data.data
  } catch (err) {
    console.error('Gagal ambil kategori', err)
  }
}

onMounted(loadCategories)

const handleSubmit = async () => {
  try {
    const fd = new FormData()
    // append only values that exist
    if (form.value.id_kategori) fd.append('id_kategori', form.value.id_kategori)
    fd.append('produk', form.value.produk)
    fd.append('deskripsi', form.value.deskripsi ?? '')
    fd.append('harga', form.value.harga ?? 0)
    if (form.value.gambar) fd.append('gambar', form.value.gambar)

    await axios.post('/produk', fd, {
      headers: { 'Content-Type': 'multipart/form-data' },
    })

    alert('Produk berhasil ditambahkan!')
    window.location.href = '/admin/produk'
  } catch (err) {
    console.error('Gagal tambah produk', err)
    alert('Gagal menambahkan produk')
  }
}
</script>

<template>
  <DashboardLayout>
    <div class="max-w-lg mx-auto">
      <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>
      <form @submit.prevent="handleSubmit">
        <div class="mb-4">
          <label class="block mb-1">Kategori</label>
          <select v-model="form.id_kategori" class="w-full border-gray-300 rounded">
            <option value="" disabled>Pilih kategori</option>
            <option v-for="c in categories" :key="c.id_kategori" :value="c.id_kategori">
              {{ c.kategori }}
            </option>
          </select>
        </div>

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
          <input type="file" @change="e => form.gambar = e.target.files[0]" class="w-full" />
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
      </form>
    </div>
  </DashboardLayout>
</template>
