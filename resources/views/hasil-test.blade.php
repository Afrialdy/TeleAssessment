@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/hasil-test.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="hasil-test">
                <div class="hasil-box d-flex mt-3">
                    <img src="img/profil-review/adudu.jpeg" alt="" class="img-fluid">
                    <div class="profil d-flex flex-column">
                        <h2 class="fw-bolder fs-4">Rafli Diptana</h2>
                        <div class="profil-set d-flex">
                            <h6>raflidiptana@gmail.com</h6>
                            <h6>081296154504</h6>
                            <div class="icons">
                                <a href="">
                                    <i class="lni lni-printer"></i>
                                </a>
                                <a href="">
                                    <i class="lni lni-download"></i>
                                </a>
                            </div>
                        </div>
                        <div class="h mt-2"></div>
                        <table class="mt-3">
                            <tr>
                                <th>Kepribadian</th>
                                <th>Minat Bakat</th>
                                <th>Intelegensi</th>
                                <th>Keputusan</th>
                            </tr>
                            <tr class="">
                                <td>ENTP</td>
                                <td>Programmer</td>
                                <td>Tinggi</td>
                                <td>Diterima</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="test-box">
                    <div class="header-box d-flex mb-4">
                        <img src="img/interview test.png" alt="" class="img-fluid">
                        <h2>INTERVIEW TEST</h2>
                    </div>
                    <ul>
                        <li class="mb-3">
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Penyaringan awal (Pre-screening)</h3>
                        </li>
                        <li class="mb-3">
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Interview Video Ai</h3>
                        </li>
                        <li>
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Wawancara Tatap Muka (Opsional)</h3>
                        </li>
                    </ul>
                </div>

                <div class="test-box">
                    <div class="header-box d-flex mb-4">
                        <img src="img/interest and talent.png" alt="" class="img-fluid">
                        <h2>INTEREST AND TALENT TEST</h2>
                    </div>
                    <ul>
                        <li class="mb-3">
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Penyaringan Data</h3>
                        </li>
                        <li class="mb-3">
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Tes Kepribadian</h3>
                        </li>
                        <li class="mb-3">
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Tes Minat</h3>
                        </li>
                        <li>
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Tes Bakat</h3>
                        </li>
                    </ul>
                </div>

                <div class="test-box">
                    <div class="header-box d-flex mb-4">
                        <img src="img/cognitive style.png" alt="" class="img-fluid">
                        <h2>COGNITIVE STYLE TEST</h2>
                    </div>
                    <ul>
                        <li class="mb-3">
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Tes Pilihan Ganda</h3>
                        </li>
                        <li>
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Tes Gaya Kognitif (Gaya belajar, berpikir, berkomunikasi)</h3>
                        </li>
                    </ul>
                </div>

                <div class="test-box">
                    <div class="header-box d-flex mb-4">
                        <img src="img/validation test.png" alt="" class="img-fluid">
                        <h2>VALIDATION TEST</h2>
                    </div>
                    <ul>
                        <li class="mb-3">
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Pemilihan Jenis Test (Pilihan ganda, case studi, simulasi)</h3>
                        </li>
                        <li>
                            <i class="lni lni-checkmark-circle"></i>
                            <h3>Pelaksanaan Test</h3>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/generateData.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
