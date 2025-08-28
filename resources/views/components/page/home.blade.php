<x-layouts.app>
  <x-slot:title>
    Home
  </x-slot:title>

  <div class="w-full h-screen flex items-center math-bg-pattern  ">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid items-center gap-10 md:gap-12 lg:gap-16 md:grid-cols-2">
        <!-- Copy -->
        <div class="text-center md:text-left">
          <h1 class="font-bold leading-tight text-sky-700 text-3xl sm:text-4xl md:text-5xl lg:text-6xl">
            E-numerasi
          </h1>
          <p class="mt-4 text-gray-600 text-base sm:text-lg md:text-xl lg:text-[22px] lg:leading-8">
            Selamat datang di platform e-numerasi di mana kami mengubah angka yang rumit menjadi petualangan
            logika yang seru dan mudah dipahami.
          </p>

          <div class="mt-8">
            <a href="{{ route('master-materi') }}"
              class="inline-flex items-center justify-center rounded-xl bg-sky-600 px-6 py-3 text-base sm:text-lg font-semibold text-white shadow-sm transition hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">
              Belajar Sekarang
            </a>
          </div>
        </div>

        <!-- Image -->
        <div class="mx-auto w-full max-w-md sm:max-w-lg md:max-w-none">
          <img src="{{ asset('images/hero.png') }}" alt="Ilustrasi E-numerasi" loading="eager" decoding="async"
            class="w-full h-auto " />
        </div>
      </div>
    </div>
  </div>


</x-layouts.app>