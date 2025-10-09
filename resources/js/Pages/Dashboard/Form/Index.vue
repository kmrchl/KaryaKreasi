<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { usePage } from '@inertiajs/vue3'

const { props } = usePage()
const forms = props.forms || []
</script>

<template>
  <DashboardLayout>
    <h2 class="text-2xl font-bold mb-6">Pesan dari Company Profile</h2>

    <table class="w-full bg-white rounded shadow">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-3 text-left">Nama</th>
          <th class="p-3 text-left">Email</th>
          <th class="p-3 text-left">Pesan</th>
        </tr>
      </thead>
      <tbody>
        <!-- <tr v-for="item in forms" :key="item.id" class="border-b hover:bg-gray-50">
          <td class="p-3">{{ item.nama }}</td>
          <td class="p-3">{{ item.email }}</td>
          <td class="p-3">{{ item.pesan }}</td>
        </tr> -->
      </tbody>
    </table>
  </DashboardLayout>
</template>
