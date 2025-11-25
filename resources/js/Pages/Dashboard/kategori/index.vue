<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import DashboardLayout from '@/Layouts/DashboardLayout.vue'

const kategorilist = ref([])

const getKategori = async () => {
  try {
    // baseURL sudah '/api' di app.js, jadi cukup 'kategori'
    const res = await axios.get('/kategori')
    kategorilist.value = res.data.data // sesuai response Postman-mu
  } catch (err) {
    console.error('Gagal ambil kategori:', err)
    // optional: tampilkan notifikasi user
  }
}

const deleteProduk = async (id) => {
  if (confirm('Yakin mau hapus kategori ini?')) {
    try {
      await axios.delete(`/kategori/${id}`)
      await getKategori()
    } catch (err) {
      console.error('Gagal hapus kategori:', err)
    }
  }
}

onMounted(getKategori)
</script>

<template>
  <DashboardLayout>
    <div>
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Kategori</h2>
        <a href="/admin/kategori/create" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Kategori</a>
      </div>

      <table class="w-full bg-white rounded shadow">
        <thead class="bg-gray-200">
          <tr>
            <th class="p-3 text-left">Kategori</th>
            <th class="p-3 text-left">Deskripsi</th>
            <!-- <th class="p-3 text-left">Harga</th>
            <th class="p-3 text-left">Gambar</th> -->
            <th class="p-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="p in kategorilist
        " :key="p.id_kategori" class="border-b hover:bg-gray-50">
            <td class="p-3">{{ p.kategori }}</td>
            <td class="p-3">{{ p.deskripsi }}</td>
            <td class="p-3 text-center space-x-2">
              <a
              :href="`/admin/kategori/${p.id_kategori}/edit`"
              class="text-blue-600 hover:underline cursor-pointer"
            >
              Edit
            </a>
              <button @click="deleteProduk(p.id_kategori)" class="text-red-600 hover:underline">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </DashboardLayout>
</template>
