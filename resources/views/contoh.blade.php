@extends('layout.master')

@section('content')

    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3">

                <table id="myTable">
                    <thead>
                        <tr>
                            <th>Pengguna</th>
                            <th>ID</th>
                            <th>Usia</th>
                            <th>Gender</th>
                            <th>Keterangan</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>Michael</td>
                                <td>01</td>
                                <td>25</td>
                                <td>Pria</td>
                                <td>Aktif</td>
                            </tr>
                        </tbody>
                    </thead>
                </table>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/generateData.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
