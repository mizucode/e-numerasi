<x-layouts.app>
    <x-slot:title>
        Materi
    </x-slot:title>


    <div class="w-full  bg-sky-700 text-white">
        <div class="container mx-auto px-6 py-16 md:pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="md:w-1/2 text-center md:text-left">
                    <h1 class="text-3xl md:text-4xl font-semibold leading-tight">Uji Seberapa Hebat Kamu Sekarang!</h1>
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <p class="text-lg md:text-xl">Jangan takut salah, karena setiap soal adalah kesempatan untuk
                        belajar.
                        Ayo, tunjukkan kemampuan terbaikmu dan temukan topik mana yang sudah kamu kuasai.</p>
                </div>
            </div>
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $cards = [
                        [
                            'title' => 'Bilangan',
                            'description' => 'Mulai dari bilangan bulat, pecahan, hingga pangkat dan akar beserta operasi-operasinya.',
                            'image' => 'images/hero.png',
                            'url' => 'materi-bilangan'
                        ],
                        [
                            'title' => 'Geometri dan Pengukuran',
                            'description' => 'Keliling & luas bangun datar, volume bangun ruang, konversi satuan, skala, dan Pythagoras.',
                            'image' => 'images/geometri.png',
                            'url' => 'materi-geometri-dan-pengukuran'
                        ],
                        [
                            'title' => 'Aljabar',
                            'description' => 'Variabel, bentuk aljabar, PLSV & PtLSV, SPLDV, fungsi linier, serta barisan & deret.',
                            'image' => 'images/aljabar.png',
                            'url' => 'materi-aljabar'
                        ],
                        [
                            'title' => 'Data dan Ketidakpastian',
                            'description' => 'Menyajikan data (tabel/diagram), rata-rata–median–modus, jangkauan, dan peluang dasar.',
                            'image' => 'images/data.png',
                            'url' => 'materi-data-dan-ketidakpastian'
                        ],

                        [
                            'title' => 'Model Translasi Bilangan',
                            'description' => 'Menerjemahkan cerita ke ekspresi bilangan: bulat, pecahan, pangkat, akar, dan urutan operasi.',
                            'image' => 'images/modelbilangan.png',
                            'url' => 'materi-model-bilangan'
                        ],
                        [
                            'title' => 'Model Translasi Geometri dan Pengukuran',
                            'description' => 'Mengubah masalah geometri & pengukuran menjadi model: keliling, luas, volume, satuan, skala.',
                            'image' => 'images/modelgeometri.png',
                            'url' => 'materi-model-geometri'
                        ],

                        [
                            'title' => 'Model Translasi Aljabar',
                            'description' => 'Dari teks ke model aljabar: PLSV, pertidaksamaan, SPLDV, fungsi linier, barisan & deret.',
                            'image' => 'images/modelaljabar.png',
                            'url' => 'materi-model-aljabar'
                        ],
                        [
                            'title' => 'Model Translasi Data dan Ketidakpastian',
                            'description' => 'Translasi konteks ke statistik & peluang: tabel/diagram, mean–median–modus, jangkauan, peluang.',
                            'image' => 'images/modeldata.png',
                            'url' => 'materi-model-data'
                        ],
                    ];

                @endphp
                @foreach ($cards as $card)
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transition-transform transform hover:-translate-y-2">
                        <img src="{{ asset($card['image']) }}" alt="{{ $card['title'] }}" class="w-full h-40 object-cover">
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="font-bold text-xl mb-2 text-gray-800">{{ $card['title'] }}</h3>
                            <p class="text-gray-600 text-sm flex-grow">{{ $card['description'] }}</p>
                            <a href="{{ route($card['url']) }}"
                                class="mt-4 inline-block bg-sky-600 text-white text-center py-2 px-4 rounded-md hover:bg-sky-700 transition-colors text-base font-semibold">
                                Mulai Belajar
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-layouts.app>