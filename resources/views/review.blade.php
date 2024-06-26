@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/assessment.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3">
                <h3 class="fw-bold">Review</h3>
                <div class="rev mt-4">
                    <div class="revbox d-flex">
                        <img src="{{ asset('img/avatar.png') }}" class="avatar img-fluid" alt="avatar">
                        <div class="d-flex flex-column">
                            <h5 class="fw-bold">Afrialdy</h5>
                            <div class="d-flex star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <p>Situs ini menyediakan platform yang luar biasa untuk merekrut talenta AI. Antarmuka yang sederhana dan efisien membuat pencarian menjadi mudah. Saya berhasil merekrut seorang ahli AI yang sangat berkualitas dalam waktu singkat. Pengalaman saya menggunakan situs ini sangat memuaskan, dan saya akan merekomendasikannya kepada rekan-rekan yang mencari kandidat AI yang kompeten</p>
                        </div>
                    </div>
                </div>

                <div class="reply-box mt-3 d-flex">
                    <textarea class="reply-input" oninput="adjustTextareaHeight(this)" rows="1"></textarea>
                    <button type="submit" class="reply-button">
                        <i class="lni lni-arrow-right"></i>
                    </button>
                </div>

                <div class="rev mt-4">
                    <div class="revbox d-flex">
                        <img src="{{ asset('img/avatar.png') }}" class="avatar img-fluid" alt="avatar">
                        <div class="d-flex flex-column">
                            <h5 class="fw-bold">Adu du</h5>
                            <div class="d-flex star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p>Situs ini menyediakan beragam pilihan bagi rekrutmen AI. Antarmuka yang intuitif dan fitur pencarian yang canggih membuatnya sangat efisien. Saya menemukan kandidat AI yang sesuai dengan kebutuhan perusahaan saya dalam waktu singkat. Saya sangat puas dengan hasilnya dan akan menggunakan situs ini lagi di masa depan</p>
                        </div>
                    </div>
                </div>

                <div class="reply-box mt-3 d-flex">
                    <textarea class="reply-input" oninput="adjustTextareaHeight(this)" rows="1"></textarea>
                    <button class="reply-button">
                        <i class="lni lni-arrow-right"></i>
                    </button>
                </div>

                <div class="rev mt-4">
                    <div class="revbox d-flex">
                        <img src="{{ asset('img/avatar.png') }}" class="avatar img-fluid" alt="avatar">
                        <div class="d-flex flex-column">
                            <h5 class="fw-bold">Probe</h5>
                            <div class="d-flex star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p>Pengalaman saya menggunakan situs ini sangat memuaskan. Proses pendaftaran yang cepat dan sistem pencocokan yang akurat membantu saya menemukan kandidat AI yang berkualitas. Saya merekomendasikan situs ini kepada semua perusahaan yang mencari talenta AI. Saya berhasil merekrut ahli AI yang sangat berkualitas untuk tim kami. Terima kasih!</p>
                        </div>
                    </div>
                </div>

                <div class="reply-box mt-3 d-flex">
                    <textarea class="reply-input" oninput="adjustTextareaHeight(this)" rows="1"></textarea>
                    <button class="reply-button">
                        <i class="lni lni-arrow-right"></i>
                    </button>
                </div>

                <div class="rev mt-4">
                    <div class="revbox d-flex">
                        <img src="{{ asset('img/avatar.png') }}" class="avatar img-fluid" alt="avatar">
                        <div class="d-flex flex-column">
                            <h5 class="fw-bold">Tok Abah</h5>
                            <div class="d-flex star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p>Situs web rekrutmen AI ini luar biasa. Fitur pencarian yang canggih dan database yang kaya membuatnya menjadi sumber daya yang berharga. Saya berhasil merekrut ahli AI yang sangat berkualitas untuk tim kami. Terima kasih atas layanan yang luar biasa!</p>
                        </div>
                    </div>
                </div>

                <div class="reply-box mt-3 d-flex">
                    <textarea class="reply-input" oninput="adjustTextareaHeight(this)" rows="1"></textarea>
                    <button class="reply-button">
                        <i class="lni lni-arrow-right"></i>
                    </button>
                </div>

                <div class="rev mt-4">
                    <div class="revbox d-flex">
                        <img src="{{ asset('img/avatar.png') }}" class="avatar img-fluid" alt="avatar">
                        <div class="d-flex flex-column">
                            <h5 class="fw-bold">Upin</h5>
                            <div class="d-flex star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p>Situs web ini benar-benar membantu dalam mencari talenta AI yang tepat. Proses pendaftaran yang mudah dan informasi yang komprehensif tentang setiap kandidat membuatnya menjadi pilihan utama saya dalam rekrutmen AI. Saya sangat puas dengan hasilnya dan akan merekomendasikannya kepada rekan-rekan saya.</p>
                        </div>
                    </div>
                </div>

                <div class="reply-box mt-3 d-flex">
                    <textarea class="reply-input" oninput="adjustTextareaHeight(this)" rows="1"></textarea>
                    <button class="reply-button">
                        <i class="lni lni-arrow-right"></i>
                    </button>
                </div>

                <div class="rev mt-4">
                    <div class="revbox d-flex">
                        <img src="{{ asset('img/avatar.png') }}" class="avatar img-fluid" alt="avatar">
                        <div class="d-flex flex-column">
                            <h5 class="fw-bold">Cikgu Besar</h5>
                            <div class="d-flex star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <p>Saya sangat terkesan dengan situs rekrutmen AI ini. Antarmuka yang ramah pengguna dan fitur pencarian yang canggih membuatnya sangat mudah digunakan. Saya berhasil merekrut ahli AI yang berkualitas untuk tim kami. Sangat merekomendasikan! Terima kasih atas pengalaman yang luar biasa!</p>
                        </div>
                    </div>
                </div>

                <div class="reply-box mt-3 d-flex">
                    <textarea class="reply-input" oninput="adjustTextareaHeight(this)" rows="1"></textarea>
                    <button class="reply-button">
                        <i class="lni lni-arrow-right"></i>
                    </button>
                </div>

            </div>
        </div>
    </main>

    <script>
        function adjustTextareaHeight(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight) + 'px';
        }
    </script>

@endsection
