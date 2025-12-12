<template>
<div class="min-h-screen flex flex-col bg-gradient-to-b from-amber-50 to-rose-50">
    <Navbar />

    <section class="flex-grow px-6 py-12 max-w-2xl mx-auto text-center">
    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-rose-500">Get in touch</p>
    <p class="text-slate-700 mb-10">
        We would be happy to answer any of your queries! Send us a message and we will reach out shortly.
    </p>

    <form class="bg-white/90 p-8 rounded-2xl shadow-sm ring-1 ring-amber-100 space-y-4">
        <input
        type="text"
        placeholder="Name"
        class="w-full rounded-lg border border-amber-200 bg-amber-50/50 p-3 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-rose-400"
        />
        <input
        type="email"
        placeholder="Email"
        class="w-full rounded-lg border border-amber-200 bg-amber-50/50 p-3 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-rose-400"
        />
        <textarea
        rows="5"
        placeholder="Message"
        class="w-full rounded-lg border border-amber-200 bg-amber-50/50 p-3 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-rose-400"
        ></textarea>
        <button
        type="submit"
        class="w-full rounded-lg bg-[#e45757] py-3 text-sm font-semibold text-white transition hover:bg-[#cc4242] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-500"
        >
        Submit
        </button>
    </form>
    </section>

    <Footer />
</div>
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
</script>