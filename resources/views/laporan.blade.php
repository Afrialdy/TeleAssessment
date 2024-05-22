@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="d-flex">
                <h4 class="fw-bold">Laporan Asessment</h4>
                <div class="d-flex icons">
                    <a href="">
                        <i class="lni lni-printer"></i>
                    </a>

                    <a href="">
                        <i class="lni lni-download"></i>
                    </a>
                </div>
            </div>
            <div class="laporan mt-3">
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Peserta</th>
                            <th>ID</th>
                            <th>Kepribadian</th>
                            <th>Bakat Minat</th>
                            <th>Intelegensi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="data-body"></tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        // JavaScript for generating random data
        document.addEventListener('DOMContentLoaded', function() {
            const tbody = document.getElementById('data-body');
            const numberOfEntries = 20; // Number of random entries

            for (let i = 0; i < numberOfEntries; i++) {
                const date = randomDate(new Date(2020, 0, 1), new Date());
                const peserta = generatePeserta();
                const id = generateID();
                const kepribadian = randomKepribadian();
                const bakatMinat = randomBakatMinat();
                const intelegensi = randomIntelegensi();

                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${date}</td>
                    <td>${peserta}</td>
                    <td>${id}</td>
                    <td>${kepribadian}</td>
                    <td>${bakatMinat}</td>
                    <td>${intelegensi}</td>
                    <td>
                        <a href="{{ route('detail-laporan') }}">
                            <button class="btn btn-primary">Detail</button>
                        </a>
                    </td>
                `;
                tbody.appendChild(row);
            }
        });

        // Function to generate peserta
        function generatePeserta() {
            const firstNames = ["John", "Jane", "David", "Emily", "Michael", "Emma", "Daniel", "Olivia", "James", "Sophia"];
            const lastNames = ["Smith", "Johnson", "Williams", "Brown", "Jones", "Garcia", "Miller", "Davis", "Rodriguez", "Martinez"];
            const randomFirstName = firstNames[Math.floor(Math.random() * firstNames.length)];
            const randomLastName = lastNames[Math.floor(Math.random() * lastNames.length)];
            return `${randomFirstName} ${randomLastName}`;
        }

        // Function to generate ID
        function generateID() {
            return Math.floor(Math.random() * 100) + 1;
        }

        // Function to generate a random date within a range
        function randomDate(start, end) {
            return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime())).toLocaleDateString('id-ID');
        }

        // Function to generate a random kepribadian
        function randomKepribadian() {
            const kepribadianOptions = ['INTJ', 'ENTP', 'INFJ', 'ESTP', 'ISTJ', 'ENFJ'];
            return kepribadianOptions[Math.floor(Math.random() * kepribadianOptions.length)];
        }

        // Function to generate a random bakat minat
        function randomBakatMinat() {
            const bakatMinatOptions = ['Pengembangan Software', 'Desain Grafis', 'Musik', 'Pengelolaan Proyek', 'Penulisan Kreatif', 'Pemasaran'];
            return bakatMinatOptions[Math.floor(Math.random() * bakatMinatOptions.length)];
        }

        // Function to generate a random intelegensi
        function randomIntelegensi() {
            const intelegensiOptions = ['Tinggi', 'Sedang', 'Rendah'];
            return intelegensiOptions[Math.floor(Math.random() * intelegensiOptions.length)];
        }
    </script>

@endsection
