@extends('layout.master')

@section('content')
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.7/datatables.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3 d-flex justify-content-between align-items-center"> <!-- Update disini -->
                <h3 class="fw-bold mb-0">Laporan Asessment</h3>
                <button id="exportPDF" class="btn btn-primary">
                    <span>Export PDF</span>
                    <i class="lni lni-download"></i>
                </button>
            </div>
            <div class="data-kandidat mt-4">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Peserta</th>
                            <th>Kepribadian</th>
                            <th>Bakat Minat</th>
                            <th>Intelegensi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><h5>{{ $user->id }}</h5></td>
                                <td><h5 class="fw-bold">{{ $user->name }}</h5></td>
                                <td class="kepribadian"><h5></h5></td>
                                <td class="bakat-minat"><h5></h5></td>
                                <td class="intelegensi"><h5></h5></td>
                                <td>
                                    <a href="{{ route('detail-laporan', ['id' => $user->id]) }}">
                                        <button class="btn btn-primary">Detail</button>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRMSOm4l6H2z+EuhvzrQF2s6D8zjri5+7NfXKhv6N" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-2.0.7/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.18/jspdf.plugin.autotable.min.js"></script>

    <script>
        $(document).ready(function() {
            let table = $('#myTable').DataTable({
                "order": [], // Menghapus pengaturan default order
            });

            function randomKepribadian() {
                const kepribadianOptions = ['INTJ', 'ENTP', 'INFJ', 'ESTP', 'ISTJ', 'ENFJ'];
                return kepribadianOptions[Math.floor(Math.random() * kepribadianOptions.length)];
            }

            function randomBakatMinat() {
                const bakatMinatOptions = ['Pengembangan Software', 'Desain Grafis', 'Musik', 'Pengelolaan Proyek', 'Penulisan Kreatif', 'Pemasaran'];
                return bakatMinatOptions[Math.floor(Math.random() * bakatMinatOptions.length)];
            }

            function randomIntelegensi() {
                const intelegensiOptions = ['Tinggi', 'Sedang', 'Rendah'];
                return intelegensiOptions[Math.floor(Math.random() * intelegensiOptions.length)];
            }

            // Populate random values for each row
            table.on('draw', function() {
                $('#myTable tbody tr').each(function() {
                    $(this).find('.kepribadian h5').text(randomKepribadian());
                    $(this).find('.bakat-minat h5').text(randomBakatMinat());
                    $(this).find('.intelegensi h5').text(randomIntelegensi());
                });
            });

            table.draw();

            $('#exportPDF').on('click', function () {
                const { jsPDF } = window.jspdf;
                const doc = new jsPDF('landscape', 'pt', 'A4');
                const rows = [];

                @foreach ($users as $user)
                    rows.push([
                        '{{ $user->name }}',
                        '{{ $user->id }}',

                    ]);
                @endforeach

                doc.autoTable({
                    head: [['Pengguna', 'ID', 'Kepribadian', 'Bakat Minat', 'Intelegensi']],
                    body: rows,
                    margin: { top: 30, left: 30, right: 30, bottom: 30 },
                    styles: {
                        fontSize: 10,
                        cellPadding: 10
                    }
                });

                doc.save('Laporan Assessment.pdf');
            });
        });
    </script>

@endsection
