<script setup>
import { ref, watch, onMounted } from 'vue'
import axios from 'axios'
import { usePage } from '@inertiajs/vue3'
import DashboardLayout from '@/Layouts/DashboardLayout.vue'

const { props } = usePage()
const id = props.id   // ambil dari Inertia props

const url = ref('')
const preview = ref({
  title: '',
  description: '',
  image: '',
  domain: ''
})
const fallback = ref({
  title: '',
  description: '',
  thumbnail: '',
  domain: ''
})
const loading = ref(false)
const fetchingPreview = ref(false)
const error = ref(null)

// Fetch artikel saat component mount
onMounted(async () => {
  try {
    const res = await axios.get(`/artikel/${id}`)
    const artikel = res.data
    url.value = artikel.url || ''
    fallback.value.title = artikel.judul || ''
    fallback.value.description = artikel.deskripsi || ''
    fallback.value.thumbnail = artikel.thumbnail || ''
    fallback.value.domain = artikel.sumber || ''

    preview.value = {
      title: artikel.judul || fallback.value.title,
      description: artikel.deskripsi || fallback.value.description,
      image: artikel.thumbnail || fallback.value.thumbnail,
      domain: artikel.sumber || fallback.value.domain
    }
  } catch (e) {
    error.value = 'Gagal memuat data artikel'
  }
})

// Watch url berubah untuk fetch preview
watch(url, async (newUrl) => {
  if (!newUrl) return
  fetchingPreview.value = true
  error.value = null
  try {
    const res = await axios.post('/artikel/preview', { url: newUrl })
    const data = res.data.data

    preview.value = {
      title: data.title || fallback.value.title,
      description: data.description || fallback.value.description,
      image: data.image || fallback.value.thumbnail,
      domain: data.domain || fallback.value.domain
    }
  } catch (e) {
    error.value = 'Gagal fetch preview'
    preview.value = {
      title: fallback.value.title,
      description: fallback.value.description,
      image: fallback.value.thumbnail,
      domain: fallback.value.domain
    }
  } finally {
    fetchingPreview.value = false
  }
})

// Submit form
const submit = async () => {
  if (!url.value) return alert('URL harus diisi!')

  loading.value = true
  try {
    await axios.put(`/artikel/${id}`, {
      url: url.value,
      judul: preview.value.title,
      deskripsi: preview.value.description,
      thumbnail: preview.value.image,
      sumber: preview.value.domain
    })
    alert('Artikel berhasil disimpan!')
    // Redirect ke halaman index artikel
    window.Inertia.visit('/admin/artikel')
  } catch (e) {
    alert('Gagal menyimpan perubahan, cek kembali inputmu.')
  } finally {
    loading.value = false
  }
}
</script>

<template>
  <DashboardLayout>
    <div>
      <h2 class="text-2xl font-bold mb-6">Edit Artikel</h2>

      <div class="space-y-4">
        <label class="block">
          <span>URL Artikel</span>
          <input
            v-model="url"
            type="text"
            placeholder="Masukkan URL..."
            class="w-full border p-2 rounded"
          />
        </label>

        <div v-if="error" class="text-red-500">{{ error }}</div>

        <!-- Preview -->
        <div v-if="preview && !fetchingPreview" class="border p-2 rounded flex space-x-4 items-center">
          <img :src="preview.image" class="w-24 rounded" v-if="preview.image" />
          <div>
            <h3 class="font-bold">{{ preview.title }}</h3>
            <p class="text-sm text-gray-600">{{ preview.description }}</p>
            <p class="text-xs text-gray-400">{{ preview.domain }}</p>
          </div>
        </div>

        <!-- Fallback input manual -->
        <div v-if="!preview || error || fetchingPreview" class="border p-2 rounded space-y-2">
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

        <button
          @click="submit"
          :disabled="loading || fetchingPreview"
          class="bg-blue-600 text-white px-4 py-2 rounded"
        >
          {{ loading ? 'Menyimpan...' : 'Simpan' }}
        </button>
      </div>
    </div>
  </DashboardLayout>
</template>
