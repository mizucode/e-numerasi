<x-layouts.app>
    <x-slot:title>
        Pembahasan Soal | E‑numerasi
    </x-slot:title>

    <div class="bg-sky-50 min-h-screen">
        <div class="container mx-auto px-6 py-10">

            {{-- HEADER --}}
            <header class="mb-12 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight">🧩 Pembahasan Soal — Materi
                    Bilangan</h1>
                <p class="mt-3 text-lg text-sky-900/80 max-w-3xl mx-auto leading-relaxed">
                    Kumpulan contoh soal pemahaman, penerapan, dan penalaran lengkap dengan pembahasan.
                </p>
            </header>

            <main class="space-y-16">

                {{-- KONVENSI UI --}}
                <div class="rounded-xl bg-white border border-sky-100 shadow-sm p-4 md:p-5">
                    <div class="flex items-center gap-2 text-sky-700 font-semibold mb-2">ℹ️ Cara Pakai</div>
                    <p class="text-sky-900/80">Setiap kartu berisi <span class="font-semibold">Soal</span>, lalu <span
                            class="font-semibold">Pembahasan</span>.
                        Tanda ✅/❌ pada tabel menunjukkan benar/salah. </p>
                </div>

                {{-- A. Contoh Soal Pemahaman 1 --}}
                <section>
                    <h2
                        class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
                        <span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-lg">A</span>
                        Contoh Soal Pemahaman
                    </h2>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-sky-800 mb-3">1) Titik A pada Garis Bilangan</h3>
                            <p class="text-sky-900/90 leading-relaxed mb-4">
                                Di garis bilangan, interval antara <span class="font-semibold">32</span> dan <span
                                    class="font-semibold">33</span>
                                dibagi menjadi 5 bagian sama. Bilangan <span class="font-semibold">A</span> berada 3
                                langkah dari 32. Nilai A adalah …
                            </p>

                            <ul class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">32,3</li>
                                <li
                                    class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 font-semibold text-sky-700">
                                    32,6 ✅</li>
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">33,2</li>
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">33,4</li>
                            </ul>

                            <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl">
                                <div class="font-semibold text-sky-800">Pembahasan</div>
                                <p class="text-sky-900/90">Satu langkah bernilai <span class="font-mono">(33−32) ÷ 5 =
                                        0,2</span>. Karena A 3 langkah dari 32:
                                    <span class="font-mono">32 + 3 × 0,2 = 32 + 0,6 = 32,6</span>.
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden mt-8">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-sky-800 mb-3">2) Manajemen Waktu Nani</h3>
                            <p class="text-sky-900/90 leading-relaxed mb-4">
                                Dalam satu hari (24 jam), Nani: tidur <span class="font-mono">1/4</span> bagian,
                                sekolah <span class="font-mono">1/3</span> bagian, makan & belajar <span
                                    class="font-mono">1/8</span> bagian.
                                Sisanya untuk aktivitas lain. Tentukan benar/salah tiap pernyataan!
                            </p>

                            <div class="overflow-x-auto">
                                <table class="min-w-[560px] w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-sky-600 text-white">
                                            <th class="py-3 px-4 rounded-tl-xl">Pernyataan</th>
                                            <th class="py-3 px-4">Benar</th>
                                            <th class="py-3 px-4 rounded-tr-xl">Salah</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sky-900/90">
                                        <tr class="border-b border-sky-100">
                                            <td class="py-3 px-4">Nani menghabiskan waktu terbanyak untuk tidur.</td>
                                            <td class="py-3 px-4">❌</td>
                                            <td class="py-3 px-4">✅</td>
                                        </tr>
                                        <tr class="border-b border-sky-100">
                                            <td class="py-3 px-4">Selama 8 jam, Nani belajar di sekolah.</td>
                                            <td class="py-3 px-4">✅</td>
                                            <td class="py-3 px-4">❌</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-4">Aktivitas lain (main, TV, bantu orang tua) = 7 jam.
                                            </td>
                                            <td class="py-3 px-4">✅</td>
                                            <td class="py-3 px-4">❌</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl mt-4">
                                <div class="font-semibold text-sky-800">Pembahasan</div>
                                <ul class="list-disc pl-6 text-sky-900/90 space-y-1">
                                    <li>Tidur: <span class="font-mono">1/4 × 24 = 6</span> jam.</li>
                                    <li>Sekolah: <span class="font-mono">1/3 × 24 = 8</span> jam (terbanyak).</li>
                                    <li>Makan & belajar: <span class="font-mono">1/8 × 24 = 3</span> jam.</li>
                                    <li>Sisa: <span class="font-mono">24 − 6 − 8 − 3 = 7</span> jam.</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </section>

                {{-- B. Contoh Soal Penerapan --}}
                <section>
                    <h2
                        class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
                        <span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-lg">B</span>
                        Contoh Soal Penerapan
                    </h2>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-sky-800 mb-3">1) Panjang Pipa</h3>
                            <p class="text-sky-900/90 mb-3">Seorang pekerja memotong <span class="font-mono">1/5</span>
                                bagian pipa. Panjang yang dipotong 3 m. Panjang pipa mula‑mula adalah …</p>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">8 m</li>
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">12 m</li>
                                <li
                                    class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 font-semibold text-sky-700">
                                    15 m ✅</li>
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">18 m</li>
                            </ul>
                            <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl">
                                <div class="font-semibold text-sky-800">Pembahasan</div>
                                <p class="text-sky-900/90">Jika <span class="font-mono">1/5</span> panjang = 3 m, maka
                                    seluruh panjang
                                    <span class="font-mono">= 3 ÷ (1/5) = 3 × 5 = 15</span> m.
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden mt-8">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-sky-800 mb-3">2) Wadah Minyak Berbentuk Kubus</h3>
                            <p class="text-sky-900/90 mb-3">Minyak goreng 2 liter (2.000 cm³) ingin dimuat dalam wadah
                                kubus. Pilih semua panjang rusuk yang <em>mungkin</em>:</p>
                            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-3">
                                <label
                                    class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 flex items-center gap-2"><input
                                        type="checkbox" disabled>10 cm</label>
                                <label
                                    class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 flex items-center gap-2"><input
                                        type="checkbox" disabled>12 cm</label>
                                <label
                                    class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 flex items-center gap-2 font-semibold text-sky-700"><input
                                        type="checkbox" checked disabled>13 cm</label>
                                <label
                                    class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 flex items-center gap-2 font-semibold text-sky-700"><input
                                        type="checkbox" checked disabled>15 cm</label>
                            </div>
                            <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl mt-4">
                                <div class="font-semibold text-sky-800">Pembahasan</div>
                                <p class="text-sky-900/90">Volume kubus <span class="font-mono">= s³</span>. Agar memuat
                                    ≥ 2.000 cm³:
                                    <span class="font-mono">12³ = 1.728</span> (kurang), <span class="font-mono">13³ =
                                        2.197</span> (cukup),
                                    <span class="font-mono">15³ = 3.375</span> (cukup). Jadi 13 cm & 15 cm.
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden mt-8">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-sky-800 mb-3">3) Persentase Lemparan Jitu</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-[560px] w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-sky-600 text-white">
                                            <th class="py-3 px-4 rounded-tl-xl">Nama</th>
                                            <th class="py-3 px-4">Lemparan Jitu</th>
                                            <th class="py-3 px-4 rounded-tr-xl">Persentase</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sky-900/90">
                                        <tr class="border-b border-sky-100">
                                            <td class="py-3 px-4">Ihsan</td>
                                            <td class="py-3 px-4">10 dari 20</td>
                                            <td class="py-3 px-4">50%</td>
                                        </tr>
                                        <tr class="border-b border-sky-100">
                                            <td class="py-3 px-4">Anwar</td>
                                            <td class="py-3 px-4">15 dari 20</td>
                                            <td class="py-3 px-4">75%</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-4">Fariz</td>
                                            <td class="py-3 px-4">16 dari 20</td>
                                            <td class="py-3 px-4">80%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                </section>

                {{-- C. Contoh Soal Penalaran --}}
                <section>
                    <h2
                        class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
                        <span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-lg">C</span>
                        Contoh Soal Penalaran
                    </h2>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
                        <div class="p-6 space-y-3">
                            <h3 class="text-xl font-bold text-sky-800">Relasi Bilangan A, B, C, D, E</h3>
                            <p class="text-sky-900/90">Diketahui A = 8,6. B dua kali C, B = D + 1,7, A = E + 2,4, dan E
                                = B − 1. Tentukan benar/salah:</p>
                            <ul class="list-disc pl-6 text-sky-900/90">
                                <li>B merupakan bilangan terbesar.</li>
                                <li>C lebih kecil dari jumlah A dan D.</li>
                                <li>D merupakan bilangan terkecil.</li>
                                <li>Jika diurutkan, C berada di tengah.</li>
                            </ul>

                            <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl">
                                <div class="font-semibold text-sky-800">Pembahasan (ringkas)</div>
                                <p class="text-sky-900/90">Dari relasi: <span class="font-mono">E = A − 2,4 = 6,2</span>
                                    dan <span class="font-mono">B = E + 1 = 7,2</span>,
                                    sehingga <span class="font-mono">D = B − 1,7 = 5,5</span>, lalu <span
                                        class="font-mono">C = B ÷ 2 = 3,6</span>.
                                    Urutan naik: <span class="font-mono">C (3,6) &lt; D (5,5) &lt; E (6,2) &lt; B (7,2)
                                        &lt; A (8,6)</span>.
                                </p>
                                <ul class="list-disc pl-6 mt-2 text-sky-900/90">
                                    <li><span class="font-semibold">B terbesar?</span> ❌ (A terbesar)</li>
                                    <li><span class="font-semibold">C &lt; A + D?</span> ✅ (3,6 &lt; 14,1)</li>
                                    <li><span class="font-semibold">D terkecil?</span> ❌ (C terkecil)</li>
                                    <li><span class="font-semibold">C di tengah?</span> ❌ (tengahnya E)</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </section>

                {{-- D. LATIHAN SOAL --}}
                <section>
                    <h2
                        class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
                        <span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-lg">D</span>
                        Latihan Soal
                    </h2>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
                        <div class="p-6 space-y-6">
                            <div>
                                <h3 class="text-xl font-bold text-sky-800 mb-2">Pemahaman</h3>
                                <ol class="list-decimal pl-6 space-y-2 text-sky-900/90">
                                    <li>Pada garis bilangan berikut, bilangan A yang mungkin adalah … (pilih salah satu)
                                        <div class="mt-2 grid sm:grid-cols-2 md:grid-cols-4 gap-2">
                                            <span class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,25</span>
                                            <span class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,20</span>
                                            <span class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,15</span>
                                            <span class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,125</span>
                                        </div>
                                    </li>
                                    <li>Beri tanda centang pada bilangan yang terletak antara 0,07 dan 0,08.
                                        <div class="mt-2 grid sm:grid-cols-2 md:grid-cols-5 gap-2">
                                            <label
                                                class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,0075</label>
                                            <label
                                                class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,0705</label>
                                            <label
                                                class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,0775</label>
                                            <label
                                                class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,0801</label>
                                            <label
                                                class="bg-sky-50 border border-sky-100 rounded px-3 py-1">0,75</label>
                                        </div>
                                    </li>
                                </ol>
                            </div>

                            <div>
                                <h3 class="text-xl font-bold text-sky-800 mb-2">Penerapan</h3>
                                <ol class="list-decimal pl-6 space-y-3 text-sky-900/90">
                                    <li>Pada tes matematika 75 soal (benar = 2, salah = −1/2, kosong = 0). Data:
                                        <div class="overflow-x-auto mt-2">
                                            <table class="min-w-[560px] w-full text-left border-collapse">
                                                <thead>
                                                    <tr class="bg-sky-600 text-white">
                                                        <th class="py-2 px-3 rounded-tl-xl">Nama</th>
                                                        <th class="py-2 px-3">Benar</th>
                                                        <th class="py-2 px-3">Tidak Dijawab</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b border-sky-100">
                                                        <td class="py-2 px-3">Ani</td>
                                                        <td class="py-2 px-3">50</td>
                                                        <td class="py-2 px-3">10</td>
                                                    </tr>
                                                    <tr class="border-b border-sky-100">
                                                        <td class="py-2 px-3">Budi</td>
                                                        <td class="py-2 px-3">60</td>
                                                        <td class="py-2 px-3">8</td>
                                                    </tr>
                                                    <tr class="border-b border-sky-100">
                                                        <td class="py-2 px-3">Cici</td>
                                                        <td class="py-2 px-3">55</td>
                                                        <td class="py-2 px-3">2</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-2 px-3">Deni</td>
                                                        <td class="py-2 px-3">40</td>
                                                        <td class="py-2 px-3">12</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        Jika batas lulus 75, beri centang pada siswa yang lulus.
                                    </li>
                                    <li>Penurunan suhu kulkas setelah listrik padam. Lengkapi & tentukan suhu pada pukul
                                        07.25.</li>
                                    <li>Sebuah rapat dihadiri 30 orang, 0,6 bagiannya laki‑laki. Kemudian datang 12
                                        perempuan. Tentukan bagian laki‑laki yang baru.</li>
                                </ol>
                            </div>

                            <div>
                                <h3 class="text-xl font-bold text-sky-800 mb-2">Penalaran</h3>
                                <p class="text-sky-900/90">Jumlah penduduk kota 300.000 jiwa. Sebagian adalah dewasa,
                                    sisanya anak‑anak. Sebagian dewasa laki‑laki, sebagian anak‑anak perempuan. Tentukan
                                    benar/salah tiap pernyataan sesuai hitunganmu.</p>
                                <div class="overflow-x-auto mt-2">
                                    <table class="min-w-[560px] w-full text-left border-collapse">
                                        <thead>
                                            <tr class="bg-sky-600 text-white">
                                                <th class="py-2 px-3 rounded-tl-xl">Pernyataan</th>
                                                <th class="py-2 px-3">Benar</th>
                                                <th class="py-2 px-3 rounded-tr-xl">Salah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-sky-100">
                                                <td class="py-2 px-3">Perempuan dewasa lebih banyak dari laki‑laki
                                                    dewasa.</td>
                                                <td class="py-2 px-3"></td>
                                                <td class="py-2 px-3"></td>
                                            </tr>
                                            <tr class="border-b border-sky-100">
                                                <td class="py-2 px-3">Banyak anak laki‑laki = 56.250 orang.</td>
                                                <td class="py-2 px-3"></td>
                                                <td class="py-2 px-3"></td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-3">Banyak laki‑laki dewasa &lt; banyak anak
                                                    perempuan.</td>
                                                <td class="py-2 px-3"></td>
                                                <td class="py-2 px-3"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>

                {{-- CTA --}}
                <section class="text-center py-10">
                    <div
                        class="bg-gradient-to-br from-sky-400 to-sky-600 rounded-2xl p-8 text-white shadow-2xl shadow-sky-200">
                        <h2 class="text-3xl font-bold mb-3">Masih belum paham?</h2>
                        <p class="mb-6 max-w-2xl mx-auto">Yuk kembali ke halaman sebelumnya.</p>
                        <a href="{{ route('materi-bilangan') }}"
                            class="inline-block bg-white text-sky-700 font-bold text-lg py-3 px-8 rounded-xl shadow-md hover:bg-sky-50 transform hover:-translate-y-0.5 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
                            Kembali ke Materi
                        </a>
                    </div>
                </section>

            </main>
        </div>
    </div>
</x-layouts.app>