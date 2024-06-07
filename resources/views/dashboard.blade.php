@extends('layout.master')

@section('content')
        <!-- Main Content -->
        <main class="content px-3 py-4">
            <div class="container-fluid">
                <div class="mb-3">
                    <div class="">
                        <div class="row d-flex flex-row">
                            <div class="col-md-3 mb-4">
                                <div class="test-item">
                                    <div class="icon-container">
                                        <img src="img/group.png" alt="Group" class="group-image">
                                    </div>
                                    <div class="text-content d-flex flex-column">
                                        <span class="number">{{ $userCount }}</span>
                                        <span class="label">Jumlah Peserta</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="test-item">
                                    <div class="chart-wrapper">
                                        <div class="chart" data-percent="90" data-toggle="tooltip" title="User 90 dari 100">
                                            <span class="percent" data-after="%"></span>
                                        </div>
                                        <div class="chart-text">Tes Cognitive</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="test-item">
                                    <div class="chart-wrapper">
                                        <div class="chart" data-percent="80" data-toggle="tooltip" title="User 80 dari 100">
                                            <span class="percent" data-after="%"></span>
                                        </div>
                                        <div class="chart-text">Tes Interview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="test-item">
                                    <div class="chart-wrapper">
                                        <div class="chart" data-percent="100" data-toggle="tooltip" title="User 100 dari 100">
                                            <span class="percent" data-after="%"></span>
                                        </div>
                                        <div class="chart-text">Tes Validasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="charts">
                        <div class="box-chart">
                            <h2>Grafik Peserta Perbulan</h2>
                            <canvas id="lineChart"></canvas>
                        </div>

                        <div class="box-chart" id="doughtnut-chart">
                            <h2>Tes Kepribadian</h2>
                            <canvas id="doughnut"></canvas>
                        </div>
                    </div>

                    <!-- Pertanyaan Interview -->
                    <div class="question-box mt-4">
                        <div class="q-box d-flex flex-column">
                            <h5 class="fw-bold mb-4">Pertanyaan Interview</h5>
                            <div class="d-flex box-profil mb-4">
                                <img src="img/interview test.png" class="img-fluid" alt="">
                                <div class="d-flex flex-column">
                                    <h2>INTERVIEW TEST</h2>
                                    <P>Analisis sentimen wajah & analisis sentimen suara.</P>
                                </div>
                                <a href="">
                                    <span class="pertanyaan">10 Pertanyaan</span>
                                </a>
                            </div>

                            <div class="d-flex box-profil mb-4">
                                <img src="img/interest and talent.png" class="img-fluid" alt="">
                                <div class="d-flex flex-column">
                                    <h2>INTEREST TALENT TEST</h2>
                                    <P>Mengetes kemampuan kognitif test.</P>
                                </div>
                                <a href="">
                                    <span class="pertanyaan">10 Pertanyaan</span>
                                </a>
                            </div>

                            <div class="d-flex box-profil mb-4">
                                <img src="img//cognitive style.png" class="img-fluid" alt="">
                                <div class="d-flex flex-column">
                                    <h2>COGNITIVE STYLE TEST</h2>
                                    <P>Mengetes kemampuan kognitif test.</P>
                                </div>
                                <a href="">
                                    <span class="pertanyaan">5 Pertanyaan</span>
                                </a>
                            </div>

                            <div class="d-flex box-profil mb-4">
                                <img src="img/validation test.png" class="img-fluid" alt="">
                                <div class="d-flex flex-column">
                                    <h2>VALIDATION TEST</h2>
                                    <P>Test tertulis untuk memvalidasi hasil asesmen interaktif</P>
                                </div>
                                <a href="">
                                    <span class="pertanyaan">5 Pertanyaan</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Data Kandidat -->
                    <div class="datakandidat mt-4">
                        <div class="databox">
                            <table>
                                <thead class="px-4">
                                    <tr>
                                        <td>Pengguna</td>
                                        <td style="padding-right: 30px;">ID</td>
                                        <td style="padding-left: 10px;">No Telepon</td>
                                        <td>Tanggal Lahir</td>
                                        <td style="padding-right: 30px;">Usia</td>
                                        <td style="padding-right: 20px;">Gender</td>
                                        <td style="padding-left: 15px;">Keterangan</td>
                                        <td>
                                            <a href="" style="padding-left: 17px">
                                                <i class="lni lni-printer"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="" style="padding-left: 20px">
                                                <i class="lni lni-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </thead>

                                <tr class="separator">
                                    <td colspan="12"></td>
                                </tr>

                                <tbody id="dataContainer">
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Review -->
                    <div class="revBox mt-4">
                        <div class="rBox d-flex flex-column">
                            <h5 class="fw-bold mb-4 text-center">Review Terbaru</h5>
                            <div class="d-flex box-profil mb-4">
                                <img src="img/profil-review/adudu.jpeg" class="avatar img-fluid" alt="avatar">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                            </div>

                            <div class="d-flex box-profil mb-4">
                                <img src="img/profil-review/probe.jpeg" class="avatar img-fluid" alt="avatar">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                            </div>

                            <div class="d-flex box-profil mb-4">
                                <img src="img/profil-review/tok-abah.jpeg" class="avatar img-fluid" alt="avatar">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                            </div>

                            <div class="d-flex box-profil mb-4">
                                <img src="img/profil-review/cikgu.jpg" class="avatar img-fluid" alt="avatar">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                            </div>

                            <div class="d-flex box-profil mb-4">
                                <img src="img/profil-review/upin.jpeg" class="avatar img-fluid" alt="avatar">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                            </div>

                            <a href="{{ route('review') }}" class="text-center">
                                <button type="button" class="btn btn-primary">Show Details</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
        <script src="{{ asset('js/my_chart.js') }}"></script>
    <script>

    </script>
    @endsection