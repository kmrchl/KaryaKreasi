<template>
  <footer class="bg-[#2f2d2a] text-white">
    <div class="max-w-7xl mx-auto px-6 py-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
        <!-- Map Section -->
        <div class="w-full">
          <div class="relative w-full h-[280px] lg:h-[320px] rounded-lg overflow-hidden shadow-xl">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.952912260219!2d106.78516937499457!3d-6.516516993474484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3c3b3b3b3b3%3A0x3b3b3b3b3b3b3b3b!2sJl.%20Ciremei%20Ujung%2C%20Bantarjati%2C%20Kec.%20Bogor%20Utara%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016153!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
              width="100%"
              height="100%"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              class="absolute inset-0"
            ></iframe>
            
            <!-- Map Controls -->
            <div class="absolute top-3 left-3 bg-white rounded shadow-md overflow-hidden z-10">
              <button class="px-4 py-2 text-sm text-gray-700 border-r border-gray-200 hover:bg-gray-100 transition-colors">
                Map
              </button>
              <button class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                Satellite
              </button>
            </div>
            
            <!-- Zoom Controls -->
            <div class="absolute top-3 right-3 bg-white rounded shadow-md overflow-hidden z-10 flex flex-col">
              <button class="w-10 h-10 text-gray-700 border-b border-gray-200 hover:bg-gray-100 transition-colors text-xl">
                +
              </button>
              <button class="w-10 h-10 text-gray-700 hover:bg-gray-100 transition-colors text-xl">
                −
              </button>
            </div>
            
            <!-- Google Logo -->
            <div class="absolute bottom-3 left-3 z-10">
              <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="Google" class="h-5">
            </div>
          </div>
        </div>

        <!-- Contact & Social Media Section -->
        <div class="flex flex-col justify-center space-y-8">
          <!-- Contact Us -->
          <div>
            <h2 class="text-2xl md:text-3xl font-bold mb-6">Contact Us</h2>
            
            <div class="space-y-4 text-base md:text-lg">
              <div class="flex items-start gap-3">
                <svg class="w-6 h-6 mt-1 flex-shrink-0 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                <div>
                  <p class="leading-relaxed">Jl. Ciremei Ujung, RT.01/RW.10, Bantarjati, Kec. Bogor Utara</p>
                  <p class="mt-1">Kota Bogor, Jawa Barat 16153</p>
                </div>
              </div>

              <div class="flex items-center gap-3">
                <svg class="w-6 h-6 flex-shrink-0 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                <a href="mailto:serbakayukayu@gmail.com" class="hover:text-yellow-400 transition-colors">
                  Email : serbakayukayu@gmail.com
                </a>
              </div>

              <div class="flex items-center gap-3">
                <svg class="w-6 h-6 flex-shrink-0 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>
                <a href="tel:+6212345678900" class="hover:text-yellow-400 transition-colors">
                  Phone : +62 123 456 7890
                </a>
              </div>
            </div>
          </div>

          <!-- Social Media -->
          <div>
            <h3 class="text-2xl md:text-3xl font-bold mb-6">Our Social Medias</h3>
            
            <div class="flex flex-wrap gap-4">
              <!-- Instagram -->
              <a 
                href="https://www.instagram.com/arthanakarsa" 
                target="_blank"
                rel="noopener noreferrer"
                class="w-14 h-14 bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-all hover:scale-110 shadow-lg group"
                aria-label="Instagram"
              >
                <svg class="w-7 h-7 text-[#3d3d3d] group-hover:text-[#E4405F]" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
              </a>

              <!-- X (Twitter) -->
              <a 
                href="https://twitter.com/arthanakarsa" 
                target="_blank"
                rel="noopener noreferrer"
                class="w-14 h-14 bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-all hover:scale-110 shadow-lg group"
                aria-label="X (Twitter)"
              >
                <svg class="w-6 h-6 text-[#3d3d3d] group-hover:text-black" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
              </a>

              <!-- Facebook -->
              <a 
                href="https://www.facebook.com/arthanakarsa" 
                target="_blank"
                rel="noopener noreferrer"
                class="w-14 h-14 bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-all hover:scale-110 shadow-lg group"
                aria-label="Facebook"
              >
                <svg class="w-7 h-7 text-[#3d3d3d] group-hover:text-[#1877F2]" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>

              <!-- TikTok -->
              <a 
                href="https://www.tiktok.com/@arthanakarsa" 
                target="_blank"
                rel="noopener noreferrer"
                class="w-14 h-14 bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-all hover:scale-110 shadow-lg group"
                aria-label="TikTok"
              >
                <svg class="w-6 h-6 text-[#3d3d3d] group-hover:text-black" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/>
                </svg>
              </a>

              <!-- YouTube -->
              <a 
                href="https://www.youtube.com/@arthanakarsa" 
                target="_blank"
                rel="noopener noreferrer"
                class="w-14 h-14 bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-all hover:scale-110 shadow-lg group"
                aria-label="YouTube"
              >
                <svg class="w-8 h-8 text-[#3d3d3d] group-hover:text-[#FF0000]" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyright Bar -->
    <div class="border-t border-gray-600">
      <div class="max-w-7xl mx-auto px-6 py-4">
        <p class="text-center text-sm text-gray-400">
          &copy; 2025 Arthana Karsa. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
</template>

<script setup>
const props = defineProps({
  instagramUrl: {
    type: String,
    default: 'https://www.instagram.com/arthanakarsa'
  },
  twitterUrl: {
    type: String,
    default: 'https://twitter.com/arthanakarsa'
  },
  facebookUrl: {
    type: String,
    default: 'https://www.facebook.com/arthanakarsa'
  },
  tiktokUrl: {
    type: String,
    default: 'https://www.tiktok.com/@arthanakarsa'
  },
  youtubeUrl: {
    type: String,
    default: 'https://www.youtube.com/@arthanakarsa'
  }
})
</script>
<style scoped>
</style>