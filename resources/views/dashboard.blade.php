<x-app-layout>

    <style>
    /* tampilan hasil jumlah lingkaran */
    .quick-count-container {
        display: flex;
        /* Menggunakan Flexbox */
        flex-direction: column;
        /* Mengatur elemen untuk berjajar secara vertikal */
        align-items: center;
        /* Menyelaraskan elemen secara horizontal di tengah */
        gap: 100px;
        /* Jarak antara elemen secara vertikal */
        text-align: center;
        /* Menyelaraskan teks di tengah */
    }

    .quick-count-item {
        display: flex;
        flex-direction: column;
        /* Menumpuk lingkaran dan teks secara vertikal */
        align-items: center;
        /* Menyelaraskan lingkaran dan teks secara horizontal di tengah */
    }

    .quick-count-circle {
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: #bbcbfd;
        color: rgb(0, 0, 0);
        font-size: 24px;
        font-weight: bold;
    }

    .quick-count-text {
        margin-top: 10px;
        /* Jarak antara lingkaran dan teks */
    }
    </style>

    <header>
        {{-- awal bagian bg gambar --}}
        <div class=" card text-bg-dark">
            <div style="position: relative;">
                <img src="{{ asset('img/mppG.png') }}" class="card-img w-full h-52" alt="bg-Mpp"
                    style="filter: brightness(50%) sepia(50%) hue-rotate(180deg);">
                <div class="card-img-overlay d-flex flex-column"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; padding-top: 20px; padding-left: 30px; margin-top:30px; ">
                    <h2 class="font-semibold text-xl text-white leading-tight">
                        Membantu Meningkatkan Efesiensi <br> Pengelolaan Stok dan memastikan bahwa <br> Data barang
                        selalu Akurat dan Terkini
                    </h2>
                </div>
                <div class="card-img-overlay d-flex justify-content-end align-items-start  p-20">
                    <a href="{{ route('admin.HalamanBarang') }}">
                        <button class="btn btn-primary " type="submit">Daftar Barang</button>
                    </a>
                </div>

            </div>
        </div>

    </header>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <!-- Tambahkan text-center di sini -->
                    <article class="py-8 max-w-screen-md border-b border-gray-400 mx-auto">
                        <!-- Tambahkan mx-auto di sini -->
                        <h1 class="mb-1 text-2xl tracking-tight font-bold text-gray-900">About Me</h1>

                        <div class="text-base text-black">
                            <a href="#"></a><a class="texs-sm">Dataku</a> | <a class="texs-sm">5 Agustus 2024</a>
                            <p class="my-4 text-sm"><b>Dataku</b> adalah aplikasi berbasis web yang dirancang untuk
                                mempermudah pengelolaan data oleh admin. Aplikasi ini memungkinkan admin untuk
                                menyimpan, menambah, dan menghapus data dengan antarmuka yang intuitif dan mudah
                                digunakan. Admin dapat mengakses dan mengelola data dengan cepat, baik itu menambah
                                entri baru, memperbarui data yang sudah ada, atau menghapus data yang tidak diperlukan
                                lagi.

                                Dengan fitur pencarian dan penyortiran yang efisien, admin dapat menemukan data dengan
                                mudah, bahkan di antara ribuan entri. Aplikasi Dataku juga dilengkapi dengan sistem
                                autentikasi yang kuat, memastikan bahwa hanya pengguna yang berwenang yang dapat
                                mengakses dan memodifikasi data. Selain itu, aplikasi ini mendukung backup dan pemulihan
                                data untuk mencegah kehilangan data yang tidak diinginkan. Dataku adalah solusi ideal
                                bagi organisasi yang memerlukan alat manajemen data
                            </p>
                        </div>
                    </article>

                    <article class="py-8 max-w-screen-md mx-auto border-b ">
                        <!-- Tambahkan mx-auto di sini -->
                        <h1 class="mb-5 text-2xl tracking-tight font-bold text-gray-900">Detail Aplikasi</h1>
                    </article>

                    {{-- card awal  --}}
                    <div class="container border-b border-gray-400 mx-auto">
                        <div class="row row-cols-1 row-cols-md-5 g-4 mb-10">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('img/satu.png') }}" class="w-10 mb-5" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2 text-gray-500"><b>Mengoptimalkan Pengelolaan Stok</b>
                                        </h5>
                                        <p class="card-text text-sm text-gray-500">Aplikasi ini membantu dalam
                                            mengoptimalkan pengelolaan stok,
                                            Menghindari kekurangan atau kelebihan stok.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('img/dua.png') }}" class="w-10 mb-5" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2 text-gray-500"><b>Meningkatkan Produktivitas</b></h5>
                                        <p class="card-text text-sm text-gray-500">Aplikasi pendataan barang dapat
                                            membantu mengurangi waktu,
                                            dan biaya dalam mengelola stok, sehingga meningkatkan
                                            produktivitas kegiatan usaha.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('img/tiga.png') }}" class="w-10 mb-5" alt="Inventaris">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2 text-gray-500"><b class="texs-sm">Membantu dalam
                                                Audit Inventaris</b></h5>
                                        <p class="card-text text-sm text-gray-500">Aplikasi ini dapat membantu dalam
                                            audit Inventaris
                                            dengan menyediakan laporan yang akurat dan lengkap
                                            tentang stok barang.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('img/empat.png') }}" class="w-10 mb-5" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2 text-gray-500"><b>Mengoptimalkan Pengelolaan
                                                Gudang</b></h5>
                                        <p class="card-text text-sm text-gray-500">Aplikasi ini membantu dalam
                                            mengoptimalkan pengelolaan
                                            Rak, Gudang, dan Supplier, sehingga memudahkan pengelolaan
                                            Stok dan Operasional Gudang.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('img/lima.png') }}" class="w-10 mb-5" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2 text-gray-500"><b>Membantu dalam Pencatatan
                                                Transaksi</b></h5>
                                        <p class="card-text text-sm text-gray-500">Aplikasi Pendataan barang dapat
                                            membantu dalam
                                            pencatatan transaksi, termasuk pengeluaran dan
                                            penerimaan barang, sehingga memudahkan pengelolaan
                                            stok dan keuangan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- menampilkan jumlah data --}}

                    <article class="py-8 max-w-screen-md mx-auto">
                        <!-- Tambahkan mx-auto di sini -->
                        <h1 class="mb-4 text-2xl tracking-tight font-bold text-gray-900">Jumlah Daftar Barang</h1>
                    </article>

                    {{-- Menampilkan jumlah data secara keseluruhan --}}
                    <div class="container mt-4">
                        <div class="quick-count-container">
                            <div class="quick-count-item">
                                <div class="quick-count-circle">
                                    {{ $totalData }}
                                </div>
                                <p class="quick-count-text">Jumlah Data Keseluruhan</p>
                            </div>
                            <div class="quick-count-item">
                                <div class="quick-count-circle">
                                    {{ $weeklyData }}
                                </div>
                                <p class="quick-count-text">Jumlah Data Baru ditambah seminggu ini</p>
                            </div>
                        </div>
                    </div>
                    {{-- card akhir --}}

                    <!-- Bagian Informasi Kontak -->
                    <div class="d-flex justify-content-center text-center mt-32">
                        <div class="d-flex align-items-center me-4">
                            <a href=""></a>
                            <img src="{{ asset('img/telp.png') }}" alt="" class="me-2 w-8 ">
                            <span>+6221-1167-6557</span>
                        </div>

                        <div class="d-flex align-items-center me-4">
                            <a href="https://www.instagram.com/mpp.bdg/">
                                <img src="{{ asset('img/instagram.png') }}" alt="" class="me-2 w-8 ">
                            </a>
                            <span>Mpp.Bandung</span>

                        </div>

                        <div class="d-flex align-items-center">
                            <a href="http://wa.me/+6282127274022">
                                <img src="{{ asset('img/wa.png') }}" alt="" class="me-2 w-8">
                            </a>
                            <span>+6221-1167-6557</span>

                        </div>
                    </div>

                    <div class="text-center mt-4 mb-10">
                        <a
                            href="https://www.google.com/maps?sca_esv=2346eec244b06c07&rlz=1C1BNSD_enID1037ID1037&output=search&q=mal+pelayanan+publik+kota+bandung&source=lnms&fbs=AEQNm0CTI4ghiYmMI-A67QciKvwhEVBEZaKMmvvXvCV-ZrcsMC7fInYod8119VhZWGoIKvaBRAmXpE2oBiMAIoS-pqwOqaVW2vgadIanVmWgspEvUAZ-NYYR4BzcWQNJqcJ_fTeCVn__uKVFkMcBVir0g2w4nt7RL8_D-qMYl5hwMyNB3K--TJUNfJQ8WxvO_TI7isuSabZ3n6YAq3THKnStvfPt3JZy-Q&entry=mc&ved=1t:200715&ictx=111">
                            <p style="color: blue; filter: brightness(100%);">
                                Jalan Cianjur No.34, Kacapiring, Kec.Batu-nunggal, Kota.Bandung, Jawa Barat 40271
                            </p>
                        </a>
                    </div>
                    <!-- Akhir Bagian Informasi Kontak -->

                </div>
            </div>
        </div>
    </div>

    {{-- card akhir --}}

    {{-- tiga logo  --}}

    {{-- <div class="d-flex justify-content-center text-center">
        <div class="d-flex align-items-center me-4">
            <img src="{{ asset('img/telp.png') }}" alt="" class="me-2 w-10">
    <span>+6221-1167-6557</span>
    </div>

    <div class="d-flex align-items-center me-4">
        <img src="{{ asset('img/instagram.png') }}" alt="" class="me-2 w-10">
        <span>Mpp.Bandung</span>
    </div>

    <div class="d-flex align-items-center">
        <img src="{{ asset('img/wa.png') }}" alt="" class="me-2 w-10">
        <span>+6221-1167-6557</span>
    </div>
    </div>

    <div class="text-center mt-4">
        <p style="color: blue; filter: brightness(30%);">
            Jalan Cianjut No.34, Kacapiring, Kec.Batu-nunggal, Kota.Bandung, Jawa Barat 40271
        </p>
    </div> --}}

    {{-- akhir tiga logo --}}











</x-app-layout>