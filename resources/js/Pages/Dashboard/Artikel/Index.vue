<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import DashboardLayout from '@/Layouts/DashboardLayout.vue'

// const ArtikelList = ref([])

// const getArtikel = async () => {
//   const res = await axios.get('/artikel')
//   ArtikelList
// .value = res.data.data // karena kamu pakai ProductResource::collection()
// }

// const deleteProduk = async (id) => {
//   if (confirm('Yakin mau hapus artikel ini?')) {
//     await axios.delete(`/artikel/${id}`)
//     await getArtikel()
//   }
// }

// onMounted(getArtikel)
</script>

<template>
  <DashboardLayout>
    <div>
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Artikel</h2>
        <a href="/admin/artikel/create" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah link Artikel</a>
      </div>

    <!--  -->
    </div>
  </DashboardLayout>
</template>
