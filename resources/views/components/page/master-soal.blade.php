<x-layouts.app>
  <x-slot:title>
    Soal
  </x-slot:title>
  @php
    $cards = [
      [
        'title' => 'Bilangan',
        'description' => 'Mulai dari bilangan bulat, pecahan, hingga pangkat dan akar beserta operasi-operasinya.',
        'image' => 'images/hero.png',
        'url' => 'materi-bilangan-soal'
      ],
      [
        'title' => 'Geometri dan Pengukuran',
        'description' => 'Keliling & luas bangun datar, volume bangun ruang, konversi satuan, skala, dan Pythagoras.',
        'image' => 'images/geometri.png',
        'url' => 'materi-geometri-soal'
      ],
      [
        'title' => 'Aljabar',
        'description' => 'Variabel, bentuk aljabar, PLSV & PtLSV, SPLDV, fungsi linier, serta barisan & deret.',
        'image' => 'images/aljabar.png',
        'url' => 'materi-aljabar-soal'
      ],
      [
        'title' => 'Data dan Ketidakpastian',
        'description' => 'Menyajikan data (tabel/diagram), rata-rata–median–modus, jangkauan, dan peluang dasar.',
        'image' => 'images/data.png',
        'url' => 'materi-data-dan-ketidakpastian'
      ],

    ];

  @endphp

  <div class="w-full lg:h-screen bg-grid-700 text-white">
    <div class="container mx-auto px-6 py-12 md:py-20">
      <div class="flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="md:w-1/2 text-center md:text-left">
          <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold leading-tight">
            Kumpulan Soal
          </h1>
        </div>
        <div class="md:w-1/2 text-center md:text-left">
          <p class="text-base md:text-lg lg:text-xl leading-relaxed">
            Jelajahi berbagai topik yang telah kami siapkan untukmu. Mulailah perjalanan belajarmu dari
            konsep dasar hingga penerapan yang lebih kompleks untuk mengasah kemampuan numerasimu.
          </p>
        </div>
      </div>

      {{-- Grid Card --}}
      <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($cards as $card)
          <div
            class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col transition-transform transform hover:-translate-y-2 hover:shadow-lg">

            {{-- Gambar --}}
            <div class="overflow-hidden">
              <img src="{{ asset($card['image']) }}" alt="{{ $card['title'] }}"
                class="object-contain w-full h-44 sm:h-48 md:h-52  p-4">
            </div>

            {{-- Isi --}}
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="font-bold text-lg md:text-xl mb-2 text-gray-800">Soal {{ $card['title'] }}</h3>
              <p class="text-gray-600 text-sm md:text-base flex-grow leading-relaxed">
                {{ $card['description'] }}
              </p>
              <a href="{{ route($card['url']) }}"
                class="mt-4 inline-block bg-sky-600 text-white text-center py-2 px-4 rounded-lg hover:bg-sky-700 transition-colors text-sm md:text-base font-semibold">
                Pelajari Pembahasan
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</x-layouts.app>