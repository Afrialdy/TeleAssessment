@extends('layout.master')

@section('style')
    <style>
        /* Style the list */
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
        }

        /* Display list items side by side */
        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }

        /* Add a slash symbol (/) before/behind each list item */
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }

        /* Add a color to all links inside the list */
        ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
        }

        /* Add a color on mouse-over */
        ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pertanyaan-test.css') }}">
    <!-- Main Content -->

    <ul class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('pertanyaan_test') }}">Pertanyaan Test</a></li>
        <li>Interview Test List</li>
    </ul>
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="dropdown mb-4">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    INTERVIEW TEST
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('cognitive-test') }}">COGNITIVE STYLE TEST</a></li>
                    <li><a class="dropdown-item" href="{{ route('validation-test') }}">VALIDATION TEST</a></li>
                </ul>
            </div>

            <div class="title d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="img/interview test.png" alt="">
                    <div class="d-flex flex-column">
                        <h2 class="fw-bold">INTERVIEW TEST LIST</h2>
                        <p>Face Sentiment Analysis & Voice Sentiment Analysis.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Agreeableness</h1>
                            <p>Agreeableness adalah ciri kepribadian yang ditandai dengan kerja sama, kebaikan hati, dan keramahan. Individu dengan skor tinggi dalam agreeableness cenderung empatik dan senang membantu orang lain.</p>
                            <a href="{{ route('agreeableness') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Artistic</h1>
                            <p>Individu artistik adalah kreatif dan senang mengekspresikan diri melalui berbagai bentuk seni, seperti melukis, musik, dan menulis. Mereka menghargai keindahan dan orisinalitas.</p>
                            <a href="{{ route('artistic') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Conscientiousness</h1>
                            <p>Conscientiousness adalah ciri yang ditandai dengan keteraturan, keandalan, dan rasa tanggung jawab yang kuat. Orang yang conscientious bersifat teliti, hati-hati, dan dapat diandalkan.</p>
                            <a href="{{ route('conscientiousness') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Conventional</h1>
                            <p>Individu konvensional lebih suka aktivitas yang terstruktur dan diatur oleh aturan, dan sering unggul dalam pekerjaan administratif atau clerical. Mereka menghargai ketertiban dan ketepatan.</p>
                            <a href="{{ route('conventional') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Enterprising</h1>
                            <p>Individu enterprising adalah energik, ambisius, dan suka bergaul. Mereka sering tertarik pada peran kepemimpinan dan berkembang dalam lingkungan yang kompetitif.</p>
                            <a href="{{ route('enterprising') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Extraversion</h1>
                            <p>Extraversion ditandai dengan keramahan, kepandaian berbicara, dan sikap tegas. Extravert senang berinteraksi sosial dan sering dianggap antusias dan berorientasi pada tindakan.</p>
                            <a href="{{ route('extraversion') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Intellectual</h1>
                            <p>Individu intelektual adalah penasaran dan senang terlibat dalam aktivitas yang merangsang pemikiran. Mereka sering tertarik pada ide-ide abstrak dan konsep-konsep teoretis.</p>
                            <a href="{{ route('intelektual') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Investigative</h1>
                            <p>Individu investigatif adalah analitis, logis, dan senang memecahkan masalah yang kompleks. Mereka sering tertarik pada karir ilmiah dan berbasis penelitian.</p>
                            <a href="{{ route('investigative') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Live Cognition</h1>
                            <p>Live Cognition merujuk pada kemampuan untuk memproses informasi secara real-time, membuat keputusan yang cepat dan akurat. Individu dengan keterampilan live cognition yang kuat unggul dalam lingkungan yang dinamis.</p>
                            <a href="{{ route('livecognition') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Neuroticism</h1>
                            <p>Neuroticism adalah ciri yang ditandai dengan ketidakstabilan emosi, kecemasan, dan perubahan suasana hati. Individu dengan skor tinggi dalam neuroticism mungkin lebih sering mengalami stres dan emosi negatif.</p>
                            <a href="{{ route('neuroticism') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Openness</h1>
                            <p>Openness ditandai dengan kesediaan untuk mengalami hal-hal baru, kreativitas, dan rasa ingin tahu. Individu yang open seringkali imajinatif dan terbuka terhadap ide dan pengalaman baru.</p>
                            <a href="{{ route('openness') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Perceptual</h1>
                            <p>Individu perceptual sangat menyadari lingkungan mereka dan memiliki keterampilan observasi yang kuat. Mereka unggul dalam tugas-tugas yang membutuhkan perhatian terhadap detail dan kesadaran situasional.</p>
                            <a href="{{ route('perseptual') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Psychomotor</h1>
                            <p>Keterampilan psikomotor melibatkan koordinasi antara fungsi kognitif dan gerakan fisik. Individu dengan keterampilan psikomotor yang kuat unggul dalam aktivitas yang memerlukan ketelitian dan ketangkasan manual.</p>
                            <a href="{{ route('psikomotor') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Realistic</h1>
                            <p>Individu realistis lebih suka aktivitas praktis dan hands-on dan sering unggul dalam bidang teknis atau mekanik. Mereka menghargai kepraktisan dan menikmati bekerja dengan hasil yang nyata.</p>
                            <a href="{{ route('realistic') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Social</h1>
                            <p>Individu sosial adalah penyayang dan senang membantu orang lain. Mereka unggul dalam peran yang memerlukan keterampilan interpersonal, seperti mengajar, konseling, dan merawat.</p>
                            <a href="{{ route('social') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
