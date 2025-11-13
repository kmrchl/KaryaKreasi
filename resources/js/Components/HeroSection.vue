<template>
  <section
    class="text-white py-20 text-center"
    :style="{
      background: `linear-gradient(to right, ${fromColor}, ${toColor})`
    }"
  >
    <h1 class="text-5xl font-bold mb-4">{{ title }}</h1>
    <p class="text-lg max-w-2xl mx-auto">{{ subtitle }}</p>
  </section>
</template>

<script setup>
defineProps({
  title: String,
  subtitle: String,
  fromColor: { type: String, default: '#4f46e5' }, // indigo-600-ish
  toColor: { type: String, default: '#facc15' },   // yellow-400-ish
})
</script>
