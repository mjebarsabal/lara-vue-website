<template>
<div class="flex flex-col min-h-screen">
    <Navbar />

    <!-- Hero Banner -->
<section class="bg-gradient-to-b from-amber-50 to-rose-50 text-center py-20 px-6">
    <div class="mx-auto max-w-4xl">
    <h1 class="text-5xl font-extrabold text-slate-900 drop-shadow-sm">The Taste of Seoul is Calling!</h1>
    <p class="mt-4 text-lg text-slate-700">Let Your Chingu stock your pantry with Korean flavor.</p> 
    <button class="mt-8 inline-flex items-center justify-center rounded-full bg-[#e45757] px-7 py-3 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-[#cc4242]">
        Browse Products
    </button>
    </div>
    </section>

    <!-- Featured Products -->
    <section class="p-10">
    <h2 class="text-3xl font-bold mb-6 text-center text-slate-100">Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Ramyeon -->
        <div class="rounded-2xl bg-white/90 p-6 text-center shadow-sm ring-1 ring-amber-100">
        <img src="/images/ramyeon.png" alt="Ramyeon" class="w-full h-85 object-cover rounded-lg" />
        <p class="mt-4 font-semibold text-lg text-slate-900">Ramyeon</p>
        </div>
        <!-- Snacks -->
        <div class="rounded-2xl bg-white/90 p-6 text-center shadow-sm ring-1 ring-amber-100">
        <img src="/images/snacks.png" alt="Snacks" class="w-full h-85 object-cover rounded-lg" />
        <p class="mt-4 font-semibold text-lg text-slate-900">Snacks</p>
        </div>
        <!-- Drinks -->
        <div class="rounded-2xl bg-white/90 p-6 text-center shadow-sm ring-1 ring-amber-100">
        <img src="/images/drinks.png" alt="Drinks" class="w-full h-85 object-cover rounded-lg" />
        <p class="mt-4 font-semibold text-lg text-slate-900">Drinks</p>
        </div>
    </div>
    </section>

    <Footer />
</div>
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
</script>

#got the products here https://k-ramen.eu/

