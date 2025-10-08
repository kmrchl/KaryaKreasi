<template>
  <nav class="bg-blue-600 text-white p-4 shadow-md flex justify-between items-center">
    <h1 class="text-2xl font-bold">Karya Kreasi</h1>
    <ul class="flex gap-6">
      <li><Link href="/">Home</Link></li>
      <li><Link href="/catalog">Catalog</Link></li>
      <li><Link href="/contact">Contact</Link></li>
    </ul>
  </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
