<x-layouts.app>
    <x-slot:title>
        Aljabar
    </x-slot:title>

    <div class="bg-gradient-to-b from-sky-50 to-white">
        <div class="container mx-auto px-4 md:px-6 py-10 md:py-14">
            <!-- HERO -->
            <header class="mb-10 md:mb-14 text-center">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-sm font-semibold">
                    ✨ Belajar Asyik Bareng Aljabar
                </div>
                <h1 class="mt-3 text-4xl md:text-5xl font-extrabold text-sky-700 tracking-tight">
                    Materi Lengkap: Aljabar
                </h1>
                <p class="mt-3 md:mt-4 text-base md:text-lg text-gray-600">
                    Penjelasan singkat, langkah jelas, contoh, dan latihan mini. Yuk, pelan‑pelan tapi pasti!
                </p>
            </header>

            <main class="space-y-14 md:space-y-16">
                <!-- POLA BARISAN BILANGAN -->
                <section id="pola-bilangan">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl">🔷</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Pola Barisan Bilangan</h2>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Pola bilangan membantu kita “menebak” suku berikutnya dari urutan angka tertentu.
                        Kenali polanya, lalu tuliskan rumus suku ke‑<em>n</em>.
                    </p>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Persegi Panjang -->
                        <div class="bg-white p-5 rounded-xl border border-sky-100 shadow-sm">
                            <h3 class="font-semibold text-lg text-sky-800 mb-2">🧩 Persegi Panjang</h3>
                            <p class="text-gray-600 mb-1">Barisan: 2, 6, 12, 20, …</p>
                            <p class="text-gray-700">Rumus: <span class="font-mono">U<sub>n</sub> = n(n+1)</span></p>
                            <div class="mt-3 text-sm text-gray-500">Tips: hasil kali dua bilangan berurutan.</div>
                        </div>
                        <!-- Persegi -->
                        <div class="bg-white p-5 rounded-xl border border-sky-100 shadow-sm">
                            <h3 class="font-semibold text-lg text-sky-800 mb-2">🟩 Persegi</h3>
                            <p class="text-gray-600 mb-1">Barisan: 1, 4, 9, 16, …</p>
                            <p class="text-gray-700">Rumus: <span class="font-mono">U<sub>n</sub> = n²</span></p>
                            <div class="mt-3 text-sm text-gray-500">Tips: 1², 2², 3², 4², …</div>
                        </div>
                        <!-- Segitiga -->
                        <div class="bg-white p-5 rounded-xl border border-sky-100 shadow-sm">
                            <h3 class="font-semibold text-lg text-sky-800 mb-2">🔺 Segitiga</h3>
                            <p class="text-gray-600 mb-1">Barisan: 1, 3, 6, 10, …</p>
                            <p class="text-gray-700">Rumus: <span class="font-mono">U<sub>n</sub> = n(n+1)/2</span></p>
                            <div class="mt-3 text-sm text-gray-500">Tips: jumlah 1+2+…+n.</div>
                        </div>
                        <!-- Ganjil -->
                        <div class="bg-white p-5 rounded-xl border border-sky-100 shadow-sm">
                            <h3 class="font-semibold text-lg text-sky-800 mb-2">🟠 Ganjil</h3>
                            <p class="text-gray-600 mb-1">Barisan: 1, 3, 5, 7, 9, …</p>
                            <p class="text-gray-700">Rumus: <span class="font-mono">U<sub>n</sub> = 2n − 1</span></p>
                        </div>
                        <!-- Genap -->
                        <div class="bg-white p-5 rounded-xl border border-sky-100 shadow-sm">
                            <h3 class="font-semibold text-lg text-sky-800 mb-2">🔵 Genap</h3>
                            <p class="text-gray-600 mb-1">Barisan: 2, 4, 6, 8, 10, …</p>
                            <p class="text-gray-700">Rumus: <span class="font-mono">U<sub>n</sub> = 2n</span></p>
                        </div>
                        <!-- Pascal -->
                        <div class="bg-white p-5 rounded-xl border border-sky-100 shadow-sm">
                            <h3 class="font-semibold text-lg text-sky-800 mb-2">🧮 Segitiga Pascal</h3>
                            <p class="text-gray-700">
                                Koefisien pada \((a+b)^n\) mengikuti barisan di Segitiga Pascal:
                                entri baris ke‑n adalah \(\binom{n}{k}\).
                            </p>
                            <details class="mt-2">
                                <summary class="text-sm text-sky-700 cursor-pointer">Lihat contoh kecil</summary>
                                <div class="mt-2 text-sm text-gray-700">
                                    Baris 0: 1<br>
                                    Baris 1: 1 1<br>
                                    Baris 2: 1 2 1 (untuk \((a+b)^2\) → \(a^2+2ab+b^2\))
                                </div>
                            </details>
                        </div>
                    </div>

                    <!-- Hafalan -->
                    <div class="mt-6 p-4 rounded-xl bg-sky-50 border border-sky-100">
                        <p class="font-semibold text-sky-900">📝 Ringkas Hafalan:</p>
                        <p class="text-gray-700">
                            Persegi Panjang: \(n(n+1)\) • Persegi: \(n^2\) • Segitiga: \(\frac{n(n+1)}{2}\) •
                            Ganjil: \(2n-1\) • Genap: \(2n\)
                        </p>
                    </div>
                </section>

                <!-- BARISAN & DERET -->
                <section id="barisan-deret">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl">📈</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Barisan & Deret</h2>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-6">
                        <!-- Aritmetika -->
                        <div class="bg-white p-6 rounded-xl border border-emerald-100 shadow-sm">
                            <h3 class="text-xl font-semibold text-emerald-800 mb-2">Aritmetika (beda tetap)</h3>
                            <p class="text-gray-600">
                                Ciri: selisih antar suku selalu sama (misal +3, +3, +3, …).
                            </p>

                            <div class="mt-4 space-y-2 text-gray-800">
                                <p>Rumus suku ke‑n: \(\displaystyle U_n = a + (n-1)b\)</p>
                                <p>Jumlah \(n\) suku: \(\displaystyle S_n = \frac{n}{2}(2a+(n-1)b) =
                                    \frac{n}{2}(a+U_n)\)</p>
                            </div>

                            <div class="mt-4 p-4 rounded-lg bg-emerald-50">
                                <p class="font-semibold text-emerald-900">Langkah Kenali & Hitung</p>
                                <ol class="mt-2 list-decimal list-inside text-gray-700 space-y-1">
                                    <li>Cek beda \(b\) dengan mengurangkan suku berurutan.</li>
                                    <li>Tentukan \(a\) (suku pertama).</li>
                                    <li>Gunakan rumus \(U_n\) atau \(S_n\) sesuai kebutuhan.</li>
                                </ol>
                            </div>

                            <div class="mt-4 p-4 rounded-lg bg-white border">
                                <p class="font-semibold">Contoh:</p>
                                <p>Barisan 4, 7, 10, 13, … (beda \(b=3\)). Cari \(U_{20}\).</p>
                                <p class="mt-1 font-mono">U<sub>20</sub> = 4 + (20‑1)×3 = 61</p>
                            </div>

                            <details class="mt-3">
                                <summary class="cursor-pointer text-sm text-gray-600">Kesalahan umum</summary>
                                <ul class="mt-2 text-sm text-gray-700 list-disc list-inside">
                                    <li>Mengira beda berubah (padahal tetap).</li>
                                    <li>Salah memasukkan \(n\) (ingat: mulai dari 1).</li>
                                </ul>
                            </details>
                        </div>

                        <!-- Geometri -->
                        <div class="bg-white p-6 rounded-xl border border-indigo-100 shadow-sm">
                            <h3 class="text-xl font-semibold text-indigo-800 mb-2">Geometri (rasio tetap)</h3>
                            <p class="text-gray-600">
                                Ciri: setiap suku dikali bilangan yang sama (rasio \(r\)).
                            </p>

                            <div class="mt-4 space-y-2 text-gray-800">
                                <p>Suku ke‑n: \(\displaystyle U_n = a\,r^{\,n-1}\)</p>
                                <p>Jumlah \(n\) suku: \(\displaystyle S_n = a\frac{1-r^n}{1-r}=a\frac{r^n-1}{r-1}\)
                                    (untuk \(r\ne1\))</p>
                                <p>Jumlah tak hingga: \(\displaystyle S_\infty=\frac{a}{1-r}\) jika \(|r|&lt;1\)</p>
                            </div>

                            <div class="mt-4 p-4 rounded-lg bg-indigo-50">
                                <p class="font-semibold text-indigo-900">Langkah Kenali & Hitung</p>
                                <ol class="mt-2 list-decimal list-inside text-gray-700 space-y-1">
                                    <li>Hitung rasio \(r\) dengan membagi suku berurutan.</li>
                                    <li>Tentukan \(a\) (suku pertama).</li>
                                    <li>Gunakan rumus \(U_n\) atau \(S_n\).</li>
                                </ol>
                            </div>

                            <div class="mt-4 p-4 rounded-lg bg-white border">
                                <p class="font-semibold">Contoh:</p>
                                <p>Barisan 3, 6, 12, 24, … (rasio \(r=2\)).</p>
                                <p class="font-mono">U<sub>10</sub> = 3×2<sup>9</sup> = 1536 &nbsp; • &nbsp;
                                    S<sub>8</sub> = 3×(2<sup>8</sup>−1)/(2−1) = 765
                                </p>
                            </div>

                            <details class="mt-3">
                                <summary class="cursor-pointer text-sm text-gray-600">Kesalahan umum</summary>
                                <ul class="mt-2 text-sm text-gray-700 list-disc list-inside">
                                    <li>Tertukar pola aritmetika vs geometri.</li>
                                    <li>Salah pangkat (ingat \(n-1\) pada \(U_n\)).</li>
                                </ul>
                            </details>
                        </div>
                    </div>

                    <!-- Bertingkat -->
                    <div class="mt-6 bg-white p-6 rounded-xl border border-fuchsia-100 shadow-sm">
                        <h3 class="text-xl font-semibold text-fuchsia-800 mb-2">Barisan Aritmetika Bertingkat</h3>
                        <p class="text-gray-600">Beda tingkat‑2 konstan → polinom kuadrat, tingkat‑3 konstan → polinom
                            kubik.</p>
                        <div class="mt-3 grid md:grid-cols-2 gap-4">
                            <div class="bg-fuchsia-50 p-4 rounded-lg">
                                <p class="font-medium text-gray-800">Tingkat‑2 (kuadrat)</p>
                                <p class="text-sm text-gray-700">Contoh: 4, 7, 12, 19, 28, 39, … (selisih: +3, +5, +7,
                                    +9,…)</p>
                                <p class="mt-1 font-mono text-sm">U<sub>n</sub> = n² + 3 → U<sub>20</sub>=403</p>
                            </div>
                            <div class="bg-fuchsia-50 p-4 rounded-lg">
                                <p class="font-medium text-gray-800">Tingkat‑3 (kubik)</p>
                                <p class="text-sm text-gray-700">Umum: \(U_n=An^3+Bn^2+Cn+D\) (pakai tabel selisih
                                    berulang).</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ARITMETIKA SOSIAL -->
                <section id="aritmetika-sosial">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl">🛒</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Aritmetika Sosial</h2>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800 mb-2">Untung & Rugi</h3>
                            <p class="text-gray-700 text-sm">Untung = Jual − Beli • Rugi = Beli − Jual</p>
                            <p class="text-gray-700 text-sm mt-1">%Untung = (Untung/Beli)×100% • %Rugi =
                                (Rugi/Beli)×100%</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800 mb-2">Bruto, Netto, Tara</h3>
                            <p class="text-gray-700 text-sm">Bruto = Netto + Tara (kotor = bersih + kemasan)</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800 mb-2">Diskon</h3>
                            <p class="text-gray-700 text-sm">Harga Akhir = Harga Awal − (Diskon% × Harga Awal)</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border shadow-sm md:col-span-2 lg:col-span-3">
                            <h3 class="font-semibold text-sky-800 mb-2">Bunga</h3>
                            <p class="text-gray-700 text-sm">Bunga tunggal 1 tahun = Persentase × Modal</p>
                            <details class="mt-2">
                                <summary class="text-sm text-gray-600 cursor-pointer">Contoh</summary>
                                <p class="mt-2 text-gray-700 text-sm">Modal 300.000, bunga 15%/tahun → Bunga =
                                    0,15×300.000 = 45.000</p>
                            </details>
                        </div>
                    </div>
                </section>

                <!-- PERSAMAAN & PERTIDAKSAMAAN -->
                <section id="plsv-ptlsv">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl">➗</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">PLSV & PtLSV</h2>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- PLSV -->
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <h3 class="text-lg font-semibold text-sky-800">Persamaan Linier Satu Variabel</h3>
                            <p class="text-gray-600 text-sm">Boleh tambah/kurang/kali/bagi <em>kedua ruas</em> dengan
                                bilangan yang sama (≠0).</p>
                            <div class="mt-3 p-3 bg-sky-50 rounded-lg">
                                <p class="font-semibold text-sky-900">Contoh</p>
                                <p class="font-mono text-sm">2n + 8 = 30 → 2n = 22 → n = 11</p>
                            </div>
                        </div>
                        <!-- PtLSV -->
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <h3 class="text-lg font-semibold text-sky-800">Pertidaksamaan Linier Satu Variabel</h3>
                            <p class="text-gray-600 text-sm">Jika kali/bagi <strong>bilangan negatif</strong>, tanda
                                pertidaksamaan dibalik.</p>
                            <div class="mt-3 p-3 bg-amber-50 rounded-lg">
                                <p class="font-semibold text-amber-900">Contoh</p>
                                <p class="font-mono text-sm">−½ y &lt; 4 → kali (−2): y &gt; −8</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SPLDV -->
                <section id="spldv">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl">📐</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">SPLDV</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Dua persamaan dengan dua variabel (x, y). Bentuk umum: <span
                            class="font-mono">a₁x+b₁y=c₁</span> dan <span class="font-mono">a₂x+b₂y=c₂</span>.</p>

                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800 mb-1">1) Substitusi</h3>
                            <p class="text-sm text-gray-700">Nyatakan x atau y dari salah satu persamaan, ganti ke
                                persamaan lain.</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800 mb-1">2) Eliminasi</h3>
                            <p class="text-sm text-gray-700">Samakan koefisien, lalu jumlah/kurang untuk menghilangkan
                                variabel.</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800 mb-1">3) Grafik</h3>
                            <p class="text-sm text-gray-700">Titik potong dua garis adalah solusi (x, y).</p>
                        </div>
                    </div>

                    <!-- worked example -->
                    <div class="mt-4 p-4 rounded-xl bg-white border shadow-sm">
                        <p class="font-semibold text-gray-800">Contoh Dikerjakan (Eliminasi)</p>
                        <p class="text-sm text-gray-700 mt-1">
                            \(\begin{cases}
                            2x + 3y = 16\\
                            x - y = 2
                            \end{cases}\)
                        </p>
                        <ol class="mt-2 list-decimal list-inside text-sm text-gray-700 space-y-1">
                            <li>Kali persamaan kedua dengan 3 → \(3x - 3y = 6\)</li>
                            <li>Jumlah dengan yang pertama: \((2x+3y)+(3x-3y)=16+6\) ⇒ \(5x=22\) ⇒ \(x=\frac{22}{5}\)
                            </li>
                            <li>Substitusi ke \(x-y=2\) ⇒ \(y=x-2=\frac{12}{5}\)</li>
                        </ol>
                        <p class="mt-1 text-sm text-emerald-700"><strong>Jawab:</strong>
                            \(x=\frac{22}{5},\,y=\frac{12}{5}\)</p>
                    </div>
                </section>

                <!-- RELASI & FUNGSI -->
                <section id="relasi-fungsi">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl">🔗</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Relasi & Fungsi</h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <h3 class="text-lg font-semibold text-sky-800">Relasi</h3>
                            <p class="text-gray-700 text-sm">
                                Menghubungkan anggota himpunan A ke B. Penyajian: diagram panah, koordinat Kartesius,
                                atau pasangan berurutan.
                            </p>
                            <details class="mt-2">
                                <summary class="text-sm text-gray-600 cursor-pointer">Contoh cepat</summary>
                                <p class="text-sm text-gray-700 mt-1">A = {1,2,3}, B = {a,b}; Relasi “genap→a,
                                    ganjil→b”.</p>
                            </details>
                        </div>

                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <h3 class="text-lg font-semibold text-sky-800">Fungsi</h3>
                            <p class="text-gray-700 text-sm">
                                Setiap anggota A dipetakan ke <em>tepat satu</em> anggota B (domain → kodomain).
                            </p>
                            <ul class="mt-2 text-sm text-gray-700 list-disc list-inside">
                                <li>Domain: daerah asal</li>
                                <li>Kodomain: daerah kawan</li>
                                <li>Range: hasil pemetaan</li>
                            </ul>
                            <div class="mt-3 p-3 bg-indigo-50 rounded-lg">
                                <p class="font-semibold text-indigo-900 text-sm">Contoh fungsi \(f(x)=2x+1\)</p>
                                <table class="mt-2 w-full text-sm">
                                    <thead class="text-indigo-700">
                                        <tr>
                                            <th class="text-left pr-4">x</th>
                                            <th class="text-left">y=f(x)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700">
                                        <tr>
                                            <td>−1</td>
                                            <td>−1</td>
                                        </tr>
                                        <tr>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="mt-2 text-sm text-gray-700">Jumlah fungsi dari A ke B: jika \(|A|=n\), \(|B|=m\) →
                                \(m^n\). Bijeksi (korespondensi 1‑1) untuk \(|A|=|B|=n\): \(n!\).</p>
                        </div>
                    </div>
                </section>

                <!-- CONTOH SOAL & PEMBAHASAN -->
                <section id="contoh-pembahasan">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl">🧠</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Contoh Soal & Pembahasan</h2>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-5 rounded-r-xl">
                            <h3 class="font-bold text-blue-900">Soal 1 (Diskon)</h3>
                            <p class="mt-1 text-gray-700">Harga awal Rp30.000 → promo Rp22.500. Berapa % diskon?</p>
                            <div class="mt-3 bg-white p-4 rounded border">
                                <p class="text-sm"><strong>Pembahasan:</strong> 30.000 − 22.500 = 7.500 →
                                    (7.500/30.000)×100% = <strong>25%</strong></p>
                            </div>
                        </div>

                        <div class="bg-green-50 border-l-4 border-green-500 p-5 rounded-r-xl">
                            <h3 class="font-bold text-green-900">Soal 2 (Belanja Cerdas)</h3>
                            <p class="mt-1 text-gray-700">Beli 2 baju @125.000, pilih promo termurah.</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm">
                                <li>Riang: Beli 1 Gratis 1 → diskon efektif 50%</li>
                                <li>Gembira: 50% lalu 20% sisa → 50% + 10% = <strong>60%</strong></li>
                                <li>Ceria: 40%</li>
                                <li>Bahagia: (0% + 90%)/2 = 45%</li>
                            </ul>
                            <div class="mt-3 bg-white p-4 rounded border text-sm">
                                <strong>Jawaban:</strong> Toko Gembira (diskon 60%).
                            </div>
                        </div>
                    </div>
                </section>

                <!-- LATIHAN -->
                <section id="latihan">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl">📝</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Latihan Mini (Coba Sendiri)</h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Latihan 1 -->
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800">Rasio Gir</h3>
                            <p class="text-sm text-gray-700">Motor A(13/43), B(14/35), C(14/42), D(15/40), E(15/45).
                                Pasangan rasio sama?</p>
                            <details class="mt-2">
                                <summary class="cursor-pointer text-sm text-gray-600">Pembahasan</summary>
                                <p class="mt-1 text-sm text-gray-700">B=2,5 • C=3 • D≈2,67 • E=3 → <strong>C &
                                        E</strong></p>
                            </details>
                        </div>
                        <!-- Latihan 2 -->
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800">Bus & Van (SPLDV)</h3>
                            <p class="text-sm text-gray-700">444 orang, bus 54, van 15, van = bus+2. Tentukan jumlah bus
                                & van.</p>
                            <details class="mt-2">
                                <summary class="cursor-pointer text-sm text-gray-600">Pembahasan</summary>
                                <p class="mt-1 text-sm text-gray-700">54b+15(b+2)=444 → 69b=414 → b=6, v=8.</p>
                            </details>
                        </div>
                        <!-- Latihan 3 -->
                        <div class="bg-white p-5 rounded-xl border shadow-sm">
                            <h3 class="font-semibold text-sky-800">Tenaga Kerja</h3>
                            <p class="text-sm text-gray-700">Target 3 minggu, 10 orang. Kerja 1 minggu, jeda 4 hari.
                                Tambahan pekerja?</p>
                            <details class="mt-2">
                                <summary class="cursor-pointer text-sm text-gray-600">Pembahasan</summary>
                                <p class="mt-1 text-sm text-gray-700">Total 210 OH; dikerjakan 70 OH; sisa 140 OH; sisa
                                    10 hari → perlu 14 org → tambah <strong>4 org</strong>.</p>
                            </details>
                        </div>
                    </div>

                    <!-- Hafalan akhir -->
                    <div class="mt-6 p-4 rounded-xl bg-sky-50 border border-sky-100">
                        <p class="font-semibold text-sky-900">🎯 Ringkas Hafalan Akhir:</p>
                        <ul class="mt-2 text-gray-700 list-disc list-inside">
                            <li>Aritmetika: \(U_n=a+(n-1)b\), \(S_n=\frac{n}{2}(2a+(n-1)b)\)</li>
                            <li>Geometri: \(U_n=ar^{n-1}\), \(S_n=a\frac{1-r^n}{1-r}\) (|r|&lt;1 →
                                \(S_\infty=\frac{a}{1-r}\))</li>
                            <li>PtLSV: kali/bagi negatif → tanda dibalik</li>
                            <li>SPLDV: Substitusi, Eliminasi, Grafik</li>
                        </ul>
                    </div>
                </section>
            </main>
        </div>
    </div>
</x-layouts.app>