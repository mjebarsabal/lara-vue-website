<template>
<div class="bg-gradient-to-b from-amber-50 to-rose-50 min-h-screen">
    <Navbar />
    <div class="mx-auto max-w-5xl px-6 py-12 space-y-10 text-slate-900">
    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-rose-500">Our Story</p>
        <h2 class="mt-2 text-4xl font-extrabold">Your friendly Korean pantry, delivered with heart.</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-700">
        Chingu started as a late-night craving for comfort food and quickly grew into a cozy shop
        for ramyeon, crispy snacks, and refreshing drinks. We keep things simple: honest ingredients,
        fair prices, and a curated selection that feels like home.
        </p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        <div class="rounded-2xl bg-white/80 p-6 shadow-sm ring-1 ring-amber-100">
        <h3 class="text-xl font-semibold text-rose-600">What we believe</h3>
        <p class="mt-2 text-slate-700">Food should be comforting, playful, and easy to enjoy.</p>
        </div>
        <div class="rounded-2xl bg-white/80 p-6 shadow-sm ring-1 ring-amber-100">
        <h3 class="text-xl font-semibold text-rose-600">How we source</h3>
        <p class="mt-2 text-slate-700">Partnering with Korean brands we love and trust, shipped fresh.</p>
        </div>
        <div class="rounded-2xl bg-white/80 p-6 shadow-sm ring-1 ring-amber-100">
        <h3 class="text-xl font-semibold text-rose-600">Why it matters</h3>
        <p class="mt-2 text-slate-700">Sharing culture through flavors that spark joy around the table.</p>
        </div>
    </div>

    <div class="grid gap-6 rounded-2xl bg-white/80 p-8 shadow-sm ring-1 ring-amber-100 md:grid-cols-2">
        <div class="space-y-3">
        <h3 class="text-2xl font-bold text-rose-600">Simple promise</h3>
        <p class="text-slate-700">Clear labels, transparent pricing, and friendly support when you need it.</p>
        <p class="text-slate-700">Whether you are new to Korean snacks or a longtime fan, we keep the experience warm and approachable.</p>
        </div>
        <div class="space-y-3">
        <h3 class="text-2xl font-bold text-rose-600">Visit or say hi</h3>
        <p class="text-slate-700">Serving the community online 24/7 and at our weekend pop-ups.</p>
        <p class="text-slate-700">DM us your favorite finds—we love discovering new treats together.</p>
        </div>
    </div>
    </div>
</div>
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';
</script>