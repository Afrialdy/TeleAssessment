@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/hasil-test.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="hasil-test">
                <div class="hasil-box d-flex mt-3">
                    <img src="{{ asset('img/avatar.png') }}" alt="" class="img-fluid">
                    <div class="profil d-flex flex-column">
                        <h2 class="fw-bolder fs-4">{{ $user->nama_lengkap }}</h2>
                        <div class="profil-set d-flex">
                            <h6>{{ $user->email }}</h6>
                            <h6>{{ $user->phone }}</h6>
                            <div class="icons">
                                <button id="exportPDF" class="btn btn-primary">
                                    <span>Export PDF</span>
                                    <i class="lni lni-download"></i>
                                </button>
                            </div>
                        </div>
                        <div class="h mt-2"></div>
                        <table class="mt-3">
                            <tr>
                                <th>Kepribadian</th>
                                <th>Minat Bakat</th>
                                <th>Intelegensi</th>
                            </tr>
                            <tr class="">
                                <td>{{ $user->kepribadian }}</td>
                                <td>{{ $user->bakat }}</td>
                                <td>{{ $user->intelegensi }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <?php
        // Assuming $penilaianBeo->scoreString contains the comma-separated string
        $scoreArrayfpos = explode(',', $penilaianBeo->f_sentimen_positif);
        $scoreArrayfpos = array_map('floatval', $scoreArrayfpos);

        $scoreArrayfneu = explode(',', $penilaianBeo->f_sentimen_netral);
        $scoreArrayfneu = array_map('floatval', $scoreArrayfneu);

        $scoreArrayfneg = explode(',', $penilaianBeo->f_sentimen_negatif);
        $scoreArrayfneg = array_map('floatval', $scoreArrayfneg);

        $scoreArrayv = explode(',', $penilaianBeo->v_sentimen);
        $scoreArrayv = array_map('floatval', $scoreArrayv);

        $scoreArrayvalidasi = explode(',', $penilaianBeo->skor_validasi_kepribadianbakatminat);
        $scoreArrayvalidasi = array_map('floatval', $scoreArrayvalidasi);

        $scoreArraykepercayaan = explode(',', $penilaianBeo->kepercayaan);
        $scoreArraykepercayaan = array_map('floatval', $scoreArraykepercayaan);
        ?>

                <div class="header-box">
                    <img src="{{ asset('img/interview test.png') }}" alt="" class="img-fluid">
                    <h2>INTERVIEW TEST</h2>
                </div>
                <div class="test-box">
                    <table class="table table-bordered text-center" id="tabelKepribadian">
                        <thead>
                            <tr>
                                <th colspan="2" class="vertical-header"></th>
                                <th colspan="3" class="vertical-header">Sentimen Asesmen Facial</th>
                                <th colspan="3" class="vertical-header">Sentimen Asesmen Voice to text</th>
                                <th colspan="1" class="vertical-header">Validation</th>
                                <th colspan="1" class="vertical-header">Lie Behaviour</th>
                            </tr>

                            <tr>
                                <th colspan="2" class="vertical-header">Kepribadian</th>
                                <th class="vertical-header">Negatif</th>
                                <th class="vertical-header">Netral</th>
                                <th class="vertical-header">Positif</th>
                                <th class="vertical-header">Negatif</th>
                                <th class="vertical-header">Netral</th>
                                <th class="vertical-header">Positif</th>
                                <th class="vertical-header">Skor Validasi</th>
                                <th class="vertical-header">SkorKepercayaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 3 Kepribadian -->
                            <tr>
                                <th>Extraversion</th>
                                <td>Mudah bergaul, aktif, talk-active, personoriented, optimis, menyenangkan, kasih sayang,
                                    bersahabat</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[0]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[0]; ?></td>
                            </tr>
                            <tr>
                                <th>Conscientiousness</th>
                                <td>Teratur, dapat dipercaya, pekerja keras, displin, tepat waktu, teliti, rapi, ambisius, tekun
                                </td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[1]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[1]; ?></td>
                            </tr>
                            <tr>
                                <th>Agreeableness</th>
                                <td>Berhati lembut, baik, suka menolong, dapat dipercaya, mudah memaafkan, mudah untuk dimaafkan,
                                    terus terang</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[2]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[2]; ?></td>
                            </tr>
                            <tr>
                                <th>Openness</th>
                                <td>Rasa ingin tahu tinggi, ketertarikan luas, kreatif, original, imajinatif, tidak ketinggalan
                                    zaman</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[3]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[3]; ?></td>
                            </tr>
                            <tr>
                                <th>Neuroticism</th>
                                <td>Kuatir, cemas, emosional, tidak merasa nyaman, kurang penyesuaian, kesedihan yang tidak
                                    beralasan</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[4]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[4]; ?></td>
                            </tr>
                            <!-- Row 7 Minat -->
                            <tr>
                                <th colspan="10">Minat</th>
                            </tr>

                            <tr>
                                <th>Realistic</th>
                                <td>Terampil secara mekanik dan/atau pekerjaan yang mengutamakan keterampilan fisik, dan kekuatan
                                    otot</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[5]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[5]; ?></td>
                            </tr>
                            <tr>
                                <th>Investigative</th>
                                <td>Cenderung memiliki ketertarikan/minat untuk mengobservasi, belajar, menganalisis dan memecahkan
                                    masalah</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[6]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[6]; ?></td>
                            </tr>
                            <tr>
                                <th>Artistic</th>
                                <td>Berhati lembut, baik, suka menolong, dapat dipercaya, mudah memaafkan, mudah untuk dimaafkan,
                                    terus terang</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[7]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[7]; ?></td>
                            </tr>
                            <tr>
                                <th>Social</th>
                                <td>Memiliki minat bekerja dengan individu lain dibandingkan dengan peralatan</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[8]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[8]; ?></td>
                            </tr>
                            <tr>
                                <th>Enterprising</th>
                                <td>Memiliki minat bekerja dengan individu lain, serta mempersuasi orang lain dan tampil di muka
                                    umum</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[9]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[9]; ?></td>
                            </tr>
                            <tr>
                                <th>Conventional</th>
                                <td>Memiliki minat terhadap hal-hal yang mendetail, terorganisir, dan berkaitan dengan data</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[10]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[10]; ?></td>
                            </tr>
                            <!-- Row 14 Bakat -->
                            <tr>
                                <th colspan="10">Bakat</th>
                            </tr>
                            <tr>
                                <th>Dimensi perseptual</th>
                                <td>Potensi kemampuan yang berhubungan pada bentuk persepsi, dimana terdapat faktor yang meliputi
                                    seperti kepekaan indera, perhatian, orientasi ruang, waktu, luas daerah persepsi, kecepatan
                                    persepsi</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[11]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[11]; ?></td>
                            </tr>
                            <tr>
                                <th>Dimensi psikomotor</th>
                                <td>Terdiri dari (ketepatan statis yang menitik beratkan pada posisi, dan ketepatan dinamis yang
                                    menitikberatkan pada gerakan), koordinasi, dan keluwesan</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[12]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[12]; ?></td>
                            </tr>
                            <tr>
                                <th>Dimensi intelektual</th>
                                <td>Terdiri dari ingatan, pengenalan, evaluatif, konvergen, dan berfikir divergen</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>

                                <td><?php echo $scoreArrayvalidasi[13]; ?></td>
                                <td><?php echo $scoreArraykepercayaan[13]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- <div class="header-box">
                    <img src="{{ asset('img/interest and talent.png') }}" alt="" class="img-fluid">
                    <h2>INTEREST AND TALENT TEST</h2>
                </div>
                <div class="test-box">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th colspan="2">Kepribadian</th>
                                <th colspan="3">Sentimen Asesmen Facial</th>
                                <th colspan="3">Sentimen Asesmen Voice to text</th>
                                <th>Validation</th>
                                <th>Lie Behaviour</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Negatif</th>
                                <th>Netral</th>
                                <th>Positif</th>
                                <th>Negatif</th>
                                <th>Netral</th>
                                <th>Positif</th>
                                <th>Skor Validasi</th>
                                <th>Skor Kepercayaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="header">Extraversion</td>
                                <td class="header">Mudah Bergaul, Aktif, Talk-active, personariented, optomis, menyenangkan, kasih sayang, bersahabat.</td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header">Conscientiousness</td>
                                <td class="header">Teratur, dapat dipercaya, pekerja keras, disiplin, tepat waktu, teliti, rapi, ambisius, tekun.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header">Agreeableness</td>
                                <td class="header">Berhati lembut, baik, suka menolong, dapat dipercaya, mudah memaafkan, mudah untuk dimaafkan, terus terang.</td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header">Openness</td>
                                <td class="header">Rasa ingin tahu tinggi, ketertarikan luas, kreatif, original, imajinatif, tidak ketinggalan zaman.</td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}

                <div class="header-box">
                    <img src="{{ asset('img/cognitive style.png') }}" alt="" class="img-fluid">
                    <h2>Hasil Tele-Asesmen COGNITIVE</h2>
                </div>
                <div class="test-box">
                    <table id="scoreTable" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th colspan="1" class="vertical-header">Intelegensi</th>
                                <th colspan="1" class="vertical-header">Dimensi</th>
                                <th colspan="1" class="vertical-header">Raw Score</th>
                                <th colspan="1" class="vertical-header">Rendah</th>
                                <th colspan="1" class="vertical-header">Rata-Rata</th>
                                <th colspan="1" class="vertical-header">Tinggi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Satzerganzung (SE) → Melengkapi Kalimat</th>
                                <td>Kemampuan pengambilan keputusan, keinginan berprestasi, penilaian atau pembentukan opini, common
                                    sense, penekanan pada berpikir praktis dan konkrit pemaknaan realitas, dan berpikir secara
                                    mandiri</td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Wortauswahl (WA) → Melengkapi Kata-kata</th>
                                <td>Kemampuan menangkap inti atau makna dari sesuatu yang disampaikan melalui bahasa, perasaan
                                    empati atau kemampuan menyelami perasaan, berpikir induktif menggunakan bahasa. WA juga mengukur
                                    common sense (logika berpikir), cara berpikir kongkrit praktis, sense of reality,
                                    judgement,mandiri dalam berfikir, pembentukan keputusan. Yang dimaksud dengan “judgement,”
                                    adalah artinya apakah testee mampu menilai arti apakah ia mandiri, atau apakah ia salah kaprah
                                </td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Analogien (AN) → Persamaan Kata</th>
                                <td>Kemampuan fleksibilitas dalam berpikir, kemampuan mengkombinasikan atau menghubungkan,
                                    kelincahan dalam berubah dan berganti dalam berpikir, resistensi atau kemampuan untuk melawan
                                    solusi masalah yang tidak pasti sehingga meliputi kejelasan dan kekonsenkuenan dalam berpikir
                                </td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Gemeinsamkeiten (GE) → Sifat yang Dimiliki Bersama</th>
                                <td>Kemampuan abstraksi verbal, menemukan ciri yang sama atau khas dari dua objek dan menyusun suatu
                                    pengertian tentangnya. Kemampuan untuk menyatakan pengertian akan sesuatu dalam bentuk Bahasa,
                                    membentuk suatu pengertian atau mencari inti persoalan, serta memahami esensi pengertian suatu
                                    kata untuk dapat menemukan kesamaan esensial dari beberapa kata</td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Rechhenaufgaben (RA) → Kemampuan Berhitung</th>
                                <td>Kemampuan berpikir atau memecahkan masalah praktis dalam berhitung, matematis, berpikir logis,
                                    dan lugas penalaran, dan kemampuan berpikir runtut mengambil kesimpulan</td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Zahlenreihen (ZR) → Deret Angka</th>
                                <td>Cara berpikir teoritis dengan hitungan. Maksudnya mengukur kemampuan berhitung testee yang
                                    didasarkan pada pendekatan analisis atas informasi factual berbentuk angka sehingga didapatkan
                                    suatu kesimpulan (berpikir induktif dengan angkaangka), serta kelincahan dan irama dalam
                                    berpikir</td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Figurenauswahl (FA) → Memilih Bentuk</th>
                                <td>Kemampuan membayangkan, kemampuan mengkonstruksi (sintesa dan Analisa) sehingga dapat
                                    menggabungkan potongan suatu objek visual dan menghasilkan suatu bentuk tertentu, serta
                                    memasukkan bagian pada suatu keseluruhan (membayangkan menyeluruh)</td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Wurfelaufgaben (WU) → Latihan Balok</th>
                                <td>Kemampuan analisis yakni daya bayang ruang, didalamnya terkandung kreativitas, kemampuan tiga
                                    dimensi, imajinasi dan fleksibilitas berpikir, serta kemampuan konstruktif teknis dalam menyusun
                                </td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Merkaufgaben (ME) → Latihan Simbol</th>
                                <td>Kemampuan daya ingat seseorang, fokus, perhatian, konsentrasi yang menetap, dan daya tahan</td>
                                <td>{{ $penilaianBeo->cognitive_video_score }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="header-box">
                    <img src="{{ asset('img/interest and talent.png') }}" alt="" class="img-fluid">
                    <h2>Hasil Validasi Kepribadian, Bakat, Minat</h2>
                </div>
                <div class="test-box">
                    <table id="tabelKepribadianValidasi" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th colspan="1" class="vertical-header">Kepribadian</th>
                                <th colspan="1" class="vertical-header"></th>
                                <th colspan="1" class="vertical-header">Raw Score</th>
                                <th colspan="1" class="vertical-header">Sangat Rendah</th>
                                <th colspan="1" class="vertical-header">Rendah</th>
                                <th colspan="1" class="vertical-header">Rata-Rata</th>
                                <th colspan="1" class="vertical-header">Tinggi</th>
                                <th colspan="1" class="vertical-header">Sangat Tinggi</th>
                            </tr>
                        </thead>
                        <?php
                        // Assuming $penilaianBeo->scoreString contains the comma-separated string
                        $scoreArray = explode(',', $penilaianBeo->skor_validasi_kepribadianbakatminat);
                        $scoreArray = array_map('intval', $scoreArray);
                        ?>
                        <tbody>
                            <!-- Row 1 Kepribadian -->
                            <tr>
                                <th>Extraversion</th>
                                <td>Mudah bergaul, aktif, talk-active, personoriented, optimis, menyenangkan, kasih sayang,
                                    bersahabat</td>
                                <td><?php echo $scoreArray[0]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Conscientiousness</th>
                                <td>Teratur, dapat dipercaya, pekerja keras, displin, tepat waktu, teliti, rapi, ambisius, tekun
                                </td>
                                <td><?php echo $scoreArray[1]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Agreeableness</th>
                                <td>Berhati lembut, baik, suka menolong, dapat dipercaya, mudah memaafkan, mudah untuk dimaafkan,
                                    terus terang</td>
                                <td><?php echo $scoreArray[2]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Openness</th>
                                <td>Rasa ingin tahu tinggi, ketertarikan luas, kreatif, original, imajinatif, tidak ketinggalan
                                    zaman</td>
                                <td><?php echo $scoreArray[3]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Neuroticism</th>
                                <td>Kuatir, cemas, emosional, tidak merasa nyaman, kurang penyesuaian, kesedihan yang tidak
                                    beralasan</td>
                                <td><?php echo $scoreArray[4]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <!-- Row 6 Minat -->
                            <tr>
                                <th colspan="10">Minat</th>
                            </tr>
                            <tr>
                                <th>Realistic</th>
                                <td>Terampil secara mekanik dan/atau pekerjaan yang mengutamakan keterampilan fisik, dan kekuatan
                                    otot</td>
                                <td><?php echo $scoreArray[5]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Investigative</th>
                                <td>Cenderung memiliki ketertarikan/minat untuk mengobservasi, belajar, menganalisis dan memecahkan
                                    masalah</td>
                                <td><?php echo $scoreArray[6]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Artistic</th>
                                <td>Berhati lembut, baik, suka menolong, dapat dipercaya, mudah memaafkan, mudah untuk dimaafkan,
                                    terus terang</td>
                                <td><?php echo $scoreArray[7]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Social</th>
                                <td>Memiliki minat bekerja dengan individu lain dibandingkan dengan peralatan</td>
                                <td><?php echo $scoreArray[8]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Enterprising</th>
                                <td>Memiliki minat bekerja dengan individu lain, serta mempersuasi orang lain dan tampil di muka
                                    umum</td>
                                <td><?php echo $scoreArray[9]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Conventional</th>
                                <td>Memiliki minat terhadap hal-hal yang mendetail, terorganisir, dan berkaitan dengan data</td>
                                <td><?php echo $scoreArray[10]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <!-- Row 13 Bakat -->
                            <tr>
                                <th colspan="10">Bakat</th>
                            </tr>
                            <tr>
                                <th>Dimensi perseptual</th>
                                <td>Potensi kemampuan yang berhubungan pada bentuk persepsi, dimana terdapat faktor yang meliputi
                                    seperti kepekaan indera, perhatian, orientasi ruang, waktu, luas daerah persepsi, kecepatan
                                    persepsi</td>
                                <td><?php echo $scoreArray[11]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Dimensi psikomotor</th>
                                <td>Terdiri dari (ketepatan statis yang menitik beratkan pada posisi, dan ketepatan dinamis yang
                                    menitikberatkan pada gerakan), koordinasi, dan keluwesan</td>
                                <td><?php echo $scoreArray[12]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Dimensi intelektual</th>
                                <td>Terdiri dari ingatan, pengenalan, evaluatif, konvergen, dan berfikir divergen</td>
                                <td><?php echo $scoreArray[13]; ?></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="header-box">
                    <img src="{{ asset('img/validation test.png') }}" alt="" class="img-fluid">
                    <h2>Hasil Validasi Cognitive</h2>
                </div>
                <div class="test-box">
                    <table id="scoreTableValidasi" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th colspan="1" class="vertical-header">Intelegensi</th>
                                <th colspan="1" class="vertical-header">Dimensi</th>
                                <th colspan="1" class="vertical-header">Raw Score</th>
                                <th colspan="1" class="vertical-header">Rendah</th>
                                <th colspan="1" class="vertical-header">Rata-Rata</th>
                                <th colspan="1" class="vertical-header">Tinggi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Satzerganzung (SE) → Melengkapi Kalimat</th>
                                <td>Kemampuan pengambilan keputusan, keinginan berprestasi, penilaian atau pembentukan opini, common
                                    sense, penekanan pada berpikir praktis dan konkrit pemaknaan realitas, dan berpikir secara
                                    mandiri</td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Wortauswahl (WA) → Melengkapi Kata-kata</th>
                                <td>Kemampuan menangkap inti atau makna dari sesuatu yang disampaikan melalui bahasa, perasaan
                                    empati atau kemampuan menyelami perasaan, berpikir induktif menggunakan bahasa. WA juga mengukur
                                    common sense (logika berpikir), cara berpikir kongkrit praktis, sense of reality,
                                    judgement,mandiri dalam berfikir, pembentukan keputusan. Yang dimaksud dengan “judgement,”
                                    adalah artinya apakah testee mampu menilai arti apakah ia mandiri, atau apakah ia salah kaprah
                                </td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Analogien (AN) → Persamaan Kata</th>
                                <td>Kemampuan fleksibilitas dalam berpikir, kemampuan mengkombinasikan atau menghubungkan,
                                    kelincahan dalam berubah dan berganti dalam berpikir, resistensi atau kemampuan untuk melawan
                                    solusi masalah yang tidak pasti sehingga meliputi kejelasan dan kekonsenkuenan dalam berpikir
                                </td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Gemeinsamkeiten (GE) → Sifat yang Dimiliki Bersama</th>
                                <td>Kemampuan abstraksi verbal, menemukan ciri yang sama atau khas dari dua objek dan menyusun suatu
                                    pengertian tentangnya. Kemampuan untuk menyatakan pengertian akan sesuatu dalam bentuk Bahasa,
                                    membentuk suatu pengertian atau mencari inti persoalan, serta memahami esensi pengertian suatu
                                    kata untuk dapat menemukan kesamaan esensial dari beberapa kata</td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Rechhenaufgaben (RA) → Kemampuan Berhitung</th>
                                <td>Kemampuan berpikir atau memecahkan masalah praktis dalam berhitung, matematis, berpikir logis,
                                    dan lugas penalaran, dan kemampuan berpikir runtut mengambil kesimpulan</td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Zahlenreihen (ZR) → Deret Angka</th>
                                <td>Cara berpikir teoritis dengan hitungan. Maksudnya mengukur kemampuan berhitung testee yang
                                    didasarkan pada pendekatan analisis atas informasi factual berbentuk angka sehingga didapatkan
                                    suatu kesimpulan (berpikir induktif dengan angkaangka), serta kelincahan dan irama dalam
                                    berpikir</td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Figurenauswahl (FA) → Memilih Bentuk</th>
                                <td>Kemampuan membayangkan, kemampuan mengkonstruksi (sintesa dan Analisa) sehingga dapat
                                    menggabungkan potongan suatu objek visual dan menghasilkan suatu bentuk tertentu, serta
                                    memasukkan bagian pada suatu keseluruhan (membayangkan menyeluruh)</td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Wurfelaufgaben (WU) → Latihan Balok</th>
                                <td>Kemampuan analisis yakni daya bayang ruang, didalamnya terkandung kreativitas, kemampuan tiga
                                    dimensi, imajinasi dan fleksibilitas berpikir, serta kemampuan konstruktif teknis dalam menyusun
                                </td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                            <tr>
                                <th>Merkaufgaben (ME) → Latihan Simbol</th>
                                <td>Kemampuan daya ingat seseorang, fokus, perhatian, konsentrasi yang menetap, dan daya tahan</td>
                                <td>{{ $penilaianBeo->skor_validasi_cognitif }}</td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                                <td class="center-align"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>

    function randomSentiment() {
        var sentiments = ["Negatif", "Netral", "Positif"];
        var randomIndex = Math.floor(Math.random() * sentiments.length);
        return randomIndex;
    }

    function getRandomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function getRandomPercentage(min, max) {
        return (Math.random() * (max - min) + min).toFixed(2) + '%';
    }

    window.onload = function() {
        var table = document.getElementById("tabelKepribadian");
        var rows = table.getElementsByTagName("tr");
        var scoreArrayfpos = <?php echo json_encode($scoreArrayfpos); ?>;
        var scoreArrayfneu = <?php echo json_encode($scoreArrayfneu); ?>;
        var scoreArrayfneg = <?php echo json_encode($scoreArrayfneg); ?>;
        var scoreArrayv = <?php echo json_encode($scoreArrayv); ?>;
        var scoreArrayvalidasi = <?php echo json_encode($scoreArrayvalidasi); ?>;
        var scoreArraykepercayaan = <?php echo json_encode($scoreArraykepercayaan); ?>;
        console.log(rows.length)
        console.log(scoreArraykepercayaan)
        var indexData = 0
        for (var i = 2; i < rows.length; i++) {

            if (i == 7 || i == 14) {
                continue;
            } else {
                // Extract the values from the respective arrays


                // Convert PHP variables to JavaScript variables
                var fpos = parseFloat(scoreArrayfpos[indexData]);
                var fneg = parseFloat(scoreArrayfneg[indexData]);
                var fneu = parseFloat(scoreArrayfneu[indexData]);
                var voice = parseFloat(scoreArrayv[indexData]);

                // Find the maximum value and its corresponding index
                var maxF = Math.max(fpos, fneg, fneu);
                // var maxV = Math.max(vpos, vneg, vneu);

                if (fpos === fneg) {
                    rows[i].cells[3].innerHTML = '<i class="lni lni-checkmark-circle"></i>'; // "Fpos" column
                } else if (fneg > fpos) {
                    rows[i].cells[2].innerHTML = '<i class="lni lni-checkmark-circle"></i>'; // "Fneg" column
                } else if (fpos > fenu) {
                    rows[i].cells[4].innerHTML = '<i class="lni lni-checkmark-circle"></i>'; // "Fneu" column
                }

                if (voice == 3) {
                    rows[i].cells[6].innerHTML = '<i class="lni lni-checkmark-circle"></i>'; // "Vpos" column
                } else if (voice < 3) {
                    rows[i].cells[5].innerHTML = '<i class="lni lni-checkmark-circle"></i>'; // "Vneg" column
                } else if (voice > 3) {
                    rows[i].cells[7].innerHTML = '<i class="lni lni-checkmark-circle"></i>'; // "Vneu" column
                }

                indexData++
            }
        }
    };
</script>

    <script>
        // Function to generate a random score between 1 and 100
function generateRandomScore() {
    return Math.floor(Math.random() * 10) + 1;
}

// Function to determine the values for "Rendah," "Tinggi," and "Rata-Rata" based on the raw score
function determineValues(rawScore) {
    if (rawScore <= 14) {
        return ['<i class="lni lni-checkmark-circle"></i>', "", ""];
    } else if (rawScore <= 24) {
        return ["", '<i class="lni lni-checkmark-circle"></i>', ""];
    } else {
        return ["", "", '<i class="lni lni-checkmark-circle"></i>'];
    }
}

function determineValuesValidasi(rawScore) {
    if (rawScore <= 14) {
        return ['<i class="lni lni-checkmark-circle"></i>', "", ""];
    } else if (rawScore <= 24) {
        return ["", '<i class="lni lni-checkmark-circle"></i>', ""];
    } else {
        return ["", "", '<i class="lni lni-checkmark-circle"></i>'];
    }
}

// Get the table element by its ID
var table = document.getElementById("scoreTable");

// Iterate through the rows and populate the "Raw Score" column
for (var i = 1; i < table.rows.length; i++) { // Start from 1 to skip the header row
    var row = table.rows[i];
    var rawScoreCell = row.cells[2]; // Index 2 is the "Raw Score" column

    // Generate a random score and set it in the cell
    var values = determineValuesValidasi(rawScoreCell.textContent);

    // Fill in the corresponding cells
    var rendahCell = row.cells[3]; // Index 3 is the "Rendah" column
    rendahCell.innerHTML = values[0];

    var tinggiCell = row.cells[4]; // Index 4 is the "Tinggi" column
    tinggiCell.innerHTML = values[1];

    var rataRataCell = row.cells[5]; // Index 5 is the "Rata-Rata" column
    rataRataCell.innerHTML = values[2];
}

var tableValidasi = document.getElementById("scoreTableValidasi");

// Iterate through the rows and populate the "Raw Score" column
for (var i = 1; i < tableValidasi.rows.length; i++) { // Start from 1 to skip the header row
    var row = tableValidasi.rows[i];
    var rawScoreCell = row.cells[2]; // Index 2 is the "Raw Score" column

    var values = determineValuesValidasi(rawScoreCell.textContent);

    // Fill in the corresponding cells
    var rendahCell = row.cells[3]; // Index 3 is the "Rendah" column
    rendahCell.innerHTML = values[0];

    var tinggiCell = row.cells[4]; // Index 4 is the "Tinggi" column
    tinggiCell.innerHTML = values[1];

    var rataRataCell = row.cells[5]; // Index 5 is the "Rata-Rata" column
    rataRataCell.innerHTML = values[2];
}

    </script>

    <script>
        // Function to generate a random score between 1 and 100
function generateRandomScore() {
    return Math.floor(Math.random() * 10) + 1;
}

// Function to determine the values for "Rendah," "Tinggi," and "Rata-Rata" based on the raw score
//  REMINDER: buat Determinevalues buat semua isi biar soale peniliaiane unik
function determineValues(rawScore) {
    if (rawScore <= 20) {
        return ["<i class='lni lni-checkmark-circle'></i>", "", "", "", ""];
    } else if (rawScore <= 40) {
        return ["", "<i class='lni lni-checkmark-circle'></i>", "", "", ""];
    } else if (rawScore <= 60) {
        return ["", "", "<i class='lni lni-checkmark-circle'></i>", "", ""];
    } else if (rawScore <= 80) {
        return ["", "", "", "<i class='lni lni-checkmark-circle'></i>", ""];
    } else {
        return ["", "", "", "", "<i class='lni lni-checkmark-circle'></i>"];
    }
}

// Get the table element by its ID
var table = document.getElementById("tabelKepribadianValidasi");

// Iterate through the rows and populate the "Raw Score" column
for (var i = 1; i < table.rows.length; i++) { // Start from 1 to skip the header row
    if (i == 6 || i == 13) {
        continue;

    } else if (i < 6) {
        var row = table.rows[i];
        var rawScoreCell = row.cells[2]; // Index 2 is the "Raw Score" column
        console.log(rawScoreCell);
        // Determine the values for "Sangat Rendah" to "Sangat Tinggi" based on the raw score
        var rawScoreCellValue = parseInt(rawScoreCell.textContent, 10); // Parse as an integer
        var values = determineValues((rawScoreCellValue / 50) * 100);


        // Fill in the corresponding cells
        var sangatRendahCell = row.cells[3]; // Index 3 is the "Sangat Rendah" column
        sangatRendahCell.innerHTML = values[0];

        var rendahCell = row.cells[4]; // Index 4 is the "Rendah" column
        rendahCell.innerHTML = values[1];

        var rataRataCell = row.cells[5]; // Index 5 is the "Rata-Rata" column
        rataRataCell.innerHTML = values[2];

        var tinggiCell = row.cells[6]; // Index 6 is the "Tinggi" column
        tinggiCell.innerHTML = values[3];

        var sangatTinggiCell = row.cells[7]; // Index 7 is the "Sangat Tinggi" column
        sangatTinggiCell.innerHTML = values[4];
    } else if (i > 6 && i < 13) {
        var row = table.rows[i];
        var rawScoreCell = row.cells[2]; // Index 2 is the "Raw Score" column
        console.log(rawScoreCell);
        // Determine the values for "Sangat Rendah" to "Sangat Tinggi" based on the raw score
        var rawScoreCellValue = parseInt(rawScoreCell.textContent, 10); // Parse as an integer
        var values = determineValues((rawScoreCellValue / 10) * 100);



        // Fill in the corresponding cells
        var sangatRendahCell = row.cells[3]; // Index 3 is the "Sangat Rendah" column
        sangatRendahCell.innerHTML = values[0];

        var rendahCell = row.cells[4]; // Index 4 is the "Rendah" column
        rendahCell.innerHTML = values[1];

        var rataRataCell = row.cells[5]; // Index 5 is the "Rata-Rata" column
        rataRataCell.innerHTML = values[2];

        var tinggiCell = row.cells[6]; // Index 6 is the "Tinggi" column
        tinggiCell.innerHTML = values[3];

        var sangatTinggiCell = row.cells[7]; // Index 7 is the "Sangat Tinggi" column
        sangatTinggiCell.innerHTML = values[4];
    } else {
        var row = table.rows[i];
        var rawScoreCell = row.cells[2]; // Index 2 is the "Raw Score" column

        // Determine the values for "Sangat Rendah" to "Sangat Tinggi" based on the raw score
        var rawScoreCellValue = parseInt(rawScoreCell.textContent, 10); // Parse as an integer
        var values = determineValues((rawScoreCellValue / 5) * 100);

        // Fill in the corresponding cells
        var sangatRendahCell = row.cells[3];
        sangatRendahCell.innerHTML = values[0];

        var rendahCell = row.cells[4]; // Index 4 is the "Rendah" column
        rendahCell.innerHTML = values[1];

        var rataRataCell = row.cells[5]; // Index 5 is the "Rata-Rata" column
        rataRataCell.innerHTML = values[2];

        var tinggiCell = row.cells[6]; // Index 6 is the "Tinggi" column
        tinggiCell.innerHTML = values[3];

        var sangatTinggiCell = row.cells[7]; // Index 7 is the "Sangat Tinggi" column
        sangatTinggiCell.innerHTML = values[4];
    }
}

    </script>


@endsection
