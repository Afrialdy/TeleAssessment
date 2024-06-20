@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/hasil-test.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="hasil-test">
                <div class="hasil-box d-flex mt-3">
                    <img src="{{ asset('img/profil-review/adudu.jpeg') }}" alt="" class="img-fluid">
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

                <div class="header-box">
                    <img src="{{ asset('img/interview test.png') }}" alt="" class="img-fluid">
                    <h2>INTERVIEW TEST</h2>
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
                </div>

                <div class="header-box">
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
                </div>

                <div class="header-box">
                    <img src="{{ asset('img/cognitive style.png') }}" alt="" class="img-fluid">
                    <h2>COGNITIVE STYLE TEST</h2>
                </div>
                <div class="test-box">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="head">Intelegensi</th>
                                <th>Dimensi</th>
                                <th>Raw Score</th>
                                <th>Rendah</th>
                                <th>Rata-Rata</th>
                                <th>Tinggi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="header-1">Satzerganzung(SE) Melengkapi Kalimat</td>
                                <td class="header">Kemampuan Pengambilan keputusan, keinginan berprestasi, penilaian atau pembentukkan opini, common sense, penekanan pada berpikir praktis dan konkrit pemaknaan reslistas, dan berpikir secara mandiri.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Extraversion</td>
                                <td class="header">Mudah Bergaul, Aktif, Talk-active, personariented, optomis, menyenangkan, kasih sayang, bersahabat.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Extraversion</td>
                                <td class="header">Mudah Bergaul, Aktif, Talk-active, personariented, optomis, menyenangkan, kasih sayang, bersahabat.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Openness</td>
                                <td class="header">Rasa ingin tahu tinggi, ketertarikan luas, kreatif, original, imajinatif, tidak ketinggalan zaman.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="header-box">
                    <img src="{{ asset('img/validation test.png') }}" alt="" class="img-fluid">
                    <h2>VALIDATION TEST</h2>
                </div>
                <div class="test-box">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="head">Intelegensi</th>
                                <th>Dimensi</th>
                                <th>Raw Score</th>
                                <th>Rendah</th>
                                <th>Rata-Rata</th>
                                <th>Tinggi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="header-1">Satzerganzung(SE) Melengkapi Kalimat</td>
                                <td class="header">Kemampuan Pengambilan keputusan, keinginan berprestasi, penilaian atau pembentukkan opini, common sense, penekanan pada berpikir praktis dan konkrit pemaknaan reslistas, dan berpikir secara mandiri.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Extraversion</td>
                                <td class="header">Mudah Bergaul, Aktif, Talk-active, personariented, optomis, menyenangkan, kasih sayang, bersahabat.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Extraversion</td>
                                <td class="header">Mudah Bergaul, Aktif, Talk-active, personariented, optomis, menyenangkan, kasih sayang, bersahabat.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Openness</td>
                                <td class="header">Rasa ingin tahu tinggi, ketertarikan luas, kreatif, original, imajinatif, tidak ketinggalan zaman.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="header-1">Neuroticism</td>
                                <td class="header">Kuatir, cemas, emosial, tidak merasa nyaman, kurang penyesuaian, kesedihan tidak beralasan.</td>
                                <td><i class="lni lni-checkmark-circle"></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>


@endsection
