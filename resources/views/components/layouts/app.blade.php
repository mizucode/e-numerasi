<!doctype html>
<html class="bg-cover bg-fixed">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Judul Default' }} | E-numerasi</title>
  <link rel="icon"
    href="data:image/svg+xml,%3Csvg viewBox='0 0 51.3 53.3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M49.8 20.4L27.1 7.5v17.2l14.4 8.3v17.2l8.3-4.8v-25zM1.5 20.4l22.7-12.9v17.2L9.8 33v17.2L1.5 45.4v-25zM25.6 0L1.2 14.1l24.4 14.1 24.4-14.1L25.6 0z' fill='%23F4645F'/%3E%3C/svg%3E">

  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    [x-cloak] {
      display: none !important
    }
  </style>

  <style>
    .hamburger {
      cursor: pointer;
      width: 24px;
      height: 24px;
      transition: all 0.25s;
      position: relative;
    }

    .hamburger-top,
    .hamburger-middle,
    .hamburger-bottom {
      position: absolute;
      width: 24px;
      height: 2px;
      top: 0;
      left: 0;
      background: #38bdf8;
      transform: rotate(0);
      transition: all 0.5s;
    }

    .hamburger-middle {
      transform: translateY(7px);
    }

    .hamburger-bottom {
      transform: translateY(14px);
    }

    .open {
      transform: rotate(90deg);
      transform: translateY(0px);
    }

    .open .hamburger-top {
      transform: rotate(45deg) translateY(6px) translate(6px);
    }

    .open .hamburger-middle {
      display: none;
    }

    .open .hamburger-bottom {
      transform: rotate(-45deg) translateY(6px) translate(-6px);
    }
  </style>


  <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" async></script>

</head>

<body class="font-sans">
  <nav x-data="{ open: false }" class="sticky top-0 z-50 bg-white shadow-md">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <!-- Logo -->
        <div class="text-2xl font-bold text-sky-600">E-numerasi</div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8 text-base lg:text-lg font-medium">
          <a href="{{ route('home') }}" class="text-sky-600 hover:text-red-400 transition-colors">Home</a>
          <a href="{{ route('master-pembahasan') }}"
            class="text-sky-600 hover:text-red-400 transition-colors">Pembahasan</a>
          <a href="{{ route('master-soal') }}" class="text-sky-600 hover:text-red-400 transition-colors">Soal</a>
          <a href="{{ route('master-model') }}" class="text-sky-600 hover:text-red-400 transition-colors">Model</a>
          <a href="{{ route('master-materi') }}"
            class="rounded-lg bg-sky-600 px-5 py-2 text-white transition-colors hover:bg-red-400 shadow">
            Materi
          </a>
        </div>

        <!-- Mobile Hamburger -->
        <div class="md:hidden">
          <button @click="open = !open"
            class="relative flex h-8 w-8 flex-col items-center justify-center focus:outline-none">
            <span aria-hidden="true" class="block h-0.5 w-6 rounded bg-sky-600 transition-all duration-300"
              :class="{ 'rotate-45 translate-y-2': open }"></span>
            <span aria-hidden="true" class="mt-1 block h-0.5 w-6 rounded bg-sky-600 transition-all duration-300"
              :class="{ 'opacity-0': open }"></span>
            <span aria-hidden="true" class="mt-1 block h-0.5 w-6 rounded bg-sky-600 transition-all duration-300"
              :class="{ '-rotate-45 -translate-y-1': open }"></span>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 -translate-y-2" class="md:hidden bg-white shadow-inner"
      @click.away="open = false">

      <div class="space-y-1 px-4 py-4">
        <a href="{{ route('home') }}" class="block rounded-md px-3 py-2 text-sky-600 hover:bg-gray-100">Home</a>
        <a href="{{ route('master-pembahasan') }}"
          class="block rounded-md px-3 py-2 text-sky-600 hover:bg-gray-100">Pembahasan</a>
        <a href="{{ route('master-soal') }}" class="block rounded-md px-3 py-2 text-sky-600 hover:bg-gray-100">Soal</a>
        <a href="{{ route('master-model') }}"
          class="block rounded-md px-3 py-2 text-sky-600 hover:bg-gray-100">Model</a>
        <a href="{{ route('master-materi') }}"
          class="block rounded-md bg-sky-600 px-3 py-2 text-white hover:bg-red-400">
          Materi
        </a>
      </div>
    </div>
  </nav>

  {{ $slot }}

  <footer class="bg-gray-800 text-white">
    <div class="container mx-auto px-6 py-12">
      <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
        {{-- Brand & Description --}}
        <div class="md:col-span-2">
          <h3 class="mb-4 text-2xl font-bold text-sky-400">E-numerasi</h3>
          <p class="pr-8 text-gray-400">
            Platform e-numerasi di mana kami mengubah angka yang rumit menjadi petualangan logika yang seru
            dan mudah dipahami.
          </p>
        </div>

        {{-- Quick Links --}}
        <div>
          <h4 class="mb-4 text-lg font-semibold">Tautan Cepat</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="#" class="transition-colors hover:text-sky-400">Home</a></li>
            <li><a href="#" class="transition-colors hover:text-sky-400">Tentang</a></li>
            <li><a href="#" class="transition-colors hover:text-sky-400">Materi</a></li>
            <li><a href="#" class="transition-colors hover:text-sky-400">Kontak Kami</a></li>
          </ul>
        </div>

        {{-- Contact Info --}}
        <div>
          <h4 class="mb-4 text-lg font-semibold">Hubungi Kami</h4>
          <p class="text-gray-400">Jl. Raya Cigugur, Kuningan, Kec. Kuningan<br>Kabupaten Kuningan, Jawa Barat
            45511<br>info@umkuningan.ac.id</p>
        </div>
      </div>
      <div class="mt-12 border-t border-gray-700 pt-6 text-center text-gray-500">
        <p>&copy; {{ date('Y') }} E-numerasi. Seluruh Hak Cipta.</p>
      </div>
    </div>
  </footer>

  <script>
    (function () {
      function retypeset() {
        if (window.MathJax && window.MathJax.typeset) {
          window.MathJax.typeset();
        }
      }
      document.addEventListener('DOMContentLoaded', retypeset);
      document.addEventListener('turbo:load', retypeset); // jika pakai Turbo/Hotwire
      document.addEventListener('livewire:load', retypeset); // jika pakai Livewire
      document.addEventListener('alpine:init', retypeset); // jika pakai Alpine
    })();
  </script>

  <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>