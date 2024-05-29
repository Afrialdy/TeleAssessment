@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/assessment.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <h4 class="fw-bold">Hasil Tes Peserta</h4>
            <div class="d-flex justify-content-between align-items-center">
                <div class="date-picker-body d-flex align-items-center">
                    <input type="date" id="start-date" class="date-input me-2">
                    <span class="separator me-2">—</span>
                    <input type="date" id="end-date" class="date-input">
                </div>
                <form action="{{ route('search') }}" method="GET" class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="cari nama peserta" name="search">
                        <button class="btn btn-primary" type="submit">
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
                            <a href="{{ route('hasil-test') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Hasil Tes</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-6 mt-3 entries">
                    Showing
                    {{ $users->firstItem() }}
                    to
                    {{ $users->lastItem() }}
                    of
                    {{ $users->total() }}
                    entries
                </div>
                <div class="col-md-6 pagination mt-3 text-end">
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
            </div>
    </main>
@endsection
