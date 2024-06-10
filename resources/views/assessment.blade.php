@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/assessment.css') }}">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <h3 class="fw-bold mb-0">Hasil Tes Peserta</h3>
                <button id="exportPDF" class="btn btn-primary">
                    <span>Export PDF</span>
                    <i class="lni lni-download"></i>
                </button>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <form method="GET" action="{{ route('filter') }}">
                    <div class="date-picker-body d-flex align-items-center">
                        <input type="text" id="start_date" class="date-input me-2" name="start_date" value="{{ request()->input('start_date') }}">
                        <span class="separator me-2">—</span>
                        <input type="text" id="end_date" class="date-input me-4" name="end_date" value="{{ request()->input('end_date') }}">
                        <button type="submit" class="btn btn-primary filter">Filter</button>
                        <button type="button" class="btn btn-danger ms-2 reset" onclick="resetFilter()">Reset</button>
                    </div>
                </form>
                <form action="{{ route('search') }}" method="GET" class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="cari nama peserta" name="search">
                        <button class="btn btn-primary search" type="submit">
                            <i class="lni lni-search-alt mt-1"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="row">
                @foreach ($users as $user)
                <div class="col-md-6">
                    <div class="asess">
                        <div class="asessbox d-flex mt-3">
                            <div class="">
                                <h1>{{ $user->name }}</h1>
                                <div class="d-flex flex-column items">
                                    <h3>No ID : {{ $user->id }}</h3>
                                    <h3>Penilaian Kandidat : {{ $user->updated_at }}</h3>
                                </div>
                            </div>
                            <a href="{{ route('hasil-test', ['id' => $user->id]) }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Hasil Tes</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-6 mt-3 entries">
                    @if ($users instanceof \Illuminate\Pagination\AbstractPaginator)
                        Showing
                        {{ $users->firstItem() }}
                        to
                        {{ $users->lastItem() }}
                        of
                        {{ $users->total() }}
                        entries
                    @endif
                </div>
                @if ($users instanceof \Illuminate\Pagination\AbstractPaginator)
                    <div class="col-md-6 pagination mt-3 text-end">
                        {{ $users->appends(request()->input())->links('pagination::bootstrap-4') }}
                    </div>
                @endif
            </div>
        </div>
    </main>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.17/jspdf.plugin.autotable.min.js"></script>
    <script>
        document.getElementById('exportPDF').addEventListener('click', async () => {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('landscape', 'pt', 'A4');
            const rows = [];

            // Fetch all users from the server
            const response = await fetch('{{ route('all_users') }}');
            const users = await response.json();

            // Function to format date with explicit timezone
            const formatDate = (dateString) => {
                const date = new Date(dateString);
                const formattedDate = `${date.getUTCFullYear()}-${(date.getUTCMonth() + 1).toString().padStart(2, '0')}-${date.getUTCDate().toString().padStart(2, '0')} ${date.getUTCHours().toString().padStart(2, '0')}:${date.getUTCMinutes().toString().padStart(2, '0')}:${date.getUTCSeconds().toString().padStart(2, '0')}`;
                return formattedDate;
            };

            // Push all users to the rows array
            users.forEach(user => {
                rows.push([
                    user.name,
                    user.email,
                    user.id,
                    formatDate(user.updated_at),
                ]);
            });

            // Generate PDF with all users
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
