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
                                        <i class="lni lni-phone"></i>
                                        <h3>081296154504</h3>
                                    </div>
                                    <div class="icon-item">
                                        <i class="lni lni-envelope"></i>
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
                            <li>Karakteristik Kunci:</li>
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

    <!-- jsPDF dan jsPDF-AutoTable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.17/jspdf.plugin.autotable.min.js"></script>
    <script>
        document.getElementById('exportPDF').addEventListener('click', () => {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Header
            doc.setFontSize(18);
            doc.text('Detail Laporan', 14, 22);
            doc.setLineWidth(0.5);
            doc.line(14, 24, 196, 24);

            // User Profile
            doc.setFontSize(12);
            doc.text('Profil Pengguna', 14, 32);
            doc.setFontSize(10);
            doc.text('Nama:', 14, 42);
            doc.text('Rafli Diptana', 40, 42);
            doc.text('Telepon:', 14, 52);
            doc.text('081296154504', 40, 52);
            doc.text('Email:', 14, 62);
            doc.text('farlidiptana@gmail.com', 40, 62);
            doc.text('Umur:', 14, 72);
            doc.text('21', 40, 72);
            doc.text('Jenis Kelamin:', 14, 82);
            doc.text('Male', 40, 82);
            doc.text('No ID:', 14, 92);
            doc.text('175', 40, 92);

            // Section Headers
            doc.setFontSize(12);
            doc.text('Kepribadian INTJ', 14, 112);
            doc.setFontSize(10);
            doc.text('Karakteristik Kunci:', 14, 122);
            const characteristics = [
                'Pemikir Strategis',
                'Logis dan analitis',
                'Kreatif',
                'Mandiri',
                'Detail-oriented'
            ];
            let yOffset = 132;
            characteristics.forEach(item => {
                doc.text(`- ${item}`, 14, yOffset);
                yOffset += 10;
            });

            doc.setFontSize(12);
            doc.text('Bakat dan Minat', 14, 172);
            doc.setFontSize(10);
            doc.text('Bakat: Pengembangan Software', 14, 182);
            doc.text('Minat:', 14, 192);
            const interests = [
                'Memecahkan masalah',
                'Belajar hal-hal baru',
                'Bekerja secara mandiri'
            ];
            yOffset = 202;
            interests.forEach(item => {
                doc.text(`- ${item}`, 14, yOffset);
                yOffset += 10;
            });

            doc.setFontSize(12);
            doc.text('Intelegensi', 14, 232);
            doc.setFontSize(10);
            doc.text('Tingkat Kecerdasan: Tinggi', 14, 242);
            doc.text('Keterampilan Kognitif:', 14, 252);
            const skills = [
                'Pemecahan masalah',
                'Berpikir kritis',
                'Belajar',
                'Memori'
            ];
            yOffset = 262;
            skills.forEach(item => {
                doc.text(`- ${item}`, 14, yOffset);
                yOffset += 10;
            });

            doc.setFontSize(12);
            doc.text('Kesimpulan', 14, 292);
            doc.setFontSize(10);
            const conclusion = 'Rafli Diptana adalah individu yang cerdas dan berbakat dengan potensi besar untuk sukses dalam pengembangan perangkat lunak. Dia memiliki semua keterampilan dan kemampuan yang diperlukan untuk menjadi pengembang perangkat lunak yang sukses. Namun, dia perlu mengembangkan beberapa kemampuannya, seperti kemampuannya untuk beradaptasi dan bekerja sama dengan orang lain. Dengan mengembangkan kemampuannya, Rafli Diptana dapat mencapai potensi penuhnya dan menjadi pengembang perangkat lunak yang sukses.';
            doc.text(conclusion, 14, 302, { maxWidth: 180 });

            // Footer
            doc.setLineWidth(0.5);
            doc.line(14, 290, 196, 290);
            doc.setFontSize(10);
            doc.text('Generated on: ' + new Date().toLocaleDateString(), 14, 295);

            // Save the PDF
            doc.save('Detail_Laporan_Rafli_Diptana.pdf');
        });
    </script>
@endsection
