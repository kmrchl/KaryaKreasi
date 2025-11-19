<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="py-3 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        <div class="relative rounded-2xl overflow-hidden bg-[#D6C8B6] h-[200px] md:h-[400px]">
          <img 
            src="@/assets/project.png" 
            alt="Arthana Karsa - Interior Design"
            class="w-full h-full object-cover"
          >
          <div class="absolute inset-0 flex items-center">
            <div class="text-left px-8 md:px-16 max-w-5xl">
              <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Our Project
              </h1>
              <p class="text-xl md:text-2xl text-white leading-relaxed">
                Beberapa projek yang telah kami kerjakan berhasil membuat customer puas.
              </p>
              <div class="flex gap-3 py-8">
                <button class="bg-white text-[#2C1810] px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-colors duration-300">
                  Konsultasi Gratis
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Project Section -->
    <section class="py-16 px-6 md:px-20 bg-[#EDE1D1]" style="font-family: 'Inter', sans-serif;">
      <div class="max-w-7xl mx-auto">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

          <!-- Gallery 1 - Large Left -->
          <div class="md:row-span-2 h-[400px] md:h-auto rounded-2xl overflow-hidden shadow-lg bg-[#D6C8B6] flex items-center justify-center">
            <span class="text-[#2C1810] font-semibold text-xl">Gallery 1</span>
          </div>

          <!-- Gallery 2 -->
          <div class="h-[250px] rounded-2xl overflow-hidden shadow-lg bg-[#D6C8B6] flex items-center justify-center">
            <span class="text-[#2C1810] font-semibold text-xl">Gallery 2</span>
          </div>

          <!-- Gallery 3 -->
          <div class="h-[250px] rounded-2xl overflow-hidden shadow-lg bg-[#D6C8B6] flex items-center justify-center">
            <span class="text-[#2C1810] font-semibold text-xl">Gallery 3</span>
          </div>

          <!-- Gallery 4 - Bottom Wide -->
          <div class="md:col-span-2 h-[250px] rounded-2xl overflow-hidden shadow-lg bg-[#D6C8B6] flex items-center justify-center">
            <span class="text-[#2C1810] font-semibold text-xl">Gallery 4</span>
          </div>

        </div>
      </div>
      
              <!-- Pagination -->
        <div class="flex items-center justify-center gap-3">
          <button 
            class="w-10 h-10 rounded-full bg-[#EDE1D1] text-[#5C4033] flex items-center justify-center hover:bg-[#5C4033] hover:text-white transition-colors"
            aria-label="Previous page">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>

          <button class="w-10 h-10 rounded-full bg-[#5C4033] text-white font-semibold hover:bg-[#2C1810] transition-colors">
            1
          </button>
          <button class="w-10 h-10 rounded-full bg-[#CDB79D] text-[#2C1810] font-semibold hover:bg-[#8B7355] hover:text-white transition-colors">
            2
          </button>
          <button class="w-10 h-10 rounded-full bg-[#CDB79D] text-[#2C1810] font-semibold hover:bg-[#8B7355] hover:text-white transition-colors">
            3
          </button>

          <button 
            class="w-10 h-10 rounded-full bg-[#EDE1D1] text-[#5C4033] flex items-center justify-center hover:bg-[#5C4033] hover:text-white transition-colors"
            aria-label="Next page"
          >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/App.vue'
</script>
