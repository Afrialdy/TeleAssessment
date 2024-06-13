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
                            <td>{{ $user->name }}</td>
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
                            <td><strong>{{ $user->name }}</strong> dengan ID: <strong>{{ $user->id }}</strong> dan Email <strong>{{ $user->email }}</strong> dikenal dengan kepribadian yang
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
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique obcaecati architecto voluptatem cumque quasi animi velit corporis doloribus blanditiis minima.
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
        document.getElementById('exportPDF').addEventListener('click', async () => {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('landscape', 'pt', 'A4');
            const rows = [];

            // Fetch the user data from the server
            const user = @json($user);

            // Function to format date with explicit timezone
            const formatDate = (dateString) => {
                const date = new Date(dateString);
                const formattedDate = `${date.getUTCFullYear()}-${(date.getUTCMonth() + 1).toString().padStart(2, '0')}-${date.getUTCDate().toString().padStart(2, '0')} ${date.getUTCHours().toString().padStart(2, '0')}:${date.getUTCMinutes().toString().padStart(2, '0')}:${date.getUTCSeconds().toString().padStart(2, '0')}`;
                return formattedDate;
            };

            // Push user data to the rows array
            rows.push([
                user.name,
                user.email,
                user.id,
                formatDate(user.updated_at),
            ]);

            // Generate PDF with the user data
            doc.autoTable({
                head: [['Pengguna', 'Email', 'ID', 'Penilaian Kandidat']],
                body: rows,
                margin: { top: 30, left: 30, right: 30, bottom: 30 },
                styles: {
                    fontSize: 10,
                    cellPadding: 10
                }
            });

            doc.save('Assessment.pdf');
        });

        function resetFilter() {
            window.location.href = "{{ route('assessment') }}";
        }

        // Initialize Flatpickr
        flatpickr("#start_date", {
            dateFormat: "Y-m-d"
        });

        flatpickr("#end_date", {
            dateFormat: "Y-m-d"
        });
    </script>

@endsection
