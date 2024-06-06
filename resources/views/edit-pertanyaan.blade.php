@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/testing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit-pertanyaan.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="title d-flex">
                <img src="img/interview test.png" alt="">
                <div class="d-flex flex-column">
                    <h2 class="fw-bold">INTERVIEW TEST</h2>
                    <p>Face Sentiment Analysis & Voice Sentiment Analysis.</p>
                </div>
            </div>

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
                    <label for="description" class="form-label">Edit Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Masukkan Deskripsi" required></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const uploadArea = document.getElementById('uploadArea');
            const fileInput = document.getElementById('fileInput');
            const uploadedVideo = document.getElementById('uploadedVideo');
            const deleteIcon = document.getElementById('deleteIcon');

            uploadArea.addEventListener('click', function () {
                fileInput.click();
            });

            // Prevent default behavior on uploadedVideo click
            uploadedVideo.addEventListener('click', function (e) {
                e.stopPropagation();
            });

            fileInput.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        uploadedVideo.src = e.target.result;
                        uploadedVideo.style.display = 'block';
                        uploadIcon.style.display = 'none';
                        uploadArea.classList.add('video-uploaded'); // Tambahkan kelas video-uploaded
                    }
                    reader.readAsDataURL(file);
                }
            });

            uploadArea.addEventListener('dragover', function (e) {
                e.preventDefault();
                this.classList.add('dragover');
            });

            uploadArea.addEventListener('dragleave', function () {
                this.classList.remove('dragover');
            });

            uploadArea.addEventListener('drop', function (e) {
                e.preventDefault();
                this.classList.remove('dragover');
                const file = e.dataTransfer.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (ev) {
                        uploadedVideo.src = ev.target.result;
                        uploadedVideo.style.display = 'block';
                        uploadIcon.style.display = 'none';
                        uploadArea.classList.add('video-uploaded'); // Tambahkan kelas video-uploaded
                    }
                    reader.readAsDataURL(file);
                }
            });

            uploadedVideo.addEventListener('loadedmetadata', function () {
            setObjectFitBasedOnAspectRatio();
        });

            deleteIcon.addEventListener('click', function () {
                uploadedVideo.src = '';
                uploadedVideo.style.display = 'none';
                fileInput.value = '';
                uploadIcon.style.display = 'block';
                uploadArea.classList.remove('video-uploaded'); // Hapus kelas video-uploaded
            });
        });
    </script>

@endsection
