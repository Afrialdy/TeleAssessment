@extends('layout.master')

@section('style')
    <style>
        /* Style the list */
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
        }

        /* Display list items side by side */
        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }

        /* Add a slash symbol (/) before/behind each list item */
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }

        /* Add a color to all links inside the list */
        ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
        }

        /* Add a color on mouse-over */
        ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;
        }
    </style>
@endsection

@section('content') 
    <ul class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('pertanyaan_test') }}">Pertanyaan Test</a></li>
        
        <li>Edit Video</li>
    </ul>
    <link rel="stylesheet" href="{{ asset('css/pertanyaan-test.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit-pertanyaan.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-3">
        <div class="container-fluid">
            {{-- <div class="title d-flex">
                <img src="img/interview test.png" alt="">
                <div class="d-flex flex-column">
                    <h2 class="fw-bold">INTERVIEW TEST</h2>
                    <p>Face Sentiment Analysis & Voice Sentiment Analysis.</p>
                </div>
            </div> --}}

            <div class="video-upload d-flex align-items-center">
                <div class="upload-container">
                    <div class="upload-area" id="uploadArea">
                        <input type="file" id="fileInput" accept="video/*" style="display: none;">
                        <div class="upload-icon" id="uploadIcon">
                            <i class="lni lni-upload"></i>
                        </div>
                        <video id="uploadedVideo" controls style="display: none; width: 100%;"></video>
                    </div>
                </div>
                <div class="delete-icon" id="deleteIcon">
                    <i class="lni lni-trash-can"></i>
                </div>
            </div>

            <div class="deskripsi">
                <div class="box-deskripsi">
                    <label for="description" class="form-label">Edit Pertanyaan</label>
                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Masukkan Pertanyaan"
                        required></textarea>
                </div>
            </div>

            <div class="deskripsi">
                <div class="box-deskripsi">
                    <label for="description" class="form-label">Edit Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Masukkan Deskripsi"
                        required></textarea>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Status
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><button class="dropdown-item" type="button">Aktif</button></li>
                    <li><button class="dropdown-item" type="button">Tidak Aktif</button></li>
                </ul>
            </div>

            <button type="submit" class="btn btn-primary submit">Simpan</button>

        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const uploadArea = document.getElementById('uploadArea');
            const fileInput = document.getElementById('fileInput');
            const uploadedVideo = document.getElementById('uploadedVideo');
            const deleteIcon = document.getElementById('deleteIcon');
            uploadArea.addEventListener('click', function() {
                fileInput.click();
            });
            // Prevent default behavior on uploadedVideo click
            uploadedVideo.addEventListener('click', function(e) {
                e.stopPropagation();
            });
            fileInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        uploadedVideo.src = e.target.result;
                        uploadedVideo.style.display = 'block';
                        uploadIcon.style.display = 'none';
                        uploadArea.classList.add('video-uploaded'); // Tambahkan kelas video-uploaded
                    }
                    reader.readAsDataURL(file);
                }
            });
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('dragover');
            });
            uploadArea.addEventListener('dragleave', function() {
                this.classList.remove('dragover');
            });
            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
                const file = e.dataTransfer.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(ev) {
                        uploadedVideo.src = ev.target.result;
                        uploadedVideo.style.display = 'block';
                        uploadIcon.style.display = 'none';
                        uploadArea.classList.add('video-uploaded'); // Tambahkan kelas video-uploaded
                    }
                    reader.readAsDataURL(file);
                }
            });
            uploadedVideo.addEventListener('loadedmetadata', function() {
                setObjectFitBasedOnAspectRatio();
            });
            deleteIcon.addEventListener('click', function() {
                uploadedVideo.src = '';
                uploadedVideo.style.display = 'none';
                fileInput.value = '';
                uploadIcon.style.display = 'block';
                uploadArea.classList.remove('video-uploaded'); // Hapus kelas video-uploaded
            });
        });

        //Dropdown Button
        document.addEventListener("DOMContentLoaded", function() {
        const dropdownButton = document.getElementById('dropdownMenuButton');
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        // Fungsi untuk mengatur warna default tombol
        function setDefaultButtonColor() {
            dropdownButton.classList.remove('btn-success', 'btn-danger'); // Hapus semua kelas warna tambahan
            dropdownButton.classList.add('btn-primary'); // Tambahkan kembali kelas warna default
            dropdownButton.textContent = 'Status'; // Reset teks tombol
        }

        // Fungsi untuk mengubah warna tombol berdasarkan status yang dipilih
        function updateButtonColor(status) {
            if (status === 'Aktif') {
                dropdownButton.classList.remove('btn-primary', 'btn-danger');
                dropdownButton.classList.add('btn-success');
            } else if (status === 'Tidak Aktif') {
                dropdownButton.classList.remove('btn-primary', 'btn-success');
                dropdownButton.classList.add('btn-danger');
            }
            dropdownButton.textContent = status; // Update teks tombol
        }

        // Mengatur event listener untuk setiap item dropdown
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                const status = this.textContent.trim();  // Ambil status yang dipilih
                updateButtonColor(status);  // Ubah warna tombol
            });
        });

        // Set default status (if needed)
        setDefaultButtonColor(); // Initialize button color
    });
    </script>
@endsection
