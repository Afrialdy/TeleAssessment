@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="profil">
                <div class="profil-box">
                    <div class="profil-header d-flex mb-5">
                        <h2>Profil Pengguna</h2>
                        <button class="pesan-btn"><i class="fas fa-envelope"></i> Pesan</button>
                    </div>
                    <div class="d-flex flex-column">
                        <h3>Hallo, {{ Auth::user()->name }}</h3>
                        <p>Saya suka mendesain dan fotografi, itu termasuk hobi saya</p>
                        {{-- <button class="btn">Edit Profil</button> --}}
                    </div>
                </div>
                <div class="px-5">
                    <div class="edit-profil">
                        <h2>Edit Profil</h2>
                        <div>
                            <label for="namapengguna" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" placeholder="Nama Pengguna">
                        </div>
                        <div>
                            <label for="namadepan" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" placeholder="Nama Depan">
                        </div>
                        <div>
                            <label for="namabelakang" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" placeholder="Nama Belakang">
                        </div>
                        <div>
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" class="form-control" placeholder="Umur">
                        </div>
                        <h2>Informasi Kontak</h2>
                        <div>
                            <label for="asaluniversitas" class="form-label">Asal Universitas</label>
                            <input type="text" class="form-control" placeholder="Asal Universitas">
                        </div>
                        <div>
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="kota" class="form-label">Kota</label>
                                <input type="text" class="form-control" placeholder="Kota">
                            </div>
                            <div class="col-md-4">
                                <label for="negara" class="form-label">Negara</label>
                                <input type="text" class="form-control" placeholder="Negara">
                            </div>
                            <div class="col-md-4">
                                <label for="kodepos" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" placeholder="Kode Pos">
                            </div>
                        </div>
                        <div>
                            <label for="tentangsaya" class="form-label">Tentang Saya</label>
                            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                        </div>
                        <div class="text-center mb-5">
                            <button type="submit" class="btn" id="editProfil">Ubah Profil</button>
                        </div>
                    </div>
                </div>

                <div class="row mt-2 px-5">
                    <div class="col-md-6">
                        <div class="asess">
                            <div class="asessbox mt-3">
                                <h2 class="fs-5">Kata Sandi</h2>
                                <p>***********</p>
                                <h5 class="fs-6">Terakhir diubah 10 Januari 2024</h5>
                                <button class="btn btn-primary">Ubah Password</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="asess">
                            <div class="asessbox-setting d-flex mt-3 flex-column gap-3">
                                <button class="btn-language btn-primary d-flex">
                                    <div class="d-flex flex-column">
                                        <div class="language">
                                            <i class="lni lni-world"></i>
                                            Bahasa
                                        </div>
                                        <span>Indonesia</span>
                                    </div>
                                    <div class="icon">
                                        <i class="lni lni-arrow-right"></i>
                                    </div>
                                </button>

                                <button class="btn-language btn-primary d-flex">
                                    <div class="d-flex flex-column">
                                        <div class="language">
                                            <i class="lni lni-map-marker"></i>
                                            Wilayah
                                        </div>
                                        <span>Indonesia</span>
                                    </div>
                                    <div class="icon">
                                        <i class="lni lni-arrow-right"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

@endsection
