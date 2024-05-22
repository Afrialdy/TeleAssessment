@extends('layout.master')

@section('content')
        <!-- Main Content -->
        <main class="content px-3 py-4">
            <div class="container-fluid">
                <div class="mb-3">
                    <div class="row g-sm-5">
                        <div class="col-12 col-md-4">
                            <div class="card border-0">
                                <div class="card-body p-5 d-flex flex-column">
                                    <img src="img/group.png" alt="" class="mb-2">
                                    <h5 class="fw-bold">Jumlah Peserta</h5>
                                    <h2 class="mb-4">400</h2>
                                    <div class="mb-0">
                                        <span class="fw-lighter">
                                            Bulan April
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card border-0">
                                <div class="card-body py-4 d-flex flex-column">
                                    <h5 class="fw-bold">Waktu Interview</h5>
                                    <p class="mb-2 fw-lighter">
                                        Rata-Rata
                                    </p>
                                    <canvas id="myChart"></canvas>
                                    <div class="time-info d-flex mt-2">
                                        <span class="aa fw-bold">25 Menit</span>
                                        <span class="bb fw-bold">30 Menit</span>
                                        <span class="cc fw-bold">45 Menit</span>
                                    </div>
                                    <div class="time-info d-flex mt-2 justify-content-center">
                                        <span class="dd fw-bold">50 Menit</span>
                                        <span class="ee fw-bold">60 Menit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card border-0">
                                <div class="card-body py-4 d-flex flex-column">
                                    <h5 class="fw-bold">Tes Kepribadian</h5>
                                    <p class="mb-2 fw-lighter">
                                        Rata-Rata
                                    </p>
                                    <canvas id="ourchart"></canvas>
                                    <div class="time-info d-flex mt-2">
                                        <span class="aa fw-bold">INFJ</span>
                                        <span class="bb fw-bold">INFP</span>
                                        <span class="cc fw-bold">ENFJ</span>
                                        <span class="cc fw-bold">ENTJ</span>
                                    </div>
                                    <div class="time-info d-flex mt-2">
                                        <span class="dd fw-bold">ENFP</span>
                                        <span class="ee fw-bold">INTJ</span>
                                        <span class="ff fw-bold">INTP</span>
                                        <span class="ff fw-bold">ENTP</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grafik Peserta -->
                    <div class="graphBox mt-2">
                        <div class="box d-flex flex-column">
                            <h5 class="fw-bold mb-4">Grafik Peserta Perbulan</h5>
                            <canvas id="lineChart"></canvas>
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
    @endsection
