<x-layouts.app>
    <x-slot:title>
        Data & Ketidakpastian
    </x-slot:title>

    <div class="bg-sky-50 min-h-screen">
        <div class="container mx-auto px-6 py-10">

            {{-- HERO / HEADER --}}
            <header class="mb-14 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight drop-shadow-sm">
                    🎲 Petualangan Seru di Dunia Data & Peluang!
                </h1>
                <p class="mt-4 text-lg text-sky-900/80 max-w-3xl mx-auto leading-relaxed">
                    Yuk, jelajah bareng konsep penting statistika—dari data dan cara menyajikannya, sampai peluang
                    dan frekuensi harapan—dengan gaya yang asyik, simpel, dan penuh contoh nyata.
                </p>

            </header>

            <main class="space-y-16">

                {{-- A. STATISTIKA --}}
                <section>
                    <h2
                        class="text-3xl font-bold text-sky-700 border-b-4 border-sky-400 pb-2 mb-6 flex items-center gap-3">
                        <span class="bg-sky-100 text-sky-600 p-2 rounded-lg shadow-sm">A</span>
                        Statistika
                    </h2>

                    <p class="text-sky-900 text-lg mb-6 leading-relaxed">
                        Statistika membantu kita mengumpulkan, menyusun, menampilkan, dan mengolah data agar mudah
                        dipahami. Istilah-istilah kunci di bawah ini akan sering kamu temui.
                    </p>

                    {{-- Peta Konsep Utama --}}
                    <div class="bg-sky-600 p-4 rounded-xl shadow-lg text-white text-center mb-8">
                        <p class="text-sm font-semibold opacity-90 mb-1">PETA KONSEP UTAMA</p>
                        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 text-sky-50">
                            <div class="bg-sky-500/40 rounded-lg p-3">
                                <p class="font-semibold">Data</p>
                                <p class="text-xs opacity-90">Keterangan/informasi dari penelitian.</p>
                            </div>
                            <div class="bg-sky-500/40 rounded-lg p-3">
                                <p class="font-semibold">Pengumpulan</p>
                                <p class="text-xs opacity-90">Observasi, wawancara, angket.</p>
                            </div>
                            <div class="bg-sky-500/40 rounded-lg p-3">
                                <p class="font-semibold">Populasi & Sampel</p>
                                <p class="text-xs opacity-90">Seluruh objek vs sebagian.</p>
                            </div>
                            <div class="bg-sky-500/40 rounded-lg p-3">
                                <p class="font-semibold">Pengolahan</p>
                                <p class="text-xs opacity-90">Mean, median, modus, jangkauan.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Penyajian Data --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 hover:shadow-lg transition">
                        <h3 class="font-bold text-2xl text-sky-700 mb-4 flex items-center gap-3">📊 Cara Menyajikan Data
                        </h3>
                        <p class="text-sky-900 mb-6 leading-relaxed">
                            Data bisa ditampilkan dalam berbagai bentuk supaya lebih mudah dibaca dan dibandingkan.
                            Pilih bentuk yang paling cocok dengan tujuanmu.
                        </p>
                        <div class="grid md:grid-cols-3 gap-4 text-center">
                            <div class="bg-sky-50 border-2 border-sky-200 p-4 rounded-lg">
                                <p class="font-bold text-xl text-sky-700">Tabel</p>
                                <p class="text-sm text-sky-700/80 mt-1">Baris–kolom, ringkas & rapi.</p>
                            </div>
                            <div class="bg-amber-50 border-2 border-amber-200 p-4 rounded-lg">
                                <p class="font-bold text-xl text-amber-700">Diagram Batang/Garis</p>
                                <p class="text-sm text-amber-700/80 mt-1">Bandingkan kategori & tren waktu.</p>
                            </div>
                            <div class="bg-rose-50 border-2 border-rose-200 p-4 rounded-lg">
                                <p class="font-bold text-xl text-rose-700">Lingkaran, Histogram, Poligon</p>
                                <p class="text-sm text-rose-700/80 mt-1">Proporsi & data berkelompok.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Rumus-Rumus Pengolahan Data --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 mt-8">
                        <h3 class="font-bold text-2xl text-sky-700 mb-4">✨ Rumus Penting (Data Tak Berkelompok)</h3>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-sky-50 border border-sky-100 p-6 rounded-lg">
                                <h4 class="text-lg font-semibold text-sky-800 mb-2">Rata-rata (Mean)</h4>
                                <p class="text-sm text-sky-900/80">Rumus: \( \bar{x} = \dfrac{\sum x}{n} \)</p>
                                <p class="text-sm text-sky-900/80 mt-1">Gabungan: \( \bar{x}_{\text{total}} =
                                    \dfrac{\bar{x}_1 n_1 + \bar{x}_2 n_2}{n_1+n_2} \)</p>
                            </div>
                            <div class="bg-sky-50 border border-sky-100 p-6 rounded-lg">
                                <h4 class="text-lg font-semibold text-sky-800 mb-2">Median, Modus, Jangkauan</h4>
                                <ul class="text-sm text-sky-900/80 list-disc pl-5 space-y-1">
                                    <li><strong>Median</strong>: nilai tengah setelah diurutkan (genap → rata-rata 2
                                        tengah).</li>
                                    <li><strong>Modus</strong>: nilai yang paling sering muncul.</li>
                                    <li><strong>Jangkauan</strong>: \( J = x_{\max} - x_{\min} \).</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 bg-sky-50 border border-sky-100 p-4 rounded-lg text-sm">
                            <p class="font-semibold text-sky-800">Contoh cepat:</p>
                            <p class="mt-1">Data: 6, 7, 8, 9, 10 → \( \bar{x}=8 \), median = 8, modus = – (tidak ada),
                                jangkauan = 4.</p>
                        </div>
                    </div>
                </section>

                {{-- B. PELUANG --}}
                <section>
                    <h2
                        class="text-3xl font-bold text-sky-700 border-b-4 border-sky-400 pb-2 mb-6 flex items-center gap-3">
                        <span class="bg-sky-100 text-sky-600 p-2 rounded-lg shadow-sm">B</span>
                        Peluang
                    </h2>

                    <p class="text-sky-900 text-lg mb-6 leading-relaxed">
                        Peluang membantumu menaksir “seberapa mungkin” suatu kejadian terjadi. Mulai dari ruang
                        sampel hingga kejadian saling lepas/bebas.
                    </p>

                    <div class="grid md:grid-cols-2 gap-8">
                        {{-- Ruang Sampel & Peluang --}}
                        <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100">
                            <h3 class="font-bold text-2xl text-sky-700 mb-4">🎯 Ruang Sampel & Peluang</h3>
                            <p class="text-sky-900/90 mb-3">
                                Ruang sampel \(S\) = semua hasil yang mungkin. Banyaknya anggota ruang sampel ditulis
                                \(n(S)\).
                            </p>
                            <div class="bg-sky-50 p-4 rounded-lg">
                                <p class="font-semibold text-sky-800">Rumus Peluang</p>
                                <code
                                    class="block bg-white border border-sky-100 p-2 rounded mt-2 font-mono text-center">
                                    P(A) = \dfrac{n(A)}{n(S)}
                                </code>
                            </div>
                        </div>

                        {{-- Frekuensi Relatif & Harapan --}}
                        <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100">
                            <h3 class="font-bold text-2xl text-sky-700 mb-4">📈 Frekuensi Relatif & Harapan</h3>
                            <ul class="text-sky-900/90 space-y-2">
                                <li>Frekuensi relatif: \( f_r = \dfrac{\text{banyak kemunculan}}{\text{banyak
                                    percobaan}} \)</li>
                                <li>Frekuensi harapan: \( F_h = P(A)\times N \) untuk \(N\) percobaan.</li>
                            </ul>
                            <p class="text-xs text-sky-700 mt-2">Dipakai untuk memperkirakan hasil di dunia nyata.</p>
                        </div>
                    </div>

                    {{-- Kejadian Saling Lepas & Bebas --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 mt-8">
                        <h3 class="font-bold text-2xl text-sky-700 mb-4">🧠 Saling Lepas & Saling Bebas</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-amber-50 border border-amber-100 p-5 rounded-lg">
                                <h4 class="text-lg font-semibold text-amber-800 mb-2">Kejadian Saling Lepas</h4>
                                <p class="text-sm text-amber-900/90 mb-2">Tidak bisa terjadi bersamaan.</p>
                                <code class="block bg-white border border-amber-100 p-2 rounded font-mono text-center">
                                    P(A \text{ atau } B) = P(A) + P(B)
                                </code>
                            </div>
                            <div class="bg-emerald-50 border border-emerald-100 p-5 rounded-lg">
                                <h4 class="text-lg font-semibold text-emerald-800 mb-2">Kejadian Saling Bebas</h4>
                                <p class="text-sm text-emerald-900/90 mb-2">Tidak saling memengaruhi.</p>
                                <code
                                    class="block bg-white border border-emerald-100 p-2 rounded font-mono text-center">
                                    P(A \text{ dan } B) = P(A)\cdot P(B)
                                </code>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- C. CONTOH SOAL, PEMBAHASAN, & LATIHAN --}}
                <section>
                    <h2
                        class="text-3xl font-bold text-sky-700 border-b-4 border-sky-400 pb-2 mb-6 flex items-center gap-3">
                        <span class="bg-sky-100 text-sky-600 p-2 rounded-lg shadow-sm">C</span>
                        Contoh Soal, Pembahasan, & Latihan
                    </h2>

                    {{-- Contoh 1: Warna Kesukaan --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100">
                        <h3 class="font-bold text-2xl text-sky-700 mb-3">1) Tabel Frekuensi: Warna Kesukaan</h3>
                        <p class="text-sky-900/90 text-sm">
                            Data 16 siswa: Hijau (3), Biru (4), Cokelat (2), Merah (4), Kuning (3).
                            (diolah dari daftar nama–warna pada soal).
                        </p>
                        <div class="overflow-x-auto mt-3">
                            <table class="min-w-[420px] border border-sky-200 text-sm">
                                <thead class="bg-sky-600 text-white">
                                    <tr>
                                        <th class="px-3 py-2 text-left">Warna</th>
                                        <th class="px-3 py-2 text-left">Banyak Anak</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-sky-100">
                                    <tr>
                                        <td class="px-3 py-2">Hijau</td>
                                        <td class="px-3 py-2">3</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-2">Biru</td>
                                        <td class="px-3 py-2">4</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-2">Cokelat</td>
                                        <td class="px-3 py-2">2</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-2">Merah</td>
                                        <td class="px-3 py-2">4</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-2">Kuning</td>
                                        <td class="px-3 py-2">3</td>
                                    </tr>
                                    <tr class="font-semibold bg-sky-50">
                                        <td class="px-3 py-2">Jumlah</td>
                                        <td class="px-3 py-2">16</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <details class="group rounded-lg border border-sky-200 bg-sky-50/40 p-4 mt-4">
                            <summary class="cursor-pointer font-medium text-sky-700 group-open:text-sky-900">Pembahasan
                            </summary>
                            <div class="mt-2 text-sm leading-relaxed">
                                Hitung frekuensi tiap warna dari daftar pada soal, lalu jumlahkan: \(3+4+2+4+3=16\).
                            </div>
                        </details>
                    </div>

                    {{-- Contoh 2: Membaca Diagram Batang Usia --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 mt-8">
                        <h3 class="font-bold text-2xl text-sky-700 mb-3">2) Membaca Diagram Batang: Usia 4 Orang</h3>
                        <p class="text-sky-900/90 text-sm">
                            Diketahui (dari diagram): Fazri 15, Bunga 20, Nadif 25, Syela 10. Jawab pernyataan: selisih
                            Bunga–Syela = 10 (bukan 15),
                            paling tua = Nadif, termuda = Syela.
                        </p>
                    </div>

                    {{-- Contoh 3: Frekuensi Harapan di Kelas --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 mt-8">
                        <h3 class="font-bold text-2xl text-sky-700 mb-3">3) Frekuensi Harapan (Kelas VIII)</h3>
                        <p class="text-sky-900/90 text-sm">
                            Jumlah siswa = 30. Peluang terpilih siswa usia &lt; 13 tahun = \( \tfrac{1}{5} \).
                            Perkiraan banyak siswa usia &lt; 13: \( \tfrac{1}{5}\times 30 = 6 \) siswa. Sisanya \(24\).
                        </p>
                    </div>

                    {{-- Contoh 4: Estimasi Kerusakan Lampu --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 mt-8">
                        <h3 class="font-bold text-2xl text-sky-700 mb-3">4) Estimasi dari Sampel (Lampu Pijar)</h3>
                        <p class="text-sky-900/90 text-sm">
                            Dari 100 lampu diuji, 5 rusak → peluang rusak \(\approx \tfrac{5}{100}\).
                            Perkiraan pada 3.000 lampu: \( \tfrac{5}{100}\times 3000 = 150 \) lampu rusak. (Jawaban:
                            150)
                        </p>
                    </div>

                    {{-- Contoh 5: Membandingkan Biaya Berlangganan --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 mt-8">
                        <h3 class="font-bold text-2xl text-sky-700 mb-3">5) Perbandingan Biaya: Dua Majalah</h3>
                        <div class="grid md:grid-cols-2 gap-3 text-sm">
                            <div class="p-3 rounded-md border border-sky-100 bg-sky-50/40">
                                <p class="font-medium">Gaya Hidup Remaja</p>
                                <p>Bayar 20 edisi × Rp15.000 = <strong>Rp300.000</strong></p>
                            </div>
                            <div class="p-3 rounded-md border border-sky-100 bg-sky-50/40">
                                <p class="font-medium">Seputar Remaja</p>
                                <p>Bayar 18 edisi × Rp15.500 = <strong>Rp279.000</strong></p>
                            </div>
                        </div>
                        <p class="text-sky-900/90 text-sm mt-2">
                            Lebih hemat “Seputar Remaja” (selisih Rp21.000).
                        </p>
                    </div>


                </section>

                {{-- CTA --}}
                <section class="text-center py-10">
                    <div
                        class="bg-gradient-to-br from-sky-400 to-sky-600 rounded-2xl p-8 text-white shadow-2xl shadow-sky-200">
                        <h2 class="text-3xl font-bold mb-3">Siap Uji Pemahamanmu?</h2>
                        <p class="mb-6 max-w-2xl mx-auto">
                            Kamu sudah kenal data, penyajian, pengolahan, dan peluang. Klik tombol di bawah untuk masuk
                            ke latihan lanjutan!
                        </p>
                        <a href="{{ route('materi-data-dan-ketidakpastian-pembahasan') }}"
                            class="inline-block bg-white text-sky-700 font-bold text-lg py-3 px-8 rounded-xl shadow-md hover:bg-sky-50 transform hover:-translate-y-0.5 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
                            Uji Kehebatanmu! 💪
                        </a>
                    </div>
                </section>

            </main>
        </div>
    </div>
</x-layouts.app>