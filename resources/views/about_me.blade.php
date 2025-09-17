@extends('layouts.base')
@section('title_head')
<title>About Me - Marco Picheca</title>
@endsection

@section('body_content')

<body class="min-h-screen bg-gradient-to-b from-slate-50 to-white text-slate-900">
    <!-- NAV -->
    <header class="sticky top-0 z-40 backdrop-blur-md bg-white/60 border-b border-slate-200">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <span class="font-semibold tracking-tight">Marco Picheca</span>
        </a>
        <nav class="hidden md:flex items-center gap-6">
            <a href="{{route('home')}}" class="hover:text-indigo-600">Home</a>
            <a href="#contact" class="px-4 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700">Contatti</a>
        </nav>
        <div class="md:hidden">
            <button id="menu-toggle" aria-label="Toggle menu" class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <svg id="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M3 7h18M3 12h18M3 17h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white/95">
        <div class="px-4 py-4 space-y-3">
            <a href="{{route('home')}}" class="block">Home</a>
            <a href="#contact" class="block px-4 py-2 rounded-md bg-indigo-600 text-white">Contatti</a>
        </div>
    </div>
</header>

<!-- HERO -->
<section class="container mx-auto px-4 py-16 lg:py-24 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Ciao, sono Marco Picheca</h1>
    <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">Questa è la mia pagina personale
        , dove condivido la mia storia, i miei interessi e come puoi metterti in contatto con me.</p>
    </section>
    
    <!-- STORY -->
    <section id="story" class="bg-slate-50 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold">La mia storia</h2>
            <p class="mt-4 text-slate-700 leading-relaxed max-w-3xl">Sono Marco Picheca, una persona
                appassionata di crescita personale, creatività e tecnologia. Nel corso degli anni ho
                coltivato esperienze in diversi ambiti che mi hanno formato e reso la persona che sono oggi.
                Credo fortemente nella curiosità e nell’imparare costantemente qualcosa di nuovo.</p>
    </div>
</section>

<!-- HOBBY -->
<section id="hobby" class="container mx-auto px-4 py-12">
    <h2 class="text-2xl font-semibold">Hobby & passioni</h2>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <article class="rounded-xl p-6 bg-white shadow-sm">
            <h3 class="font-semibold">Sport</h3>
            <p class="mt-2 text-sm text-slate-600">Amo praticare attività fisica all’aperto, come rugby,
                andare in bici e camminare in montagna.</p>
            </article>
            <article class="rounded-xl p-6 bg-white shadow-sm">
        <h3 class="font-semibold">Tecnologia</h3>
        <p class="mt-2 text-sm text-slate-600">Mi piace esplorare nuove tecnologie, 
            imparare linguaggi di programmazione e costruire progetti personali.</p>
        </article>
        <article class="rounded-xl p-6 bg-white shadow-sm">
            <h3 class="font-semibold">Arte & Musica</h3>
            <p class="mt-2 text-sm text-slate-600">Trovo ispirazione nella musica e nell’arte visiva, 
                strumenti che arricchiscono la mia creatività e il mio modo di esprimermi.</p>
            </article>
        </div>
    </section>
    
    <!-- CONTACT -->
    <section id="contact" class="bg-indigo-600 py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-semibold">Contattami</h2>
            <p class="mt-2 text-indigo-100">Se vuoi metterti in contatto con me, scrivimi pure:</p>
            <p class="mt-4 text-lg font-medium">marco.picheca@gmail.com</p>
            <div class="mt-6 flex justify-center gap-4">
                <a href="mailto:marco.picheca@gmail.com" class="px-5 py-3 rounded-md bg-white text-indigo-700">Scrivimi</a>
                <a href="https://www.linkedin.com/in/marco-picheca-30097525b/" class="px-5 py-3 rounded-md border border-white/30">LinkedIn</a>
            </div>
        </div>
    </section>
    
  <footer class="border-t border-slate-200 bg-white py-8">
    <div class="container mx-auto px-4 text-center">
      <p class="text-sm text-slate-600">© 2025 Marco Picheca. Tutti i diritti riservati.</p>
    </div>
  </footer>
@endsection
