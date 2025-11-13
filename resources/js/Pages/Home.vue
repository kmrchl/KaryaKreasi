<template>
  <AppLayout>

    <!-- Hero Section (replace your old one here) -->
    <HeroSection
      title="Arthana Karsa"
      subtitle="Mewujudkan ide menjadi karya nyata dengan inovasi dan dedikasi tinggi."
      fromColor="#5D2410"
      toColor="#EDE1D1"
    />
    <!-- Hero Section -->
    <section class="py-16 px-6 md:px-20 flex flex-col md:flex-row items-center gap-10">
      <h1 class="text-5xl font-bold mb-4">Arthana Karsa</h1>
      <p class="text-lg max-w-2xl mx-auto">
        Mewujudkan ide menjadi karya nyata dengan inovasi dan dedikasi tinggi.
      </p>
    </section>

    <!-- About Section -->
    <section class="py-16 px-6 md:px-20 flex flex-col md:flex-row items-center gap-10">
      <div class="md:w-1/2">
        <img
          src="/images/profile.jpg"
          alt="Company"
          class="rounded-2xl shadow-lg w-full object-cover"
        />
      </div>
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4 text-indigo-600">Tentang Kami</h2>
        <p class="text-gray-600 leading-relaxed">
          Arthana karsa adalah perusahaan yang bergerak di bidang digital dan teknologi kreatif.
          Kami berkomitmen untuk menghadirkan solusi inovatif bagi kebutuhan masyarakat modern.
          Dengan tim profesional dan semangat kolaborasi, kami terus berkembang menciptakan karya yang berdampak.
        </p>
      </div>
    </section>

    <section class="py-16 px-6 md:px-20 flex flex-col md:flex-row-reverse items-center gap-10">
      <div class="md:w-1/2">
        <img
          src="/images/profile.jpg"
          alt="Company"
          class="rounded-2xl shadow-lg w-full object-cover"
        />
      </div>

      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4 text-indigo-600">Visi Misi</h2>
        <p class="text-gray-600 leading-relaxed">
          Arthana karsa adalah perusahaan yang bergerak di bidang digital dan teknologi kreatif.
          Kami berkomitmen untuk menghadirkan solusi inovatif bagi kebutuhan masyarakat modern.
          Dengan tim profesional dan semangat kolaborasi, kami terus berkembang menciptakan karya yang berdampak.
        </p>
      </div>
  </section>


    <!-- Visi & Misi -->
    <!-- <section class="bg-gray-100 py-16 px-6 md:px-20">
      <h2 class="text-3xl font-bold text-center text-indigo-600 mb-10">Visi & Misi</h2>
      <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
        <div class="p-6 bg-white shadow-lg rounded-2xl">
          <h3 class="text-xl font-semibold mb-2 text-indigo-500">Visi</h3>
          <p class="text-gray-600">
            Menjadi perusahaan kreatif terdepan yang memberikan dampak positif melalui karya digital yang inovatif dan berkelanjutan.
          </p>
        </div>
        <div class="p-6 bg-white shadow-lg rounded-2xl">
          <h3 class="text-xl font-semibold mb-2 text-indigo-500">Misi</h3>
          <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>Mengembangkan produk digital yang berkualitas tinggi.</li>
            <li>Mendukung kreativitas dan inovasi generasi muda.</li>
            <li>Membangun kolaborasi berkelanjutan dengan mitra strategis.</li>
          </ul>
        </div>
      </div>
    </section> -->

    <!-- Owner Info -->
    <section class="py-16 px-6 md:px-20 flex flex-col md:flex-row items-center gap-10">
      <div class="md:w-1/3">
        <img
          src="/images/owner.jpg"
          alt="Owner"
          class="rounded-full w-60 h-60 object-cover shadow-xl mx-auto"
        />
      </div>
      <div class="md:w-2/3 text-center md:text-left">
        <h2 class="text-3xl font-bold text-indigo-600 mb-4">Meet the Owner</h2>
        <p class="text-gray-600 leading-relaxed">
          <span class="font-semibold text-gray-800">Alexandra Pramudita</span> — pendiri Karya Kreasi.
          Dengan pengalaman lebih dari 10 tahun di dunia teknologi, beliau memimpin perusahaan dengan visi
          membangun ekosistem digital yang inklusif, kreatif, dan berdaya saing global.
        </p>
      </div>
    </section>

    <!-- Katalog -->
    <section>
      <div class="w-full py-10">
        <h2 class="text-3xl font-bold text-indigo-600 mb-6 text-center">
          Katalog Produk
        </h2>

        <div
          class="flex overflow-x-auto scroll-smooth space-x-6 px-6 snap-x snap-mandatory"
        >
          <div
            v-for="(item, index) in images"
            :key="index"
            class="min-w-full md:min-w-[600px] snap-center"
          >
            <img
              :src="item"
              class="w-full h-72 md:h-96 object-cover rounded-2xl shadow-lg"
            />
          </div>
        </div>
      </div>
    </section>
    

    <!-- Footer -->
    <!-- <footer class="bg-indigo-600 text-white py-6 text-center">
      <p>&copy; 2025 Karya Kreasi. All rights reserved.</p>
    </footer> -->
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/App.vue'
import HeroSection from '@/Components/HeroSection.vue'
// import KatalogSlider from '@/Components/KatalogSlider.vue'


const images = [
  "/images/katalog1.jpg",
  "/images/katalog2.jpg",
  "/images/katalog3.jpg",
  "/images/katalog4.jpg"
]
</script>
