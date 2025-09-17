@extends('layouts.base')
@section('title_head')
<title>Homepage - Marco Picheca</title>
@endsection
@section('body_content')

<body class="min-h-screen bg-gradient-to-b from-slate-50 to-white text-slate-900">
  <!-- NAV -->
  <header class="sticky top-0 z-40 backdrop-blur-md bg-white/60 border-b border-slate-200">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <span class="font-semibold tracking-tight">Marco Picheca</span>
      </a>
      <nav class="hidden md:flex items-center gap-6">
        <a href="https://github.com/MarcoPicheca" class="hover:text-indigo-600">GitHub</a>
        <a href="/about_me" class="hover:text-indigo-600">About me</a>
      </nav>
      <div class="md:hidden">
        <button id="menu-toggle" aria-label="Toggle menu" class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <svg id="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M3 7h18M3 12h18M3 17h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white/95">
      <div class="px-4 py-4 space-y-3">
        <a href="https://github.com/MarcoPicheca" class="hover:text-indigo-600">GitHub</a>
        <a href="{{route('about_me')}}" class="block">About me</a>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <main>
    <section class="container mx-auto px-4 py-16 lg:py-24">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-7">
          <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Build beautiful, fast experiences with Tailwind v4</h1>
          <p class="mt-4 text-lg text-slate-600 max-w-xl">A modern starting point for your next product: responsive, accessible and ready to customize.</p>
          <div class="mt-6 flex flex-wrap gap-3">
          </div>
        </div>
        <div class="lg:col-span-5">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl">
            <div class="aspect-video bg-gradient-to-tr from-indigo-500/80 to-cyan-400/60 flex items-center justify-center text-white">
              <h3 class="text-xl font-semibold">Prototype faster</h3>
            </div>
            <div class="absolute bottom-3 right-3 text-xs text-white/80">Demo preview</div>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="bg-slate-50 py-12">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold">Everything you need</h2>
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <article class="rounded-xl p-6 bg-white shadow-sm">
            <h3 class="font-semibold">Responsive by default</h3>
            <p class="mt-1 text-sm text-slate-600">Mobile-first utilities that scale.</p>
          </article>
          <article class="rounded-xl p-6 bg-white shadow-sm">
            <h3 class="font-semibold">Dark mode ready</h3>
            <p class="mt-1 text-sm text-slate-600">Light and dark themes.</p>
          </article>
          <article class="rounded-xl p-6 bg-white shadow-sm">
            <h3 class="font-semibold">Composable components</h3>
            <p class="mt-1 text-sm text-slate-600">Small building blocks.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="border-t border-slate-200 bg-white py-8">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h4 class="font-semibold">Marco Picheca</h4>
          <p class="mt-2 text-sm text-slate-600">Helping teams ship faster.</p>
        </div>
        <div>
          <h5 class="font-medium">Marco Picheca</h5>
          <ul class="mt-2 text-sm text-slate-600 space-y-2">
            <li><a href="{{route('about_me')}}">About me</a></li>
        </ul>
        </div>
        <div>
          <h5 class="font-medium">Contact</h5>
          <p class="mt-2 text-sm text-slate-600">marco.picheca@gmail.com</p>
          <p class="mt-1 text-xs text-slate-400">© 2025 Marco Picheca. All rights reserved.</p>
        </div>
      </div>
    </footer>
</main>
@endsection