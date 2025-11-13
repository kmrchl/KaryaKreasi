import '../css/app.css';
import './bootstrap';
import 'aos/dist/aos.css';
import axios from 'axios'
// import axios from 'axios';
// import { createApp } from 'vue'
import { createApp, h } from 'vue';
import AOS from 'aos';
import router from './router'

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

axios.defaults.baseURL = '/api'
axios.defaults.headers.common['Accept'] = 'application/json'
axios.interceptors.request.use(config => {
  const token = localStorage.getItem('token')
  if (token) {
    config.headers.Authorization = `Bearer ${token}`
  }
  return config
})

const appName = import.meta.env.VITE_APP_NAME || 'Karya Kreasi';


createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const vueApp = createApp({ render: () => h(App, props) });
        vueApp.use(plugin);
        vueApp.use(ZiggyVue);
        vueApp.mount(el);
        AOS.init(); // ⬅️ inisialisasi animasi di sini biar aman
    },
    progress: {
        color: '#4B5563',
    },
});
