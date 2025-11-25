<script setup>
import { ref, onMounted } from 'vue';
import { router } from '@inertiajs/vue3';
import axios from 'axios';

const props = defineProps({
    id: Number,       // ← ID produk yang dikirim dari web.php
    produk: Object,   // ← Data produk
});

const form = ref({
    id_kategori: '',
    produk: '',
    deskripsi: '',
    harga: '',
    gambar: null,
});

const kategoriList = ref([]);
const oldImage = ref(null);

// Fetch data awal
onMounted(async () => {
    form.value.id_kategori = props.produk.id_kategori;
    form.value.produk = props.produk.produk;
    form.value.deskripsi = props.produk.deskripsi;
    form.value.harga = props.produk.harga;
    oldImage.value = props.produk.gambar;

    const kategoriRes = await fetch('/api/kategori');
    const kategoriData = await kategoriRes.json();
    kategoriList.value = kategoriData.data;
});

// Submit update
const submitForm = async () => {
    const payload = new FormData();

    payload.append('id_kategori', form.value.id_kategori);
    payload.append('produk', form.value.produk);
    payload.append('deskripsi', form.value.deskripsi);
    payload.append('harga', form.value.harga);

    if (form.value.gambar) {
        payload.append('gambar', form.value.gambar);
    }

    payload.append('_method', 'PUT'); // Spoofing PUT method

    try {
        await axios.post(`/produk/${props.id}`, payload, {
            headers: { 'Content-Type': 'multipart/form-data' }
        });

        alert('Produk berhasil diperbarui!');
        router.visit('/admin/produk');

    } catch (err) {
        console.error(err);
        alert('Gagal update produk');
    }
};
</script>

<template>
    <div class="max-w-xl mx-auto mt-10 space-y-4">

        <h1 class="text-xl font-bold mb-4">Edit Produk</h1>

        <div>
            <label>Kategori</label>
            <select v-model="form.id_kategori" class="w-full border p-2 rounded">
                <option value="">-- pilih kategori --</option>
                <option v-for="k in kategoriList" :key="k.id_kategori" :value="k.id_kategori">
                    {{ k.kategori }}
                </option>
            </select>
        </div>

        <div>
            <label>Nama Produk</label>
            <input v-model="form.produk" class="w-full border p-2 rounded" />
        </div>

        <div>
            <label>Deskripsi</label>
            <textarea v-model="form.deskripsi" class="w-full border p-2 rounded"></textarea>
        </div>

        <div>
            <label>Harga</label>
            <input v-model="form.harga" type="number" class="w-full border p-2 rounded" />
        </div>

        <div>
            <label>Gambar Baru (opsional)</label>
            <input type="file" @change="e => form.gambar = e.target.files[0]" />

            <div v-if="oldImage" class="mt-2">
                <p class="text-sm text-gray-500">Gambar saat ini:</p>
                <img :src="`/storage/${oldImage}`" class="w-32 rounded shadow" />
            </div>
        </div>

        <button
            @click="submitForm"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
        >
            Update Produk
        </button>

    </div>
</template>
