<x-layouts.app>
  <x-slot:title>
    Home
  </x-slot:title>

  <div class="w-full bg-white py-16 md:h-screen md:pt-64">
    <div class="container mx-auto px-6">
      <div class="flex flex-col items-center gap-12 md:flex-row">
        <div class="md:w-1/2">
          <h1 class="text-4xl font-bold leading-tight text-sky-600 md:text-6xl">E-numerasi</h1>
          <p class="mt-4 text-lg text-gray-600 md:text-xl">
            Selamat datang di platform e-numerasi di mana kami mengubah angka yang rumit menjadi petualangan
            logika yang seru dan mudah dipahami.
          </p>
          <div class="mt-8">
            <a href="{{ route('master-materi') }}"
              class="rounded-md bg-sky-600 px-6 py-3 text-lg font-semibold text-white transition-colors hover:bg-red-400">
              Belajar Sekarang
            </a>
          </div>
        </div>
        <div class="md:w-1/2">
          <img src="{{ asset('images/hero.png') }}" alt="Hero Image" class="h-auto w-full rounded-lg">
        </div>
      </div>
    </div>
  </div>

  <div class="w-full bg-sky-700 text-white">
    <div class="container mx-auto px-6 py-16 md:py-32">
      <div class="flex flex-col items-center justify-between gap-8 md:flex-row">
        <div class="text-center md:w-1/2 md:text-left">
          <h1 class="text-3xl font-semibold leading-tight md:text-4xl">Uji Seberapa Hebat Kamu Sekarang!</h1>
        </div>
        <div class="text-center md:w-1/2 md:text-left">
          <p class="text-lg md:text-xl">Jangan takut salah, karena setiap soal adalah kesempatan untuk
            belajar.
            Ayo, tunjukkan kemampuan terbaikmu dan temukan topik mana yang sudah kamu kuasai.</p>
        </div>
      </div>
      <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @php
      $cards = [
        [
        'title' => 'Bilangan',
        'description' =>
          'Mulai dari bilangan bulat, pecahan, hingga pangkat dan akar beserta operasi-operasinya.',
        'image' => 'images/hero.png',
        'url' => 'materi-bilangan',
        ],
        [
        'title' => 'Geometri dan Pengukuran',
        'description' =>
          'Keliling & luas bangun datar, volume bangun ruang, konversi satuan, skala, dan Pythagoras.',
        'image' => 'images/geometri.png',
        'url' => 'materi-geometri-dan-pengukuran',
        ],
        [
        'title' => 'Aljabar',
        'description' =>
          'Variabel, bentuk aljabar, PLSV & PtLSV, SPLDV, fungsi linier, serta barisan & deret.',
        'image' => 'images/aljabar.png',
        'url' => 'materi-aljabar',
        ],
        [
        'title' => 'Data dan Ketidakpastian',
        'description' =>
          'Menyajikan data (tabel/diagram), rata-rata–median–modus, jangkauan, dan peluang dasar.',
        'image' => 'images/data.png',
        'url' => 'materi-data-dan-ketidakpastian',
        ],

        [
        'title' => 'Model Translasi Bilangan',
        'description' =>
          'Menerjemahkan cerita ke ekspresi bilangan: bulat, pecahan, pangkat, akar, dan urutan operasi.',
        'image' => 'images/modelbilangan.png',
        'url' => 'materi-model-bilangan',
        ],
        [
        'title' => 'Model Translasi Geometri dan Pengukuran',
        'description' =>
          'Mengubah masalah geometri & pengukuran menjadi model: keliling, luas, volume, satuan, skala.',
        'image' => 'images/modelgeometri.png',
        'url' => 'materi-model-geometri',
        ],

        [
        'title' => 'Model Translasi Aljabar',
        'description' =>
          'Dari teks ke model aljabar: PLSV, pertidaksamaan, SPLDV, fungsi linier, barisan & deret.',
        'image' => 'images/modelaljabar.png',
        'url' => 'materi-model-aljabar',
        ],
        [
        'title' => 'Model Translasi Data dan Ketidakpastian',
        'description' =>
          'Translasi konteks ke statistik & peluang: tabel/diagram, mean–median–modus, jangkauan, peluang.',
        'image' => 'images/modeldata.png',
        'url' => 'materi-model-data',
        ],
      ];

    @endphp
        @foreach ($cards as $card)
      <div
        class="flex transform flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2">
        <img src="{{ asset($card['image']) }}" alt="{{ $card['title'] }}" class="h-40 w-full object-cover">
        <div class="flex flex-grow flex-col p-5">
        <h3 class="mb-2 text-xl font-bold text-gray-800">{{ $card['title'] }}</h3>
        <p class="flex-grow text-sm text-gray-600">{{ $card['description'] }}</p>
        <a href="{{ route($card['url']) }}"
          class="mt-4 inline-block rounded-md bg-sky-600 px-4 py-2 text-center text-base font-semibold text-white transition-colors hover:bg-sky-700">
          Mulai Belajar
        </a>
        </div>
      </div>
    @endforeach
      </div>
    </div>
  </div>

</x-layouts.app>