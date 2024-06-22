@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/detail-laporan.css') }}">
    <style>
        .table th {
            padding: 10px 35px 10px 15px;
            background-color: #f8f9fa;
            text-align: left;
            border-top: 1px solid #dee2e6;
        }
    </style>
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <h3 class="fw-bold mb-0">Detail Laporan</h3>
                <button id="exportPDF" class="btn btn-primary">
                    <span>Export PDF</span>
                    <i class="lni lni-download"></i>
                </button>
            </div>
            <div class="detail-kandidat mt-4">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $user->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Kepribadian</th>
                            <td>
                                @if ($user->kepribadian)
                                    {{ $user->kepribadian }}
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Bakat</th>
                            <td>
                                @if ($user->bakat)
                                    {{ $user->bakat }}
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Intelegensi</th>
                            <td>
                                @if ($user->intelegensi)
                                    {{ $user->intelegensi }}
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Kesimpulan</th>
                            <td><strong>{{ $user->nama_lengkap }}</strong> dengan ID: <strong>{{ $user->id }}</strong> dan Email <strong>{{ $user->email }}</strong> dikenal dengan kepribadian yang
                                <strong>@if ($user->kepribadian)
                                    {{ $user->kepribadian }}
                                @else
                                    (-)
                                @endif</strong>
                                dengan bakat
                                <strong>@if ($user->bakat)
                                    {{ $user->bakat }}
                                @else
                                    (-)
                                @endif</strong>
                                dan memiliki intelegensi
                                <strong>@if ($user->intelegensi)
                                    {{ $user->intelegensi }}
                                @else
                                    (-)
                                @endif</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('laporan') }}" class="btn btn-secondary">Back to Laporan</a>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.17/jspdf.plugin.autotable.min.js"></script>
    <script>
        document.getElementById('exportPDF').addEventListener('click', () => {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('portrait', 'pt', 'A4');

            const data = {
                id: "{{ $user->id }}",
                nama_lengkap: "{{ $user->nama_lengkap }}",
                email: "{{ $user->email }}",
                kepribadian: "{{ $user->kepribadian ?? '-' }}",
                bakat: "{{ $user->bakat ?? '-' }}",
                intelegensi: "{{ $user->intelegensi ?? '-' }}"
            };

            const tableData = [
                { "key": "ID", "value": data.id },
                { "key": "Nama", "value": data.nama_lengkap },
                { "key": "Email", "value": data.email },
                { "key": "Kepribadian", "value": data.kepribadian },
                { "key": "Bakat", "value": data.bakat },
                { "key": "Intelegensi", "value": data.intelegensi },
                {
                    "key": "Kesimpulan", "value": `${data.nama_lengkap} dengan ID: ${data.id} dan Email ${data.email} dikenal dengan kepribadian yang ${data.kepribadian} dengan bakat ${data.bakat} dan memiliki intelegensi ${data.intelegensi}.`
                }
            ];

            const tableBody = tableData.map(row => [row.key, row.value]);

            doc.autoTable({
                body: tableBody,
                theme: 'striped',
                headStyles: {
                    fillColor: [248, 249, 250],
                    textColor: 0,
                    fontStyle: 'bold',
                },
                styles: {
                    halign: 'left',
                    cellPadding: { top: 10, right: 30, bottom: 10, left: 15 },
                    fontSize: 10,
                    overflow: 'linebreak',
                    lineColor: [0, 0, 0],
                    lineWidth: 0.1
                },
                columnStyles: {
                    0: { cellWidth: 100 },
                    1: { cellWidth: 400 }
                },
                margin: { top: 50 }
            });

            doc.save('Assessment.pdf');
        });
    </script>

@endsection
