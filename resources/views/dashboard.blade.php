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
                                    <div class="chart" data-percent="72" data-toggle="tooltip" title="User 23 dari {{ $userCount }}">
                                        <span class="percent" data-after="%"></span>
                                    </div>
                                    <div class="chart-text">Tes Cognitive</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="test-item">
                                <div class="chart-wrapper">
                                    <div class="chart" data-percent="96" data-toggle="tooltip" title="User 32 dari {{ $userCount }}">
                                        <span class="percent" data-after="%"></span>
                                    </div>
                                    <div class="chart-text">Tes Interview</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="test-item">
                                <div class="chart-wrapper">
                                    <div class="chart" data-percent="81" data-toggle="tooltip" title="User 27 dari {{ $userCount }}">
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
                        <canvas id="lineChart" data-monthly-data="{{ json_encode($monthlyData) }}"></canvas>
                    </div>

                    <div class="box-chart" id="doughtnut-chart">
                        <h2>Hasil Tes Kepribadian</h2>
                        <canvas id="pieChart" data-labels="{{ json_encode($labels) }}" data-data="{{ json_encode($data) }}"></canvas>
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
@endsection
