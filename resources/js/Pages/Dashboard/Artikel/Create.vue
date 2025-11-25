<script setup>
import { ref, watch } from 'vue'
import axios from 'axios'
// import { useRouter } from 'vue-router'
import { Inertia } from '@inertiajs/inertia'
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { Link } from '@inertiajs/vue3'

// const router = useRouter()
const url = ref('')
const loading = ref(false)
const preview = ref(null)
const error = ref(null)
const fallback = ref({
  title: '',
  description: '',
  thumbnail: '',
  domain: ''
})

// Watch url, fetch preview otomatis
watch(url, async (newUrl) => {
  if (!newUrl) {
    preview.value = null
    error.value = null
    return
  }

  try {
    const res = await axios.post('/artikel/preview', { url: newUrl })
    preview.value = res.data.data
    error.value = null

    // isi fallback otomatis kalau preview berhasil
    fallback.value.title = preview.value.title || ''
    fallback.value.description = preview.value.description || ''
    fallback.value.thumbnail = preview.value.image || ''
    fallback.value.domain = preview.value.domain || ''
  } catch (e) {
    preview.value = null
    error.value = 'Gagal mengambil preview. Kamu bisa isi data manual.'
    // reset fallback biar user bisa isi manual
    fallback.value = { title: '', description: '', thumbnail: '', domain: '' }
  }
})

const submit = async () => {
  if (!url.value) return alert('URL harus diisi!')

  loading.value = true
  try {
    await axios.post('/artikel', {
      url: url.value,
      judul: fallback.value.title,
      deskripsi: fallback.value.description,
      thumbnail: fallback.value.thumbnail,
      sumber: fallback.value.domain
    })
    // navigasi pakai Inertia
    Inertia.visit('/admin/artikel')
  } catch (e) {
    alert('Gagal menyimpan artikel, cek kembali inputmu.')
    console.error(e)
  } finally {
    loading.value = false
  }
}


</script>

<template>
  <DashboardLayout>
    <div>
      <h2 class="text-2xl font-bold mb-6">Tambah Artikel</h2>

      <div class="space-y-4">

        <!-- Input URL -->
        <label class="block">
          <span>URL Artikel</span>
          <input
            v-model="url"
            type="text"
            placeholder="Masukkan URL artikel..."
            class="w-full border p-2 rounded"
          />
        </label>

        <div v-if="error" class="text-red-500">{{ error }}</div>

        <!-- Preview -->
        <div v-if="preview" class="border p-2 rounded flex space-x-4 items-center">
          <img :src="preview.image" class="w-24 rounded" v-if="preview.image" />
          <div>
            <h3 class="font-bold">{{ preview.title }}</h3>
            <p class="text-sm text-gray-600">{{ preview.description }}</p>
            <p class="text-xs text-gray-400">{{ preview.domain }}</p>
          </div>
        </div>

        <!-- Manual fallback -->
        <div v-if="!preview || error" class="border p-2 rounded space-y-2">
          <label>
            <span>Judul</span>
            <input v-model="fallback.title" type="text" class="w-full border p-2 rounded" />
          </label>
          <label>
            <span>Deskripsi</span>
            <textarea v-model="fallback.description" class="w-full border p-2 rounded"></textarea>
          </label>
          <label>
            <span>Thumbnail URL</span>
            <input v-model="fallback.thumbnail" type="text" class="w-full border p-2 rounded" />
          </label>
          <label>
            <span>Sumber / Domain</span>
            <input v-model="fallback.domain" type="text" class="w-full border p-2 rounded" />
          </label>
        </div>

        <!-- Submit -->
        <button
          @click="submit"
          :disabled="loading"
          class="bg-blue-600 text-white px-4 py-2 rounded"
        >
          {{ loading ? 'Menyimpan...' : 'Simpan' }}
        </button>
      </div>
    </div>
  </DashboardLayout>
</template>
