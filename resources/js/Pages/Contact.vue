<template>
  <AppLayout>
    <section class="max-w-lg mx-auto mt-10">
      <h2 class="text-3xl font-bold mb-4 text-center">Contact Us</h2>
      <form class="flex flex-col gap-4">
        <input type="text" placeholder="Your Name" class="border p-2 rounded" />
        <input type="email" placeholder="Your Email" class="border p-2 rounded" />
        <textarea placeholder="Your Message" class="border p-2 rounded h-32"></textarea>
        <button type="submit" class="bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
          Send Message
        </button>
      </form>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/App.vue'
</script>
