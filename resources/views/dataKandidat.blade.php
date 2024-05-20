@extends('layout.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/dataKandidat.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3">
                <h3 class="fw-bold">Data Kandidat</h3>
                <div class="data-kandidat mt-4">
                    <div class="data-box">
                        <table>
                            <thead class="px-4">
                                <tr>
                                    <td>Pengguna</td>
                                    <td style="padding-right: 30px;">ID</td>
                                    <td style="padding-left: 10px;">No Telepon</td>
                                    <td>Tanggal Lahir</td>
                                    <td style="padding-right: 30px;">Usia</td>
                                    <td style="padding-right: 20px;">Gender</td>
                                    <td style="padding-left: 15px;">Keterangan</td>
                                    <td>
                                        <a href="" style="padding-left: 17px">
                                            <i class="lni lni-printer"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" style="padding-left: 20px">
                                            <i class="lni lni-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            </thead>

                            <tr class="separator">
                                <td colspan="12"></td>
                            </tr>

                            <tbody id="dataContainer">
                                <!-- Data akan diisi oleh JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/generateData.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
