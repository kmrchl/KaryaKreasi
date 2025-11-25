<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import { Link } from '@inertiajs/vue3'
import DashboardLayout from '@/Layouts/DashboardLayout.vue'

const ArtikelList = ref([])

const getArtikel = async () => {
  try {
    const res = await axios.get('/artikel')
    ArtikelList.value = res.data.data ?? res.data
  } catch (e) {
    console.error('Gagal ambil artikel:', e)
  }
}

const deleteArtikel = async (id) => {
  if (!confirm('Yakin mau hapus artikel ini?')) return
  try {
    await axios.delete(`/artikel/${id}`)
    await getArtikel()
  } catch (e) {
    alert('Gagal hapus artikel')
  }
}

onMounted(getArtikel)
</script>

<template>
  <DashboardLayout>
    <div>
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Artikel</h2>
        <Link href="/admin/artikel/create" class="bg-blue-600 text-white px-4 py-2 rounded">
          Tambah Artikel
        </Link>
      </div>

      <table class="w-full border">
        <thead>
          <tr class="bg-gray-200">
            <th class="p-2">Thumbnail</th>
            <th class="p-2">Judul</th>
            <th class="p-2">Sumber</th>
            <th class="p-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="a in ArtikelList" :key="a.id" class="border-b">
            <td class="p-2">
              <img :src="a.thumbnail" class="w-20 rounded" />
            </td>
            <td class="p-2">{{ a.judul }}</td>
            <td class="p-2">{{ a.sumber }}</td>
            <td class="p-2">
              <!-- Pakai href Inertia, bukan :to -->
              <Link :href="`/admin/artikel/edit/${a.id}`" class="text-blue-600 mr-2">
                Edit
              </Link>
              <button class="text-red-600" @click="deleteArtikel(a.id)">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </DashboardLayout>
</template>
