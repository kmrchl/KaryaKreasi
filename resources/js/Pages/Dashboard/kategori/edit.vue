<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { ref, onMounted } from 'vue'
import axios from 'axios'
import { useRoute } from 'vue-router'

const route = useRoute()
const id_kategori = route.params.id_kategori

const form = ref({
  kategori: '',
  deskripsi: '',
})

// Ambil data lama kategori
const loadKategori = async () => {
  try {
    const res = await axios.get(`/api/kategori/${id_kategori}`)
    form.value.kategori = res.data.data.kategori
    form.value.deskripsi = res.data.data.deskripsi
  } catch (err) {
    alert('Gagal memuat data kategori 😵‍💫')
  }
}

onMounted(loadKategori)

// Update kategori
const handleSubmit = async () => {
  try {
    await axios.put(`/api/kategori/${id_kategori}`, {
      kategori: form.value.kategori,
      deskripsi: form.value.deskripsi,
    })

    alert('Kategori berhasil diperbarui! ✨')
    window.location.href = '/admin/kategori'
  } catch (err) {
    console.error(err)
    alert('Gagal mengupdate kategori 😭')
  }
}
</script>

<template>
  <DashboardLayout>
    <div class="max-w-lg mx-auto">
      <h2 class="text-2xl font-bold mb-4">Edit Kategori</h2>

      <form @submit.prevent="handleSubmit">
        <div class="mb-4">
          <label class="block mb-1">Nama Kategori</label>
          <input
            v-model="form.kategori"
            type="text"
            class="w-full border-gray-300 rounded"
          />
        </div>

        <div class="mb-4">
          <label class="block mb-1">Deskripsi</label>
          <textarea
            v-model="form.deskripsi"
            class="w-full border-gray-300 rounded"
          ></textarea>
        </div>

        <button
          class="bg-blue-600 text-white px-4 py-2 rounded"
        >
          Update
        </button>
      </form>
    </div>
  </DashboardLayout>
</template>
