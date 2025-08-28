<x-layouts.app>
    <x-slot:title>
        Data & Ketidakpastian
    </x-slot:title>

    <div class="bg-sky-50 min-h-screen">
        <div class="container mx-auto px-6 py-10">

            {{-- HERO / HEADER --}}
            <header class="mb-14 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight drop-shadow-sm">
                    Data dan Ketidakpastian
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

                    {{-- Peta Konsep Utama --}}
                    <div class="bg-sky-600 p-4 rounded-xl shadow-lg text-white text-center mb-8">
                        <p class="text-3xl font-semibold mb-4">Data</p>
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 text-xl text-sky-600">
                            <div class="bg-white rounded-lg p-3">
                                <p class="font-semibold pb-4">Pengertian Data</p>
                                <p class="text-justify">Data adalah keterangan atau informasi yang diperoleh dari
                                    suatu penelitian dan diperlukan untuk mendapatkan gambaran suatu keadaan setelah
                                    dilakukan pengolahan data.</p>
                            </div>
                            <div class="bg-white rounded-lg p-3">
                                <p class="font-semibold pb-4">Pengumpulan Data</p>
                                <p class="text-justify">Pengumpulan data adalah proses untuk mendapatkan data yang
                                    diperlukan. Pengumpulan data dapat dilakukan melalui pengamatan langsung
                                    (observasi), wawancara (interview), angket, dan lain-lain.</p>
                            </div>
                            <div class="bg-white rounded-lg p-3">
                                <p class="font-semibold pb-4">Pengurutan Data</p>
                                <p class="text-justify">Pengurutan data adalah proses mengurutkan data agar
                                    tersusun secara sistematis dari data terkecil ke data terbesar.</p>
                            </div>
                            <div class="bg-white rounded-lg p-3">
                                <p class="font-semibold pb-4">Populasi dan Sample</p>
                                <p class="text-justify">Populasi adalah keseluruhan objek penelitian, sedangkan
                                    sampel adalah himpunan bagian dari populasi.</p>
                            </div>
                            <div class="bg-white rounded-lg p-3">
                                <p class="font-semibold pb-4">Kesimpulan</p>
                                <p class="text-justify">Kesimpulan merupakan hasil akhir dari proses penelitian
                                    yang menggambarkan jawaban dari permasalahan yang diteliti.</p>
                            </div>
                        </div>

                    </div>
                    <div class="bg-sky-600 p-4 rounded-xl shadow-lg text-white text-center mb-8">
                        <p class="text-3xl font-semibold mb-4">Penyajian Data</p>
                        <div class="grid sm:grid-cols-2 text-xl md:grid-cols-4 gap-3 text-sky-600">
                            <div class="bg-white  rounded-lg p-3">
                                <p class="font-semibold pb-4">Tabel</p>
                                <p class="text-justify">Tabel adalah cara penyajian data dalam bentuk baris dan kolom.
                                </p>
                            </div>
                            <div class="bg-white rounded-lg p-3 ">
                                <p class="font-semibold pb-4">Diagram Batang</p>
                                <p class="text-justify">Diagram batang adalah diagram yang menyajikan data bentuk batang
                                    atau kotak.
                                </p>
                            </div>
                            <div class="bg-white rounded-lg p-3">
                                <p class="font-semibold pb-4">Diagram Garis</p>
                                <p class="text-justify">Diagram garis adalah diagram yang penyajian datanya dalam bentuk
                                    garis.</p>
                            </div>
                            <div class="bg-white rounded-lg p-3">
                                <p class="font-semibold pb-4">Diagram Lingkaran</p>
                                <p class="text-justify">Diagram lingkaran adalah diagram yang menyajikan data dalam
                                    bentuk lingkaran
                                    yang dibagi menjadi beberapa bagian.</p>
                            </div>
                            <div class="bg-white rounded-lg p-3">
                                <p class="font-semibold pb-4">Poligon dan Histogram</p>
                                <p class="text-justify">Histogram merupakan diagram yang menyajikan data dalam bentuk
                                    batang seperti
                                    halnya diagram batang, namun data yang satu dengan yang lainnya dibuat tidak
                                    terpisah. Sedangkan polygon adalah diagram yang menyatakan data dalam bentuk garis
                                    yang dihubungkan antar nilai tengah setiap data yang berada diatas histogram.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Penyajian Data --}}
                    <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 hover:shadow-lg transition">
                        <h3 class="font-bold text-2xl text-center text-sky-700 mb-4 flex items-center gap-3">Pengolahan
                            Data
                        </h3>

                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-sky-50 border-2 border-sky-200 text-sky-700 p-4 rounded-lg">
                                <p class="font-bold text-xl ">Mean</p>
                                <p class="text-sm mt-1">Untuk menghitung rata-rata, jumlah seluruh data
                                    dibagi dengan banyak data.</p>
                                <p>\[
                                    \bar{x} = \frac{\sum x}{n}
                                    \]
                                </p>
                                <div class="text-base  leading-relaxed">
                                    <p><strong>Keterangan:</strong></p>
                                    <p>𝑥̄ = rata-rata</p>
                                    <p>Σx = jumlah data</p>
                                    <p>n = banyak data</p>

                                    <p class="mt-4">Untuk menghitung rata-rata gabungan digunakan rumus berikut:</p>

                                    <p class="mt-2 text-center">
                                        𝑥̄<sub>total</sub> =
                                        <span style="display:inline-block; vertical-align:middle; text-align:center;">
                                            <span
                                                style="border-bottom:1px solid #000; display:inline-block; padding:0 5px;">
                                                𝑥̄<sub>1</sub>n<sub>1</sub> + 𝑥̄<sub>2</sub>n<sub>2</sub>
                                            </span>
                                            <br>
                                            n<sub>1</sub> + n<sub>2</sub>
                                        </span>
                                    </p>
                                </div>
                                <div class="text-base  leading-relaxed">
                                    <p><strong><em>Keterangan:</em></strong></p>
                                    <p>𝑥̄<sub>1</sub> = rata-rata kelompok 1</p>
                                    <p>𝑥̄<sub>2</sub> = rata-rata kelompok 2</p>
                                    <p>n<sub>1</sub> = banyak anggota kelompok 1</p>
                                    <p>n<sub>2</sub> = banyak anggota kelompok 2</p>
                                </div>


                            </div>
                            <div class="bg-amber-50 border-2 border-amber-200 p-4 rounded-lg">
                                <p class="font-bold text-xl text-amber-700">Modus</p>
                                <p class="text-sm text-amber-700/80 mt-1">Modus merupakan data yang paling sering muncul
                                    dalam Kumpulan data atau nilai yang memiliki frekuensi yang terbesar.</p>
                            </div>
                            <div class="bg-rose-50 border-2 border-rose-200 p-4 text-justify rounded-lg">
                                <p class="font-bold text-xl text-rose-700">Median</p>
                                <p class="text-sm text-rose-700/80 mt-1">Median merupakan nilai Tengah suatu data yang
                                    telah diurutkan dari data terkecil hingga data terbesar. Cara menentukan median
                                    suatu data, pertama data harus di urutkan. Kemudian, dari data yang sudah diurutkan
                                    tersebut ditentukan nilai tengahnya.</p>
                                <ul class="list-disc pl-5 text-rose-700/80">
                                    <li>Jika banyak data ganjil, nilai median dapat langsung diperoleh.</li>
                                    <li>Jika banyak data genap, nilai median sama dengan jumlah kedua data di tengah
                                        dibagi 2.</li>
                                </ul>
                            </div>
                            <div class="bg-rose-60 border-2 border-rose-600 p-4 text-justify rounded-lg">
                                <p class="font-bold text-xl text-rose-700">Jangkauan</p>
                                <p class="text-sm text-rose-700/80 mt-1">Jangkauan adalah selisih nilai terbesar dan
                                    terkecil dari sekumpulan data.</p>
                                <p class="text-sm text-rose-700/80 mt-1">\[
                                    J = x_{\text{maks}} - x_{\text{min}}
                                    \]
                                </p>

                            </div>
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

                    <div class="grid md:grid-cols-2 gap-8">
                        {{-- Ruang Sampel & Peluang --}}
                        <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100">
                            <h3 class="font-bold text-2xl text-sky-700 mb-4">Titik Sample dan Ruang Sample</h3>
                            <p class="text-sky-900/90 mb-3">
                                Ruang sampel adalah Kumpulan atau himpunan semua hasil yang mungkin muncul ada suatu
                                percobaan. Ruang sampel dilambangkan dengan S, sedangkan anggota-anggota dari S disebut
                                titik sampel. Banyak anggota (titik sampel) suatu ruang sampel dinyatakan dengan n(S).
                                Cara menentukan ruang sampel dan titik sampel ada tiga, yaitu dengan mendaftar, tabel,
                                dan diagram pohon.
                            </p>
                            <div class="bg-sky-50 p-4 rounded-lg">
                                <p class="font-semibold text-sky-800">Peluang Suatu Kejadian</p>
                                <p class="text-sky-900/90 mb-3">
                                    Peluang adalah nilai kemungkinan yang terjadi antara perbandingan banyaknya suatu
                                    kejadian dengan banyaknya suatu kejadian.
                                </p>
                                <div class="text-base text-sky-900/90 leading-relaxed">
                                    <p class="text-center mt-4">
                                        P(A) =
                                        <span style="display:inline-block; vertical-align:middle; text-align:center;">
                                            <span
                                                style="border-bottom:1px solid #000; display:inline-block; padding:0 5px;">
                                                n(A)
                                            </span>
                                            <br>
                                            n(S)
                                        </span>
                                    </p>

                                    <p class="mt-6"><strong><em>Keterangan:</em></strong></p>
                                    <p>P(A) = nilai peluang munculnya kejadian A</p>
                                    <p>n(A) = banyaknya kejadian A</p>
                                    <p>n(S) = banyaknya anggota ruang sampel</p>
                                </div>

                            </div>
                        </div>

                        {{-- Frekuensi Relatif & Harapan --}}
                        <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100">
                            <h3 class="font-bold text-2xl text-sky-700 mb-4">Frekuensi Relatif</h3>
                            <p class="text-sky-900/90 mb-3">
                                Frekuensi relative adalah perbandingan antara banyaknya nilai yang muncul dengan
                                banyaknya percobaan yang dilakukan.
                            </p>
                            <div class="text-center my-4">
                                \[
                                F_t = \frac{\text{banyaknya kemunculan}}{\text{banyaknya percobaan}}
                                \]
                            </div>

                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100">
                            <h3 class="font-bold text-2xl text-sky-700 mb-4">Frekuensi Harapan</h3>
                            <p class="text-sky-900/90 mb-3">
                                Frekuensi harapan suatu kejadian adalah harapan banyaknya muncul suatu kejadian dari
                                sejumlah percobaan yang dilakukan.
                            </p>
                            <div class="text-center my-4">
                                \[
                                F_h = \text{peluang} \times \text{banyaknya percobaan}
                                \]

                                \[
                                = P(A) \times N
                                \]
                            </div>


                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100">
                            <h3 class="font-bold text-2xl text-sky-700 mb-4">Peluang Dua Kejadian Saling Lepas</h3>
                            <p class="text-sky-900/90 mb-3">
                                Dua kejadian saling lepas jika dua kejadian tersebut tidak dapat terjadi secara
                                bersamaan.
                            </p>
                            <div class="text-center my-4">
                                \[
                                P(A \; \text{atau} \; B) = P(A) + P(B)
                                \]
                            </div>
                            <p class="text-sky-900/90 mb-3">
                                <span> Keterangan: </span>
                                <span> P(A) = peluang kejadian A</span>
                                <span> P(B) = peluang kejadian B</span>
                            </p>



                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100">
                            <h3 class="font-bold text-2xl text-sky-700 mb-4">Peluang Dua Kejadian Saling Bebas</h3>
                            <p class="text-sky-900/90 mb-3">
                                Dua kejadian misal kejadian A dan B dikatakan saling bebas jika kejadian A tidak
                                memengaruhi terjadi atau tidak terjadinya kejadian B.
                            </p>
                            <div class="text-center my-4">
                                \[
                                P(A \; \text{dan} \; B) = P(A) \times P(B)
                                \]
                            </div>




                        </div>
                    </div>


                </section>

                {{-- C. CONTOH SOAL, PEMBAHASAN, & LATIHAN --}}
             
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