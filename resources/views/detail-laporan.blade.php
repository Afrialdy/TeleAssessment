@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/detail-laporan.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="profil-box">
                        <img src="img/profil-review/adudu.jpeg" alt="">
                        <div class="user-box px-4">
                            <h2>Rafli Diptana</h2>
                            <div class="user-info">
                                <div>
                                    <h3>081296154504</h3>
                                    <h3>farlidiptana@gmail.com</h3>
                                </div>
                                <div class="icons">
                                    <a href="">
                                        <i class="lni lni-printer"></i>
                                    </a>
                                    <a href="">
                                        <i class="lni lni-download"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="user-detail d-flex mt-2">
                                <h4>21</h4>
                                <h4>Male</h4>
                                <h4>No ID: 175</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="deskripsi-box">
                        <div class="header-box">
                            <h2>Ringkasan</h2>
                        </div>
                        <p class="mt-4 px-4">Rafli Diptana adalah seorang individu dengan tipe kepribadian INTJ. Tipe kepribadian ini dikenal sebagai pemikir strategis yang logis dan analitis. Rafli memiliki minat yang tinggi dalam pengembangan perangkat lunak dan memiliki tingkat kecerdasan yang tinggi. Dia juga memiliki tingkat detail yang tinggi dalam pekerjaannya.</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="deskripsi-box">
                        <div class="header-box">
                            <h2>Kekuatan</h2>
                        </div>
                        <ul class="mt-4">
                            <li>
                                Pemikir strategis: Rafli mampu melihat gambaran besar dan mengembangkan strategi yang efektif untuk mencapai tujuannya.
                            </li>
                            <li>
                                Logis dan analitis: Rafli mampu memecahkan masalah dengan cara yang logis dan sistematis.
                            </li>
                            <li>
                                Kreatif: Rafli mampu menghasilkan ide-ide baru dan inovatif.
                            </li>
                            <li>
                                Mandiri: Rafli mampu bekerja secara mandiri dan menyelesaikan tugasnya dengan baik.
                            </li>
                            <li>
                                Detail-oriented: Rafli mampu memperhatikan detail kecil dan memastikan bahwa pekerjaannya dilakukan dengan benar.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="deskripsi-box">
                        <div class="header-box">
                            <h2>Kelemahan</h2>
                        </div>
                        <ul class="mt-4">
                            <li>
                                Terlalu kritis: Rafli terkadang terlalu kritis terhadap diri sendiri dan orang lain.
                            </li>
                            <li>
                                Sulit beradaptasi: Rafli terkadang sulit beradaptasi dengan perubahan.
                            </li>
                            <li>
                                Terlalu perfeksionis: Rafli terkadang terlalu perfeksionis dan dapat menjadi frustrasi ketika sesuatu tidak berjalan sesuai harapannya.
                            </li>
                            <li>
                                Dapat terisolasi: Rafli terkadang dapat terisolasi karena dia lebih suka menghabiskan waktu sendirian untuk berpikir.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="deskripsi-box">
                        <div class="header-box">
                            <h2>Kelemahan</h2>
                        </div>
                        <p class="mt-4 px-3">Rafli Diptana adalah seorang individu dengan tipe kepribadian INTJ. Tipe kepribadian ini dikenal sebagai pemikir strategis yang logis dan analitis. Rafli memiliki minat yang tinggi dalam pengembangan perangkat lunak dan memiliki tingkat kecerdasan yang tinggi. Dia juga memiliki tingkat detail yang tinggi dalam pekerjaannya.</p>
                        <h5 class="fs-6 px-3">Berikut adalah beberapa rekomendasi untuk rafli diptana:</h5>
                        <ul class="recomen mt-3">
                            <li>
                                Berlatihlah untuk menjadi lebih fleksibel dan terbuka terhadap perubahan.
                            </li>
                            <li>
                                Berlatihlah untuk bekerja sama dengan orang lain dan membangun hubungan yang positif.
                            </li>
                            <li>
                                Belajarlah untuk menerima kritik secara konstruktif.
                            </li>
                            <li>
                                Jangan terlalu perfeksionis dan fokuslah untuk menyelesaikan tugas dengan baik.
                            </li>
                        </ul>
                        <h5 class="fs-6 px-3">Dengan mengembangkan kemampuannya, Rafli Diptana dapat mencapai potensi penuhnya dan menjadi pengembang perangkat lunak yang sukses.</h5>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="kesimpulan-box">
                        <div class="header-box">
                            <h2>Kelemahan</h2>
                        </div>
                        <p class="mt-4 px-3">Rafli Diptana adalah individu yang cerdas dan berbakat dengan potensi besar untuk sukses dalam pengembangan perangkat lunak. Dia memiliki semua keterampilan dan kemampuan yang diperlukan untuk menjadi pengembang perangkat lunak yang sukses. Namun, dia perlu mengembangkan beberapa kemampuannya, seperti kemampuannya untuk beradaptasi dan bekerja sama dengan orang lain. Dengan mengembangkan kemampuannya, Rafli Diptana dapat mencapai potensi penuhnya dan menjadi pengembang perangkat lunak yang sukses.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/generateData.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
