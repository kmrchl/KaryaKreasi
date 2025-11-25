<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="py-3 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <div class="relative rounded-2xl overflow-hidden bg-[#D6C8B6] h-[500px] md:h-[700px]">
          <img src="@/assets/sofa.png" alt="Arthana Karsa - Interior Design" class="w-full h-full object-cover">
          <div class="absolute inset-0 flex items-center">
            <div class="text-left px-8 md:px-16 max-w-4xl">
              <h1 class="text-4xl md:text-5xl font-semibold text-white mb-4">
                Arthana Karsa
              </h1>
              <p class="text-xl md:text-2xl text-white leading-relaxed">
                Semua kami kerjakan dengan cinta agar ruangan impianmu terasa lebih hidup, hangat, dan bermakna, karena
                setiap sudut ruang pasti punya makna dan cerita.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="py-12 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-[0.75fr_1fr] gap-5 items-stretch">
          <!-- About Box -->
          <div class="bg-[#7F6044] rounded-2xl p-6 md:p-8 flex flex-col justify-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">About Us</h2>
            <p class="leading-relaxed mb-5 text-sm opacity-95">
              Kami adalah tim yang berdedikasi di bidang interior design dan custom furniture, menghadirkan solusi ruang
              yang bukan hanya indah dipandang, tapi juga nyaman dan fungsional untuk setiap kebutuhan Anda.
            </p>
            <div class="flex gap-3">
              <button
                class="px-9 py-3 bg-white text-[#2C1810] rounded-full text-sm font-medium hover:bg-gray-100 transition-all hover:-translate-y-0.5">
                More...
              </button>
              <button
                class="px-9 py-3 bg-transparent text-white border-2 border-white rounded-full text-sm font-medium underline underline-offset-4 hover:bg-white hover:text-[#2C1810] transition-all">
                Order Now
              </button>
            </div>
          </div>
          <!-- About Image -->
          <div class="h-[280px] md:h-[320px] rounded-2xl overflow-hidden bg-[#D4C4B0]">
            <img src="@/assets/aboutus.jpg" alt="About Us" class="w-full h-full object-cover" />
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 px-6 md:px-20 bg-white" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <h2
          class="text-[2.7rem] font-semibold text-center text-[#2C1810] mb-12 drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
          Mengapa Memilih Arthana Karsa?</h2>

        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-[#EDE1D1] rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
            <div class="bg-[#C4A57B] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-[#2C1810] mb-4">Desain Berkualitas</h3>
            <p class="text-[#5C4033] leading-relaxed">
              Setiap desain dirancang dengan cermat mempertimbangkan estetika, fungsionalitas, dan kebutuhan klien.
            </p>
          </div>

          <div class="bg-[#EDE1D1] rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
            <div class="bg-[#C4A57B] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-[#2C1810] mb-4">Harga Bersahabat</h3>
            <p class="text-[#5C4033] leading-relaxed">
              Kami menawarkan harga yang kompetitif tanpa mengorbankan kualitas material dan pengerjaan.
            </p>
          </div>

          <div class="bg-[#EDE1D1] rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
            <div class="bg-[#C4A57B] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-[#2C1810] mb-4">Hasil Rapi</h3>
            <p class="text-[#5C4033] leading-relaxed">
              Pengerjaan profesional dengan perhatian detail tinggi menjamin hasil akhir yang memuaskan.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-[2.7rem] font-semibold mb-12 text-center text-black drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
          Explore Our Products!</h2>


        <!-- Carousel Wrapper -->
        <div class="relative flex items-center gap-5 mb-10">
          <button @click="prevSlide" :disabled="currentSlide === 0"
            class="w-12 h-12 rounded-full bg-[#C4A57B] text-white text-3xl flex items-center justify-center shadow-lg hover:bg-[#B89968] hover:scale-110 transition-all disabled:bg-[#D4C4B0] disabled:opacity-50 disabled:cursor-not-allowed flex-shrink-0">
            <span class="-mt-1">‹</span>
          </button>

          <div ref="carouselContainer" class="flex-1 overflow-hidden py-5">
            <div class="flex gap-5 transition-transform duration-500 ease-out"
              :style="{ transform: `translateX(${translateX}px)` }">
              <div v-for="(product, index) in products" :key="product.id_produk"
                class="flex-shrink-0 rounded-2xl overflow-hidden shadow-lg transition-all duration-500 ease-out" :class="{
                  'scale-85 opacity-60 h-96': index !== currentSlide + 1,
                  'scale-100 opacity-100 h-[450px] shadow-2xl z-10': index === currentSlide + 1
                }" :style="{ width: `calc(33.333% - 14px)` }">
                <img :src="product.gambar_url || product.gambar" :alt="product.produk"
                  class="w-full h-full object-cover">
                <div class="p-3 bg-white">
                  <h3 class="font-semibold text-lg">{{ product.produk }}</h3>
                  <p class="text-gray-600 text-sm mt-1">{{ product.deskripsi }}</p>
                  <p class="text-[#C4A57B] font-bold mt-2">${{ product.harga }}</p>
                </div>
              </div>
            </div>
          </div>

          <button @click="nextSlide" :disabled="currentSlide >= products.length - 3"
            class="w-12 h-12 rounded-full bg-[#C4A57B] text-white text-3xl flex items-center justify-center shadow-lg hover:bg-[#B89968] hover:scale-110 transition-all disabled:bg-[#D4C4B0] disabled:opacity-50 disabled:cursor-not-allowed flex-shrink-0">
            <span class="-mt-1">›</span>
          </button>
        </div>

        <p class="text-[#5C4033] leading-relaxed max-w-4xl mx-auto mb-9 text-center">
          Kamu lagi cari vendor custom furniture yang punya harga bersahabat, hasil rapi, dan desain yang bisa
          disesuaikan sepenuhnya dengan keinginanmu? Di sini, setiap detail kami buat dengan rasa, ketelitian, dan bahan
          pilihan agar ruang impianmu jadi nyata dengan sentuhan hangat kayu dan finishing terbaik dijamin tidak membuat
          dompet kamu menjerit
        </p>
        <button
          class="px-12 py-4 bg-[#C4A57B] text-[#2C1810] rounded-full font-medium shadow-lg hover:bg-[#B89968] hover:-translate-y-0.5 hover:shadow-xl transition-all mx-auto block">
          Click for more
        </button>
      </div>
    </section>

    <!-- Safari Collection Section -->
    <section class="py-24 px-6 text-white relative bg-cover bg-center" :style="{
      backgroundImage: `linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(${safariBg})`
    }" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-4xl text-left pl-8 md:pl-16">
        <h2 class="text-4xl font-bold leading-snug drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
          Yuk, konsultasi dulu aja GRATIS!
        </h2>
        <h2 class="text-4xl font-bold leading-snug drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
          Tim kami siap bantu wujudin ruangan impianmu dari pilihan desain dengan hasil yang estetik dan fungsional.
        </h2>
      </div>
    </section>


    <!-- Gallery Section -->
    <section class="py-16 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <h2
          class="text-[2.7rem] md:text-5xl font-bold text-center text-[#2C1810] mb-12 drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
          Gallery</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div v-for="image in galleryImages" :key="image.id"
            :class="`${image.style} rounded-2xl overflow-hidden shadow-lg flex items-center justify-center`">
            <img :src="image.src" :alt="image.alt" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="relative overflow-hidden bg-[#6A704C]" style="font-family: 'Inter', sans-serif;">
      <!-- Split Background -->
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 bottom-0" style="width: 60%;">
          <img src="@/assets/testimonial-bg.jpg" alt="Office Environment" class="w-full h-full object-cover" />
        </div>
      </div>

      <!-- Content -->
      <div class="relative z-10 py-12 px-6 md:px-20">
        <div class="max-w-7xl mx-auto">
          <div class="grid md:grid-cols-[0.8fr_2.8fr] gap-0 items-center">
            <div></div>
            <div class="flex flex-col py-8 md:pl-6">
              <h2
                class="text-[2.7rem] md:text-5xl font-bold text-white mb-8 leading-tight pl-3 md:pl-6 drop-shadow-[0_4px_6px_rgba(0,0,0,0.55)]">
                Here’s what our satisfied <br />
                customers are saying
              </h2>


              <!-- Carousel Container -->
              <div class="relative">
                <div class="overflow-hidden">
                  <div class="flex transition-transform duration-500 ease-out"
                    :style="{ transform: `translateX(-${testimonialIndex * 100}%)` }">
                    <!-- Testimonial Pages -->
                    <div v-for="(page, pageIndex) in testimonialPages" :key="pageIndex" class="w-full flex-shrink-0">
                      <div class="grid grid-cols-3 gap-3">
                        <div v-for="(testimonial, cardIndex) in page" :key="cardIndex"
                          class="bg-white rounded-xl p-5 shadow-lg">
                          <!-- Customer Info -->
                          <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-[#C4A57B] flex-shrink-0"></div>
                            <div>
                              <h3 class="text-base font-bold text-[#2C1810]">{{ testimonial.name }}</h3>
                              <!-- Stars -->
                              <div class="flex gap-0.5 mt-0.5">
                                <svg v-for="star in 5" :key="star" class="w-3.5 h-3.5 text-yellow-400 fill-current"
                                  viewBox="0 0 20 20">
                                  <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                              </div>
                            </div>
                          </div>
                          <!-- Testimonial Text -->
                          <p class="text-[#2C1810] text-xs leading-relaxed">
                            {{ testimonial.text }}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="flex justify-end gap-3 mt-5">
                  <button @click="prevTestimonial" :disabled="testimonialIndex === 0"
                    class="w-10 h-10 rounded-full bg-[#C4A57B] text-white flex items-center justify-center hover:bg-[#B89968] transition-all disabled:bg-[#8B7355] disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                  </button>
                  <button @click="nextTestimonial" :disabled="testimonialIndex >= testimonialPages.length - 1"
                    class="w-10 h-10 rounded-full bg-[#C4A57B] text-white flex items-center justify-center hover:bg-[#B89968] transition-all disabled:bg-[#8B7355] disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Timeline Order Section -->
    <section class="py-8 px-6 md:px-16 bg-[#4A3C32]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-4xl mx-auto">
        <h2
          class="text-[2.2rem] md:text-[2.8rem] font-bold text-white text-center mb-12 drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
          Timeline Order Arthana Karsa
        </h2>

        <div class="space-y-5">
          <div>
            <h3
              class="text-white text-sm md:text-base font-medium mb-2 text-center drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
              Konsultasi dan Estimasi Harga
            </h3>
            <div class="relative w-full h-5 bg-white rounded-full overflow-hidden">
              <div class="absolute left-0 top-0 h-full bg-gradient-to-r from-white to-[#A1281E]" style="width: 5%">
              </div>
              <span
                class="absolute left-1 top-1/2 -translate-y-1/2 text-[#4A3C32] text-[10px] font-semibold z-10">1%</span>
              <span class="absolute right-1 top-1/2 -translate-y-1/2 text-[#4A3C32] text-[10px] font-semibold">5%</span>
            </div>
          </div>

          <div>
            <h3 class="text-white text-sm md:text-base font-medium mb-2 text-center">
              Survey Lokasi
            </h3>
            <div class="relative w-full h-5 bg-white rounded-full overflow-hidden">
              <div class="absolute left-0 top-0 h-full bg-gradient-to-r from-white to-[#A1281E]" style="width: 10%">
              </div>
              <span
                class="absolute left-10 top-1/2 -translate-y-1/2 text-[#4A3C32] text-[10px] font-semibold z-10">5%</span>
              <span
                class="absolute left-16 top-1/2 -translate-y-1/2 text-[#4A3C32] text-[10px] font-semibold z-10">10%</span>
            </div>
          </div>

          <div>
            <h3 class="text-white text-sm md:text-base font-medium mb-2 text-center">
              Pembayaran DP dan Pengerjaan Design – Penyerahan Kontrak Kerja
            </h3>
            <div class="relative w-full h-5 bg-white rounded-full overflow-hidden">
              <div class="absolute left-0 top-0 h-full bg-gradient-to-r from-white to-[#A1281E]" style="width: 20%">
              </div>
              <span
                class="absolute left-16 top-1/2 -translate-y-1/2 text-[#4A3C32] text-[10px] font-semibold z-10">10%</span>
              <span
                class="absolute left-[18%] top-1/2 -translate-y-1/2 text-white text-[10px] font-semibold z-10">20%</span>
            </div>
          </div>

          <div>
            <h3 class="text-white text-sm md:text-base font-medium mb-2 text-center">
              Pengerjaan Konstruksi Furniture Unfinish – Pembayaran Tahap 2 Finishing
            </h3>
            <div class="relative w-full h-5 bg-white rounded-full overflow-hidden">
              <div class="absolute left-0 top-0 h-full bg-gradient-to-r from-white to-[#A1281E]" style="width: 50%">
              </div>
              <span
                class="absolute left-[18%] top-1/2 -translate-y-1/2 text-[#4A3C32] text-[10px] font-semibold z-10">20%</span>
              <span
                class="absolute left-[48%] top-1/2 -translate-y-1/2 text-white text-[10px] font-semibold z-10">50%</span>
            </div>
          </div>

          <div>
            <h3 class="text-white text-sm md:text-base font-medium mb-2 text-center">
              Pengerjaan Finishing Hingga Selesai dan Siap Kirim – Pembayaran Tahap 3 Pengiriman
            </h3>
            <div class="relative w-full h-5 bg-white rounded-full overflow-hidden">
              <div class="absolute left-0 top-0 h-full bg-gradient-to-r from-white to-[#A1281E]" style="width: 90%">
              </div>
              <span
                class="absolute left-[48%] top-1/2 -translate-y-1/2 text-[#4A3C32] text-[10px] font-semibold z-10">50%</span>
              <span
                class="absolute right-10 top-1/2 -translate-y-1/2 text-white text-[10px] font-semibold z-10">90%</span>
            </div>
          </div>

          <div>
            <h3 class="text-white text-sm md:text-base font-medium mb-2 text-center">
              Pengiriman dan Instalasi – Final Touch di Area – Pelunasan
            </h3>
            <div class="relative w-full h-5 bg-white rounded-full overflow-hidden">
              <div class="absolute left-0 top-0 h-full bg-gradient-to-r from-white to-[#A1281E]" style="width: 100%">
              </div>
              <span
                class="absolute right-16 top-1/2 -translate-y-1/2 text-[#4A3C32] text-[10px] font-semibold z-10">90%</span>
              <span
                class="absolute right-1 top-1/2 -translate-y-1/2 text-white text-[10px] font-semibold z-10">100%</span>
            </div>
          </div>
        </div>

        <!-- WhatsApp Button -->
        <div class="flex justify-center mt-12 mb-4">
          <a href="https://wa.me/6281234567890" target="_blank"
            class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20BD5A] text-white text-base md:text-lg font-semibold px-6 py-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
            Hubungi kami di Whatsapp
          </a>
        </div>
      </div>
    </section>

    <!-- Konsultasi Section -->
    <section class="relative py-0 px-0" style="font-family: 'Inter', sans-serif;">
      <div class="relative h-[600px] w-full">
        <img src="@/assets/konsultasi.png" alt="Konsultasi Background" class="w-full h-full object-cover" />
        <!-- Gray Overlay -->
        <div class="absolute inset-0 bg-gray-200/35"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
          <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Konsultasi Bersama Kami
          </h2>
          <p class="text-white text-lg md:text-xl max-w-3xl leading-relaxed mb-8">
            Semua kami kerjakan dengan cinta agar ruangan impianmu terasa lebih hidup, hangat, dan bermakna, karena
            setiap sudut ruang pasti punya makna dan cerita.
          </p>
          <button @click="redirectToWA"
            class="bg-white text-[#2C1810] px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-colors duration-300">
            Konsultasi Gratis
          </button>
        </div>
      </div>
    </section>

    <!-- Material Section -->
    <section class="py-16 px-6 md:px-20 bg-[#6A704C]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
          <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
            Material yang Kami Gunakan
          </h2>
          <p class="text-white text-lg md:text-xl max-w-4xl mx-auto leading-relaxed">
            Di Arthana Karsa, kami percaya keindahan dan ketahanan harus berjalan beriringan. Karena itu, setiap produk
            kami dibuat dengan material pilihan — Blockmin tebal 18mm, yang dikenal kuat, stabil, dan tahan lama untuk
            berbagai kebutuhan interior.
          </p>
        </div>

        <!-- Material Cards -->
        <div class="grid md:grid-cols-3 gap-6">
          <div class="bg-[#E8DCC8] rounded-3xl h-72 overflow-hidden">
            <div class="w-full h-full flex items-center justify-center">
              <img src="@/assets/material.png" alt="Material 1" class="w-full h-full object-cover" />
            </div>
          </div>
          <div class="bg-[#E8DCC8] rounded-3xl h-72 overflow-hidden">
            <div class="w-full h-full flex items-center justify-center">
              <img src="@/assets/material.png" alt="Material 2" class="w-full h-full object-cover" />
            </div>
          </div>
          <div class="bg-[#E8DCC8] rounded-3xl h-72 overflow-hidden">
            <div class="w-full h-full flex items-center justify-center">
              <img src="@/assets/material.png" alt="Material 3" class="w-full h-full object-cover" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Artikel Section -->
    <section class="py-16 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <h2
          class="text-[2.7rem] md:text-5xl font-bold text-center text-[#2C1810] mb-12 drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
          Latest Articles
        </h2>

        <!-- Loader/Error -->
        <div v-if="loading" class="text-center text-[#2C1810] mb-6">Loading articles...</div>
        <div v-if="error" class="text-center text-red-500 mb-6">{{ error }}</div>

        <!-- Article Cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
          <div v-for="article in articles" :key="article.id" class="rounded-lg overflow-hidden shadow-sm">
            <img :src="article.thumbnail || '@/assets/default-article.png'" :alt="article.judul"
              class="w-full h-56 object-cover mb-3" />
            <div>
              <h3 class="text-xl font-bold text-[#2C1810] mb-3">{{ article.judul }}</h3>
              <p class="text-[#5C4033] text-sm leading-relaxed mb-4">
                {{ article.deskripsi ? article.deskripsi.slice(0, 120) + '...' : 'No description available.' }}
              </p>
              <a :href="article.url" target="_blank"
                class="text-[#8B7355] font-semibold text-sm hover:text-[#5C4033] transition-colors">
                Read More....
              </a>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-center gap-3">
          <!-- Previous -->
          <button :disabled="meta.current_page === 1" @click="fetchArticles(meta.current_page - 1)"
            class="w-10 h-10 rounded-full bg-[#EDE1D1] text-[#5C4033] flex items-center justify-center hover:bg-[#5C4033] hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>

          <!-- Page Numbers -->
          <button v-for="page in meta.last_page" :key="page" @click="fetchArticles(page)" :class="[
            'w-10 h-10 rounded-full font-semibold transition-colors',
            meta.current_page === page ? 'bg-[#5C4033] text-white' : 'bg-[#CDB79D] text-[#2C1810] hover:bg-[#8B7355] hover:text-white'
          ]">
            {{ page }}
          </button>

          <!-- Next -->
          <button :disabled="meta.current_page === meta.last_page" @click="fetchArticles(meta.current_page + 1)"
            class="w-10 h-10 rounded-full bg-[#EDE1D1] text-[#5C4033] flex items-center justify-center hover:bg-[#5C4033] hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>


      </div>
    </section>

  </AppLayout>
</template>

<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue'
import AppLayout from '@/Layouts/App.vue'
import HeroSection from '@/Components/HeroSection.vue'
import safariBg from '@/assets/safari-bg.png'
import axios from 'axios'

// Redirect to WA
const redirectToWA = () => {
  window.open("https://wa.me/6281234567890", "_blank")
}

// Gallery images (pakai path dari /src/assets/)
// import gambar dulu biar Vite ngerti
import Kitchen1 from '@/assets/Kitchen1.jpg'
import Kitchen2 from '@/assets/Kitchen2.jpg'
import Kitchen3 from '@/assets/Kitchen3.jpg'
import Kitchen4 from '@/assets/Kitchen4.jpg'

const galleryImages = ref([
  { id: 1, src: Kitchen1, alt: 'Gallery 1', style: 'md:row-span-2 h-[400px]' },
  { id: 2, src: Kitchen2, alt: 'Gallery 2', style: 'h-[250px]' },
  { id: 3, src: Kitchen3, alt: 'Gallery 3', style: 'h-[250px]' },
  { id: 4, src: Kitchen4, alt: 'Gallery 4', style: 'md:col-span-2 h-[250px]' }
])


// Products Carousel
// Carousel state
const currentSlide = ref(0)
const translateX = ref(0)
const itemWidth = ref(0)
const carouselContainer = ref(null)

// Products state
const products = ref([])

// Fetch products from API
const fetchProducts = async () => {
  try {
    const res = await axios.get('/produk')
    products.value = res.data.data // karena pakai ProductResource collection
  } catch (err) {
    console.error('Failed to fetch products:', err)
  }
}

// Carousel logic
const calculateItemWidth = () => {
  if (carouselContainer.value) {
    const containerWidth = carouselContainer.value.offsetWidth
    itemWidth.value = containerWidth / 3
  }
}
const nextSlide = () => {
  if (currentSlide.value < products.value.length - 3) {
    currentSlide.value++
    translateX.value = -(currentSlide.value * (itemWidth.value + 20))
  }
}


const prevSlide = () => {
  if (currentSlide.value > 0) {
    currentSlide.value--
    translateX.value = -(currentSlide.value * (itemWidth.value + 20))
  }
}

// Lifecycle hooks
onMounted(() => {
  fetchProducts()
  calculateItemWidth()
  window.addEventListener('resize', calculateItemWidth)
})

onBeforeUnmount(() => {
  window.removeEventListener('resize', calculateItemWidth)
})

// State untuk simpan data artikel
const articles = ref([])
const loading = ref(false)
const error = ref(null)
const meta = ref({ current_page: 1, last_page: 1 })

// Function fetch artikel dari API
const fetchArticles = async () => {
  loading.value = true
  try {
    const response = await axios.get('/artikel') // karena baseURL = /api
    articles.value = response.data.data || response.data // kalau paginate, ambil data.data
  } catch (err) {
    console.error('Failed to fetch articles:', err)
    error.value = err.message || 'Gagal load artikel'
  } finally {
    loading.value = false
  }
}

// Lifecycle hook
onMounted(() => {
  fetchArticles()
})




// Testimonials Carousel
const testimonialIndex = ref(0)

const testimonials = ref([
  {
    name: 'Customer 1',
    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.'
  },
  {
    name: 'Customer 2',
    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.'
  },
  {
    name: 'Customer 3',
    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.'
  },
  {
    name: 'Customer 4',
    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.'
  }
])

// Group testimonials into pages of 2
const testimonialPages = computed(() => {
  const pages = []
  for (let i = 0; i < testimonials.value.length; i += 3) {
    pages.push(testimonials.value.slice(i, i + 3))
  }
  return pages
})

const nextTestimonial = () => {
  if (testimonialIndex.value < testimonialPages.value.length - 1) {
    testimonialIndex.value++
  }
}

const prevTestimonial = () => {
  if (testimonialIndex.value > 0) {
    testimonialIndex.value--
  }
}

// Lifecycle Hooks
onMounted(() => {
  calculateItemWidth()
  window.addEventListener('resize', calculateItemWidth)
})

onBeforeUnmount(() => {
  window.removeEventListener('resize', calculateItemWidth)
})
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap');
</style>