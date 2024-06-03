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
                                    <div class="icon-item">
                                        <i class="lni lni-phone"></i> <!-- Tambahkan icon envelope disini -->
                                        <h3>081296154504</h3>
                                    </div>
                                    <div class="icon-item">
                                        <i class="lni lni-envelope"></i> <!-- Tambahkan icon envelope disini -->
                                        <h3>farlidiptana@gmail.com</h3>
                                    </div>
                                </div>
                                <div class="icons">
                                    <button id="exportPDF" class="btn btn-primary">
                                        <span>Export PDF</span>
                                        <i class="lni lni-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="user-detail d-flex mt-2">
                                <h4>21</h4>
                                <h4>-</h4>
                                <h4>Male</h4>
                                <h4>-</h4>
                                <h4>No ID: 175</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="deskripsi-box">
                        <div class="header-box">
                            <h2>Kepribadian INTJ</h2>
                        </div>
                        <ol class="mt-4">
                            <li>
                                Karakteristik Kunci:
                            </li>
                            <ul>
                                <li>Pemikir Strategis</li>
                                <li>Logis dan analitis</li>
                                <li>Kreatif</li>
                                <li>Mandiri</li>
                                <li>Detail-oriented</li>
                            </ul>
                        </ol>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="deskripsi-box">
                        <div class="header-box">
                            <h2>Bakat dan Minat</h2>
                        </div>
                        <ol class="mt-4">
                            <li>Bakat: Pengembangan Software</li>
                            <li>Minat:</li>
                            <ul>
                                <li>Memecahkan masalah</li>
                                <li>Belajar hal-hal baru</li>
                                <li>Bekerja secara mandiri</li>
                            </ul>
                        </ol>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="deskripsi-box">
                        <div class="header-box">
                            <h2>Intelegensi</h2>
                        </div>
                        <ol class="mt-4">
                            <li>Tingkat Kecerdasan: Tinggi</li>
                            <li>Keterampilan Kognitif</li>
                            <ul>
                                <li>Pemecahan masalah</li>
                                <li>Berpikir kritis</li>
                                <li>Belajar</li>
                                <li>Memori</li>
                            </ul>
                        </ol>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="kesimpulan-box">
                        <div class="header-box">
                            <h2>Kesimpulan</h2>
                        </div>
                        <p class="mt-4 px-3">Rafli Diptana adalah individu yang cerdas dan berbakat dengan potensi besar untuk sukses dalam pengembangan perangkat lunak. Dia memiliki semua keterampilan dan kemampuan yang diperlukan untuk menjadi pengembang perangkat lunak yang sukses. Namun, dia perlu mengembangkan beberapa kemampuannya, seperti kemampuannya untuk beradaptasi dan bekerja sama dengan orang lain. Dengan mengembangkan kemampuannya, Rafli Diptana dapat mencapai potensi penuhnya dan menjadi pengembang perangkat lunak yang sukses.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
