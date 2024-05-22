@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <!-- Main Content -->
    <main class="content px-3 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <form action="{{ route('postCreateBlog') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" id="name" name="name" required />
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="shortDescription" class="form-label">Short Description</label>
                            <input type="text" class="form-control" id="shortDescription" name="short_description"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="status" name="status" />
                            <label class="form-check-label" for="status">Active</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
