<x-layouts.app>
    <x-slot:title>
        Pembahasan Bilangan
    </x-slot:title>

    <div class="bg-grid-bw min-h-screen">
        <div class="container mx-auto px-6 py-10">

            {{-- HEADER --}}
            <header class="mb-12 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight">Pembahasan dan Contoh Soal
                    —
                    Materi
                    Bilangan</h1>
                <p class="mt-3 text-lg text-sky-900/80 max-w-3xl mx-auto leading-relaxed">
                    Kumpulan contoh soal pemahaman, penerapan, dan penalaran lengkap dengan pembahasan.
                </p>
            </header>

            <main class="space-y-16">


                {{-- A. Contoh Soal Pemahaman 1 --}}
                <section>
                    <h2
                        class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
                        <span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-lg">A</span>
                        Contoh Soal Pemahaman
                    </h2>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-sky-800 mb-3">Perhatikan Garis Bilangan Berikut.</h3>

                            <img src="{{ asset('images/garisbilangan.png') }}" alt="">


                            <p class="text-sky-900/90 leading-relaxed text-xl mt-2 mb-4">
                                Bilangan <span class="font-semibold">A</span> yang memenuhi adalah …</p>

                            <ul class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">32,3</li>
                                <li
                                    class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 font-semibold text-sky-700">
                                    32,6 <span class="font-bold"> Jawaban Benar</span></li>
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">33,2</li>
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">33,4</li>
                            </ul>

                            <div class="bg-sky-50 border-l-4 text-xl border-sky-400 p-4 rounded-r-xl">
                                <div class="font-semibold text-sky-800">Pembahasan</div>
                                <p class="text-sky-900/90">Perhatikan bahwa antara bilangan 32 dan 33 dibagi menjadi 5
                                    bagian, sehingga setiap 1 bagian bernilai<span class="font-mono">\[
                                        \frac{1}{5}=0,2.
                                        \]
                                    </span>Bilangan A berada 3 langkah dari bilangan 32, sehingga nilainya sebagai
                                    berikut.
                                    <span class="font-mono">32 + 3 × 0,2 = 32 + 0,6 = 32,6</span>.
                                </p>
                                <p
                                    class="inline-flex items-center rounded-md bg-sky-100 px-2 text-lg py-1  mt-4 font-medium text-sky-800 ring-1 ring-inset ring-sky-200">
                                    Jawaban: 32,6</p>
                            </div>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden mt-8">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-sky-800 mb-3">Manajemen Waktu Nani</h3>
                            <p class="text-sky-900/90 text-xl leading-relaxed mb-4">
                                Dalam satu hari, Nani menggunakan,<span class="font-mono">\[
                                    \dfrac{1}{4}
                                    \]
                                </span> bagian waktunya untuk tidur,<span class="font-mono">\[
                                    \dfrac{1}{3}
                                    \]</span> Bagian untuk belajar di sekolah,<span class="font-mono">\[
                                    \dfrac{1}{3}
                                    \]</span> Bagian untuk makan dan belajar. Sisanya untuk bermain, menonton TV, dan
                                membantu orang tua. Beri tanda centang (✅) pada kolom Benar atau Salah untuk setiap
                                pernyataan berikut.
                            </p>

                            <div class="overflow-x-auto shadow-md mb-4">
                                <table class="min-w-[560px] w-full text-xl text-left border-collapse">
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
                                            <td class="py-3 px-4">Selama 8 jam, Nani menghabiskan waktunya belajar di
                                                sekolah.</td>
                                            <td class="py-3 px-4">✅</td>
                                            <td class="py-3 px-4">❌</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-4">Bermain, menonton TV, dan membantu orang tua,
                                                dilakukan selama 7 jam.
                                            </td>
                                            <td class="py-3 px-4">✅</td>
                                            <td class="py-3 px-4">❌</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="bg-sky-50 border-l-4 text-sky-800 text-xl border-sky-400 p-4 rounded-r-xl mt-4">
                                <div class="font-semibold ">Pembahasan</div>
                                <p>Dalam satu hari terdapat 24 jam.</p>
                                <p>Untuk tidur digunakan waktu selama:</p>
                                <p>\[
                                    \frac{1}{4}\times 24 = 6\,\text{jam}
                                    \]
                                </p>
                                <p>Untuk belajar di sekolah digunakan waktu selama:</p>
                                <p>\[
                                    \frac{1}{3}\times 24 = 8\,\text{jam}
                                    \]
                                </p>
                                <p>Untuk makan dan belajar digunakan waktu selama:</p>
                                <p>\[
                                    \frac{1}{8}\times 24 = 3\,\text{jam}
                                    \]
                                </p>
                                <p>Untuk bermain, menonton TV, dan membantu orang tua digunakan waktu selama:</p>
                                <p>24 – 6 – 8 – 3 = 7 jam</p>
                                <ul class="space-y-3 mt-4">
                                    <!-- SALAH -->
                                    <li
                                        class="flex items-start gap-3 rounded-xl border border-sky-100 bg-white p-4 shadow-sm">
                                        <span class="text-red-600 text-xl leading-6">❌</span>
                                        <div class="flex-1">
                                            <p class="text-sky-900/90">
                                                Nani menghabiskan waktu terbanyak untuk belajar di sekolah.
                                            </p>
                                            <span
                                                class="mt-2 inline-block rounded-full bg-red-50 px-2.5 py-0.5 text-xs font-semibold text-red-700 ring-1 ring-inset ring-red-200">
                                                Pernyataan salah
                                            </span>
                                        </div>
                                    </li>

                                    <!-- BENAR -->
                                    <li
                                        class="flex items-start gap-3 rounded-xl border border-sky-100 bg-white p-4 shadow-sm">
                                        <span class="text-sky-600 text-xl leading-6">✅</span>
                                        <div class="flex-1">
                                            <p class="text-sky-900/90">
                                                Nani menghabiskan waktunya belajar di sekolah selama 8 jam.
                                            </p>
                                            <span
                                                class="mt-2 inline-block rounded-full bg-sky-50 px-2.5 py-0.5 text-xs font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">
                                                Pernyataan benar
                                            </span>
                                        </div>
                                    </li>

                                    <!-- BENAR -->
                                    <li
                                        class="flex items-start gap-3 rounded-xl border border-sky-100 bg-white p-4 shadow-sm">
                                        <span class="text-sky-600 text-xl leading-6">✅</span>
                                        <div class="flex-1">
                                            <p class="text-sky-900/90">
                                                Bermain, menonton TV, dan membantu orang tua dilakukan selama 7 jam.
                                            </p>
                                            <span
                                                class="mt-2 inline-block rounded-full bg-sky-50 px-2.5 py-0.5 text-xs font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">
                                                Pernyataan benar
                                            </span>
                                        </div>
                                    </li>
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
                            <h3 class="text-xl font-bold  mb-3">Seorang pekerja bangunan</h3>

                            <p class="text-sky-900/90 leading-relaxed lg:flex items-center text-xl mt-2 mb-4">
                                Seorang pekerja bangunan memotong <span class="font-mono lg:px-4">\[ \dfrac{1}{5}
                                    \]</span>
                                bagian dari pipa. Panjang pipa yang dipotong adalah 3 m. Panjang pipa
                                mula-mula adalah...</p>

                            <ul class="grid sm:grid-cols-2 text-sky-800 text-xl md:grid-cols-4 gap-3 mb-4">
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">8 m</li>

                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">12 m</li>
                                <li
                                    class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 font-semibold text-sky-700">
                                    15 m<span class="font-bold italic"> Jawaban Benar</span></li>
                                <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">18 m</li>
                            </ul>

                            <div class="bg-sky-50 border-l-4 text-xl text-sky-900/90 border-sky-400 p-4 rounded-r-xl">
                                <div class="font-semibold text-sky-800">Pembahasan</div>
                                <p class="lg:flex items-center">Diketahui <span
                                        class="font-mono lg:px-4">\[\dfrac{1}{5}\]</span>
                                    bagian dari seluruh panjang pipa adalah 3 meter. Sehingga diperoleh
                                    <span class="font-mono px-4">\[
                                        \frac{1}{5}\times L = 3
                                        \]
                                    </span>
                                </p>
                                <p>Kita dapat mengganti L dengan bilangan 15, karena <span class="font-mono">\[
                                        \frac{1}{5}\times 15 = 3
                                        \]
                                    </span></p>

                                <p>Jadi, panjang pipa mula-mula adalah 15m.</p>
                                <p
                                    class="inline-flex items-center rounded-md bg-sky-100 px-2 text-lg py-1  mt-4 font-medium text-sky-800 ring-1 ring-inset ring-sky-200">
                                    Jawaban: 15 m</p>
                            </div>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden mt-8">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-sky-800 mb-3">Seorang Penjual Gorengan</h3>
                            <p class="text-sky-900/90 text-xl leading-relaxed mb-4">
                                Seorang penjual gorengan ingin membuat wadah minyak goreng berbentuk kubus. Ia biasa
                                membeli minyak goreng dalam kemasan 2 liter. Jika ia menginginkan agar wadah tersebut
                                dapat memuat seluruh minyak goreng yang ia beli, berapakah panjang rusuk wadah yang
                                harus ia buat? Berilah tanda centang (✅) pada jawaban yang mungkin.
                            </p>

                            <ul class="space-y-2">
                                <li>
                                    <label
                                        class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm">
                                        <input type="checkbox" class="accent-sky-600" disabled>
                                        <span class="text-sky-900/90">10 cm</span>
                                    </label>
                                </li>
                                <li>
                                    <label
                                        class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm">
                                        <input type="checkbox" class="accent-sky-600" disabled>
                                        <span class="text-sky-900/90">12 cm</span>
                                    </label>
                                </li>
                                <li>
                                    <label
                                        class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm font-semibold">
                                        <input type="checkbox" class="accent-sky-600" disabled>
                                        <span class="text-sky-700">13 cm</span>
                                    </label>
                                </li>
                                <li>
                                    <label
                                        class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm font-semibold">
                                        <input type="checkbox" class="accent-sky-600" disabled>
                                        <span class="text-sky-700">15 cm</span>
                                    </label>
                                </li>
                            </ul>




                            <div class="bg-sky-50 border-l-4 text-sky-800 text-xl border-sky-400 p-4 rounded-r-xl mt-4">
                                <div class="font-semibold ">Pembahasan</div>

                                <p>Wadah harus memuat minyak goreng sebanyak <span>\[
                                        2\,\mathrm{L} = 2\,\mathrm{dm}^{3} = 2\,000\,\mathrm{cm}^{3}.
                                        \]
                                    </span></p>
                                <p>Wadah berbentuk kubus dengan panjang rusuk = s </p>
                                <p class="flex items-center">Maka volumenya = <span class="font-bold pl-4">\[
                                        s \times s \times s = s^{3}
                                        \]
                                    </span></p>



                                <div class="overflow-x-auto shadow-md my-4">
                                    <table class="min-w-[560px] w-full text-xl text-left border-collapse">
                                        <thead>
                                            <tr class="bg-sky-600 text-white">
                                                <th class="py-3 px-4 rounded-tl-xl">Panjang Rusuk Wadah</th>
                                                <th class="py-3 px-4">Volume Wadah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sky-900/90 bg-white">
                                            <tr class="border-b border-sky-100">
                                                <td class="py-3 px-4">10 cm
                                                </td>
                                                <td class="py-3 px-4">\[
                                                    10^{3} = 1{.}000\,\mathrm{cm}^{3} = 1\,\mathrm{L}
                                                    \]
                                                </td>

                                            </tr>
                                            <tr class="border-b border-sky-100">
                                                <td class="py-3 px-4">12 cm</td>
                                                <td class="py-3 px-4">\[
                                                    12^{3} = 1{.}728\,\mathrm{cm}^{3} = 1{,}728\,\mathrm{L}
                                                    \]
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 px-4">13 cm
                                                </td>
                                                <td class="py-3 px-4">\[
                                                    13^{3} = 2{.}197\,\mathrm{cm}^{3} = 2{,}197\,\mathrm{L}
                                                    \]
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 px-4">15 cm
                                                </td>
                                                <td class="py-3 px-4">\[
                                                    15^{3} = 3{.}375\,\mathrm{cm}^{3} = 3{,}375\,\mathrm{L}
                                                    \]
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <p>Volume wadah harus lebih dari 2 liter, maka panjang rusuk yang mungkin:</p>


                                <ul class="space-y-2 my-4">
                                    <li>
                                        <label
                                            class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm">
                                            <input type="checkbox" class="accent-sky-600" disabled>
                                            <span class="text-sky-900/90">10 cm</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label
                                            class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm">
                                            <input type="checkbox" class="accent-sky-600" disabled>
                                            <span class="text-sky-900/90">12 cm</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label
                                            class="inline-flex items-center gap-2 bg-white border border-sky-200 rounded px-3 py-2 shadow-sm font-semibold">
                                            <input type="checkbox" class="accent-gray-900" checked>
                                            <span class="text-gray-900">13 cm</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label
                                            class="inline-flex items-center gap-2 bg-white border border-sky-200 rounded px-3 py-2 shadow-sm font-semibold">
                                            <input type="checkbox" class="accent-gray-900" checked>
                                            <span class="text-gray-900">15 cm</span>
                                        </label>
                                    </li>

                                </ul>

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
                        <div class="p-6">
                            <h3 class="text-xl font-bold  mb-3">Menentukan Bilangan</h3>

                            <p class="text-sky-900/90 leading-relaxed flex items-center text-xl mt-2 mb-4">Bilangan A
                                adalah 8,6. Bilangan B dua kali lebih besar daripada C bernilai 1,7 lebihnya dari
                                bilangan D. Bilangan A bernilai 2,4 lebihnya dari E. Jika bilangan E satu kurangnya dari
                                B, berilah tanda centang () pada pernyataan di bawah ini yang benar.</p>

                            <ul class="space-y-2">
                                <li>
                                    <label
                                        class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm">
                                        <input type="checkbox" class="accent-sky-600" disabled>
                                        <span class="text-sky-900/90">B merupakan bilangan terbesar.</span>
                                    </label>
                                </li>
                                <li>
                                    <label
                                        class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm">
                                        <input type="checkbox" class="accent-sky-600" disabled>
                                        <span class="text-sky-900/90">C lebih kecil dari jumlah A dan D.</span>
                                    </label>
                                </li>
                                <li>
                                    <label
                                        class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm font-semibold">
                                        <input type="checkbox" class="accent-sky-600" disabled>
                                        <span class="text-sky-700">D merupakan bilangan terkecil.</span>
                                    </label>
                                </li>
                                <li>
                                    <label
                                        class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm font-semibold">
                                        <input type="checkbox" class="accent-sky-600" disabled>
                                        <span class="text-sky-700">Jika diurutkan berdasarkan nilainya, C merupakan
                                            bilangan yang berada di tengah.</span>
                                    </label>
                                </li>
                            </ul>

                            <div
                                class="bg-sky-50 border-l-4 mt-4 text-xl text-sky-900/90 border-sky-400 p-4 rounded-r-xl">
                                <div class="font-semibold text-sky-800">Pembahasan</div>
                                <div class="space-y-4">
                                    <p>Diketahui A = 8,6.</p>
                                    <p>A Bernilai 2,4 lebihnya dari E.</p>
                                    <p>E=A-2,4=8,6-2,4=6,2</p>
                                    <p>E satu kurangnya dari B:</p>
                                    <p>B=E+1=6,2+1=7,2</p>
                                    <p>B dua kali lebih besar daripada C:</p>
                                    <p>\[
                                        C = \frac{B}{2} = \frac{7,2}{2} = 3,6
                                        \]
                                    </p>
                                    <p>C bernilai 1,7 lebihnya dari D:</p>
                                    <p>D=C-1,7=3,6-1,7=1,9</p>
                                    <ul class="list-disc list-inside space-y-3 p-5 text-sky-900/90">
                                        <li>
                                            Urutan bilangan dari yang terkecil adalah:
                                            <span class="font-semibold italic">D (1,9), C (3,6), E (6,2), B (7,2), A
                                                (8,6)</span>.
                                        </li>
                                        <li>
                                            Pernyataan "B merupakan bilangan terbesar" adalah <span
                                                class="font-semibold text-red-600">salah</span>. Bilangan terbesar
                                            adalah A (8,6).
                                        </li>
                                        <li>
                                            Pernyataan "C lebih kecil dari jumlah A dan D" adalah <span
                                                class="font-semibold text-sky-700">benar</span>, karena C (3,6) lebih
                                            kecil dari A + D (8,6 + 1,9 = 10,5).
                                        </li>
                                        <li>
                                            Pernyataan "D merupakan bilangan terkecil" adalah <span
                                                class="font-semibold text-sky-700">benar</span>, karena D memiliki
                                            nilai paling kecil (1,9).
                                        </li>
                                        <li>
                                            Pernyataan "C merupakan bilangan yang berada di tengah" adalah <span
                                                class="font-semibold text-red-600">salah</span>. Bilangan yang berada di
                                            tengah adalah E (6,2).
                                        </li>
                                    </ul>


                                    <p>Jadi, jawaban yang benar adalah sebagai berikut.</p>
                                    <ul class="space-y-2">
                                        <li>
                                            <label
                                                class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm">
                                                <input type="checkbox" class="accent-sky-600" disabled>
                                                <span class="text-sky-900/90">B merupakan bilangan terbesar.</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label
                                                class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm font-semibold">
                                                <input type="checkbox" class="accent-sky-600" checked disabled>
                                                <span class="text-sky-700">C lebih kecil dari jumlah A dan
                                                    D.</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label
                                                class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm font-semibold">
                                                <input type="checkbox" class="accent-sky-600" checked disabled>
                                                <span class="text-sky-700">D merupakan bilangan terkecil.</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label
                                                class="inline-flex items-center gap-2 bg-white border border-sky-100 rounded px-3 py-2 shadow-sm font-semibold">
                                                <input type="checkbox" class="accent-sky-600" disabled>
                                                <span class="text-sky-700">Jika diurutkan berdasarkan nilainya, C
                                                    merupakan
                                                    bilangan yang berada di tengah.</span>
                                            </label>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </article>

                </section>

                {{-- D. LATIHAN SOAL --}}


                {{-- CTA --}}
                <section class="text-center py-10">
                    <div
                        class="bg-gradient-to-br from-sky-400 to-sky-600 rounded-2xl p-8 text-white shadow-2xl shadow-sky-200">
                        <h2 class="text-3xl font-bold mb-3">Sudah paham?</h2>
                        <p class="mb-6 max-w-2xl mx-auto">Yuk coba soal berikut.</p>
                        <a href="{{ route('materi-bilangan-soal') }}"
                            class="inline-block bg-white text-sky-700 font-bold text-lg py-3 px-8 rounded-xl shadow-md hover:bg-sky-50 transform hover:-translate-y-0.5 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
                            Coba Soal
                        </a>
                    </div>
                </section>

            </main>
        </div>
    </div>
</x-layouts.app>