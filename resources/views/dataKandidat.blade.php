@extends('layout.master')

@section('content')
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.7/datatables.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/dataKandidat.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <h3 class="fw-bold mb-0">Data Kandidat</h3>
                <button id="exportPDF" class="btn btn-primary">
                    <span>Export PDF</span>
                    <i class="lni lni-download"></i>
                </button>
            </div>
            <div class="data-kandidat mt-4">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Pengguna</th>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>No Telepon</th>
                            <th>Usia</th>
                            <th>Gender</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="profil d-flex">
                                    <img src="img/profil-review/adudu.jpeg" class="avatar img-fluid" alt="avatar">
                                    <div class="user">
                                        <h5 class="mt-3">{{ $user->name }}</h5>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                </td>
                                <td><h5>{{ $user->id }}</h5></td>
                                <td><h5>{{ $user->updated_at }}</h5></td>
                                <td><h5>{{ $user->phone }}</h5></td>
                                <td><h5>{{ $user->age }}</h5></td>
                                <td><h5>{{ $user->gender }}</h5></td>
                                <td>
                                    <a href="user/{{ $user->id }}" class="btn btn-sm {{ $user->is_active ? 'btn-custom-active' : 'btn-custom-nonactive' }}">
                                        {{ $user->is_active ? 'Aktif' : 'Tidak Aktif' }}
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
        let table = new DataTable('#myTable');

        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', event => {
                    let button = event.target.closest('.dropdown').querySelector('button');
                    if (button.classList.contains('btn-aktif')) {
                        // Update teks dropdown
                        event.target.textContent = 'Aktif';
                        // Update kelas tombol
                        button.classList.remove('btn-aktif');
                        button.classList.add('btn-tidak-aktif');
                        button.textContent = 'Tidak Aktif';
                    } else {
                        // Update teks dropdown
                        event.target.textContent = 'Tidak Aktif';
                        // Update kelas tombol
                        button.classList.remove('btn-tidak-aktif');
                        button.classList.add('btn-aktif');
                        button.textContent = 'Aktif';
                    }
                });
            });

            document.getElementById('exportPDF').addEventListener('click', () => {
                const { jsPDF } = window.jspdf;
                const doc = new jsPDF('landscape', 'pt', 'A4');
                const rows = [];

                @foreach ($users as $user)
                    rows.push([
                        '{{ $user->name }}',
                        '{{ $user->email }}',
                        '{{ $user->id }}',
                        '{{ $user->updated_at }}',
                        '{{ $user->phone }}',
                        '{{ $user->age }}',
                        '{{ $user->gender }}',
                        '{{ $user->is_active ? "Aktif" : "Tidak Aktif" }}'
                    ]);
                @endforeach

                doc.autoTable({
                    head: [['Pengguna', 'Email', 'ID', 'Tanggal', 'No Telepon', 'Usia', 'Gender', 'Keterangan']],
                    body: rows,
                    margin: { top: 30, left: 30, right: 30, bottom: 30 },
                    styles: {
                        fontSize: 10,
                        cellPadding: 10
                    }
                });

                doc.save('data_kandidat.pdf');
            });
        });
    </script>
@endsection
