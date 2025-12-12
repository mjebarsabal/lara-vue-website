<template>
<div class="min-h-screen bg-gradient-to-b from-amber-50 to-rose-50">
    <Navbar />
    <div class="mx-auto max-w-6xl px-6 py-12">
    <div class="flex flex-col gap-3 text-center text-slate-900">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-rose-500">Fresh picks</p>
        <h2 class="text-4xl font-extrabold">Korean snacks, ramyeon, and drinks we love</h2>
        <p class="text-slate-700">All under one cozy roof. Simple, tasty, and ready to add to your cart.</p>
    </div>

    <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <div
        v-for="product in products"
        :key="product.name"
        class="group rounded-2xl bg-white/90 p-5 shadow-sm ring-1 ring-amber-100 transition hover:-translate-y-1 hover:shadow-lg hover:ring-rose-200"
        >
        <div class="relative overflow-hidden rounded-xl bg-amber-50">
            <img
            :src="product.image"
            :alt="product.name"
            class="h-40 w-full object-contain transition duration-300 group-hover:scale-105"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-rose-200/30 to-transparent opacity-0 transition group-hover:opacity-100"></div>
        </div>
        <div class="mt-4 flex items-start justify-between gap-2">
            <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-rose-500">{{ product.tag }}</p>
            <p class="text-lg font-bold text-slate-900">{{ product.name }}</p>
            </div>
            <p class="text-lg font-extrabold text-rose-600">{{ product.price }}</p>
        </div>
        <p class="mt-2 text-sm text-slate-700">{{ product.note }}</p>
        <button
            class="mt-4 w-full rounded-lg bg-[#e45757] px-4 py-2 text-sm font-semibold text-white transition hover:bg-[#cc4242] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-500"
        >
            Add to Cart
        </button>
        </div>
    </div>
    </div>
</div>
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';

const products = [
    {
    name: 'Shin Ramyun Bowl',
    price: '$4.50',
    tag: 'Spicy',
    note: 'Iconic heat with a rich, savory broth.',
    image: '/images/ramyeon.png',
    },
    {
    name: 'Jin Ramyeon Mild',
    price: '$3.80',
    tag: 'Comfort',
    note: 'Balanced flavor for easy weeknight slurps.',
    image: '/images/ramyeon.png',
    },
    {
    name: 'Samyang Buldak Carbonara',
    price: '$5.20',
    tag: 'Creamy Spice',
    note: 'Cheesy, peppery twist on the cult classic.',
    image: '/images/ramyeon.png',
    },
    {
    name: 'Pepero Almond',
    price: '$2.90',
    tag: 'Crunchy',
    note: 'Chocolate-dipped biscuit sticks studded with almonds.',
    image: '/images/snacks.png',
    },
    {
    name: 'Honey Butter Chips',
    price: '$3.50',
    tag: 'Sweet & Salty',
    note: 'The perfect balance of buttery sweetness.',
    image: '/images/snacks.png',
    },
    {
    name: 'Choco Pie (6 pack)',
    price: '$3.10',
    tag: 'Classic',
    note: 'Soft marshmallow cakes coated in chocolate.',
    image: '/images/snacks.png',
    },
    {
    name: 'Binggrae Banana Milk (6 pack)',
    price: '$7.80',
    tag: 'Best seller',
    note: 'Creamy banana goodness in the cutest bottles.',
    image: '/images/drinks.png',
    },
    {
    name: 'Lotte Milkis Soda',
    price: '$1.80',
    tag: 'Light & Fizzy',
    note: 'Creamy soda with a gentle citrus sparkle.',
    image: '/images/drinks.png',
    },
    {
    name: 'Aloe Vera Drink',
    price: '$2.40',
    tag: 'Refreshing',
    note: 'Hydrating, lightly sweet, with aloe pulp bits.',
    image: '/images/drinks.png',
    },
    {
    name: 'Yuzu Sparkling Tea',
    price: '$2.90',
    tag: 'Citrus',
    note: 'Bright yuzu with a soft fizz to cleanse the palate.',
    image: '/images/drinks.png',
    },
];
</script>