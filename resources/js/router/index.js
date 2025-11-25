import { createRouter, createWebHistory } from 'vue-router'
import Login from '../Pages/Auth/Login.vue'

// Artikel
import ArtikelIndex from '../Pages/Dashboard/Artikel/Index.vue'
import ArtikelCreate from '../Pages/Dashboard/Artikel/Create.vue'
import ArtikelEdit from '../Pages/Dashboard/Artikel/Edit.vue'

const routes = [
  {
    path: '/login',
    name: 'login',
    component: Login,
  },

  // Artikel CRUD
  {
    path: '/admin/artikel',
    name: 'artikel.index',
    component: ArtikelIndex,
    meta: { requiresAuth: true }
  },
  {
    path: '/admin/artikel/create',
    name: 'artikel.create',
    component: ArtikelCreate,
    meta: { requiresAuth: true }
  },
  {
    path: '/admin/artikel/edit/:id',
    name: 'artikel.edit',
    component: ArtikelEdit,
    meta: { requiresAuth: true }
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

router.beforeEach((to, from, next) => {
  const token = localStorage.getItem('token')
  if (to.meta?.requiresAuth && !token) {
    next('/login')
  } else {
    next()
  }
})

export default router
