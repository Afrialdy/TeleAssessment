@extends('layout.master')

@section('content')
        <!-- Main Content -->
        <main class="content px-3 py-4">
            <div class="container-fluid">
                <div class="mb-3">
                    <div class="">
                        <div class="row d-flex flex-row">
                            <div class="col-md-3 mb-4">
                                <div class="test-item">
                                    <div class="icon-container">
                                        <img src="img/group.png" alt="Group" class="group-image">
                                    </div>
                                    <div class="text-content d-flex flex-column">
                                        <span class="number">{{ $userCount }}</span>
                                        <span class="label">Jumlah Peserta</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="test-item">
                                    <div class="chart-wrapper">
                                        <div class="chart" data-percent="90" data-toggle="tooltip" title="User 90 dari 100">
                                            <span class="percent" data-after="%"></span>
                                        </div>
                                        <div class="chart-text">Tes Cognitive</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="test-item">
                                    <div class="chart-wrapper">
                                        <div class="chart" data-percent="80" data-toggle="tooltip" title="User 80 dari 100">
                                            <span class="percent" data-after="%"></span>
                                        </div>
                                        <div class="chart-text">Tes Interview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="test-item">
                                    <div class="chart-wrapper">
                                        <div class="chart" data-percent="100" data-toggle="tooltip" title="User 100 dari 100">
                                            <span class="percent" data-after="%"></span>
                                        </div>
                                        <div class="chart-text">Tes Validasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="charts">
                        <div class="box-chart">
                            <h2>Grafik Peserta Perbulan</h2>
                            <canvas id="lineChart"></canvas>
                        </div>

                        <div class="box-chart" id="doughtnut-chart">
                            <h2>Hasil Tes Kepribadian</h2>
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
        <script src="{{ asset('js/my_chart.js') }}"></script>
        <script>
            // Pie Chart
            var ctxP = document.getElementById('pieChart').getContext('2d');
            var pieChart = new Chart(ctxP, {
                type: 'pie',
                data: {
                    labels: {!! json_encode($labels) !!},
                    datasets: [{
                        data: {!! json_encode($data) !!},
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        </script>
@endsection
