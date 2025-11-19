<template>
  <nav class="navbar">
    <!-- Top Row: Logo, Title, Search -->
    <div class="navbar-top">
      <div class="container">
        <div class="brand-section">
          <div class="logo-circle">
            <img src="@/assets/logo.png" alt="Logo" class="logo-img">
          </div>
          <div class="brand-text">
            <h1>Arthana Karsa</h1>
            <p>Interior & Jasa Custom Furnitur</p>
          </div>
        </div>
        <div class="search-bar">
          <input type="text" placeholder="Search...">
          <button class="search-btn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
              <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
              <path d="M21 21L16.65 16.65" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
    
    <!-- Bottom Row: Menu -->
    <div class="navbar-bottom">
      <div class="container">
        <ul class="nav-links">
          <li>
            <Link 
              :href="route('home')" 
              :class="{ 'active': isActive('home') }"
            >
              HOME
            </Link>
          </li>
          <li>
            <Link 
              :href="route('about')" 
              :class="{ 'active': isActive('about') }"
            >
              ABOUT
            </Link>
          </li>
          <li>
            <Link 
              :href="route('products')" 
              :class="{ 'active': isActive('products') }"
            >
              PRODUCTS
            </Link>
          </li>
          <li>
            <Link 
              :href="route('project')" 
              :class="{ 'active': isActive('project') }"
            >
              PROJECT
            </Link>
          </li>
          <li>
            <Link 
              :href="route('contact')" 
              :class="{ 'active': isActive('contact') }"
            >
              CONTACT
            </Link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const page = usePage()

const currentRoute = computed(() => page.props.ziggy?.location || route().current())

const isActive = (routeName) => {
  return route().current(routeName)
}
</script>

<style scoped>
.navbar {
  background-color: #EDE1D1;
  position: sticky;
  top: 0;
  z-index: 1000;
}

/* Top Row */
.navbar-top {
  padding: 12px 0;
  border-bottom: 1px solid #D4C4B0;
}

.navbar-top .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.brand-section {
  display: flex;
  align-items: center;
  gap: 15px;
  flex-shrink: 0;
}

.logo-circle {
  width: 45px;
  height: 45px;
  background-color: #FFE500;
  border-radius: 50%;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.logo-img {
  width: 70%;
  height: 70%;
  object-fit: contain;
}

.brand-text h1 {
  color: #1A1A1A;
  font-size: 20px;
  font-weight: 700;
  margin: 0;
  line-height: 1.2;
}

.brand-text p {
  color: #1A1A1A;
  font-size: 11px;
  font-weight: 400;
  margin: 2px 0 0 0;
}

/* Search Bar */
.search-bar {
  display: flex;
  align-items: center;
  background-color: #C9B8A3;
  border-radius: 50px;
  padding: 6px 12px;
  flex: 1;
  max-width: 900px;
  margin-left: 20px;
}

.search-bar input {
  flex: 1;
  border: none;
  background: transparent;
  padding: 6px 15px;
  font-size: 14px;
  color: #1A1A1A;
  outline: none;
}

.search-bar input::placeholder {
  color: #6B5D4F;
}

.search-btn {
  background: transparent;
  border: none;
  color: #1A1A1A;
  cursor: pointer;
  padding: 5px 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Bottom Row - Menu */
.navbar-bottom {
  padding: 0;
}

.navbar-bottom .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.nav-links {
  display: flex;
  list-style: none;
  gap: 80px;
  margin: 0;
  padding: 0;
}

.nav-links li {
  margin: 0;
}

.nav-links a {
  color: #1A1A1A;
  text-decoration: none;
  font-size: 12px;
  font-weight: 600;
  padding: 15px 0;
  display: block;
  transition: color 0.3s;
  letter-spacing: 0.5px;
}

.nav-links a:hover,
.nav-links a.active {
  color: #8B7355;
}

/* Responsive */
@media (max-width: 968px) {
  .navbar-top .container {
    flex-direction: column;
    gap: 20px;
  }
  
  .search-bar {
    width: 100%;
    margin-left: 0;
  }
  
  .nav-links {
    gap: 40px;
  }
  
  .nav-links a {
    font-size: 11px;
  }
}

@media (max-width: 768px) {
  .navbar-top .container {
    padding: 0 15px;
  }
  
  .navbar-bottom .container {
    padding: 0 15px;
  }
  
  .brand-text h1 {
    font-size: 18px;
  }
  
  .brand-text p {
    font-size: 10px;
  }
  
  .logo-circle {
    width: 40px;
    height: 40px;
  }
  
  .nav-links {
    gap: 25px;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    -ms-overflow-style: none;
  }
  
  .nav-links::-webkit-scrollbar {
    display: none;
  }
  
  .nav-links a {
    font-size: 11px;
    white-space: nowrap;
    padding: 12px 0;
  }
}

@media (max-width: 480px) {
  .navbar-top {
    padding: 10px 0;
  }
  
  .brand-section {
    gap: 10px;
  }
  
  .brand-text h1 {
    font-size: 16px;
  }
  
  .brand-text p {
    font-size: 9px;
  }
  
  .logo-circle {
    width: 35px;
    height: 35px;
  }
  
  .search-bar {
    padding: 5px 10px;
  }
  
  .search-bar input {
    font-size: 13px;
    padding: 5px 12px;
  }
  
  .nav-links {
    gap: 20px;
  }
  
  .nav-links a {
    font-size: 10px;
    padding: 10px 0;
  }
}
</style>