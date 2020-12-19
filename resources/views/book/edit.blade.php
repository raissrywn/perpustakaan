@extends('layouts/main')

@section('title', 'Edit Book Data')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Edit Book</h6>
        </div>
        <div class="card-body">
            <form class=" form-signin" action="/book/{{ $book->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="category_id">Category Id</label>
                    <input type="number" class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                        placeholder="Insert Category" name="category_id" value="{{ $book->category_id }}">
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn"
                        placeholder="Insert ISBN" name="isbn" value="{{ $book->isbn }}">
                    @error('isbn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Insert Title" name="title" value="{{ $book->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author"
                        placeholder="Insert Author" name="author" value="{{ $book->author }}">
                    @error('author')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="page_count">Page Count</label>
                    <input type="number" class="form-control @error('page_count') is-invalid @enderror" id="page_count"
                        placeholder="Insert Page Count" name="page_count" value="{{ $book->page_count }}">
                    @error('page_count')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control @error('language') is-invalid @enderror" id="language"
                        placeholder="Insert Language" name="language" value="{{ $book->language }}">
                    @error('language')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        placeholder="Insert Description" name="description" value="{{ $book->description }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="path_cover">Cover</label>
                    <input type="file" class="form-control @error('path_cover') is-invalid @enderror" id="path_cover"
                        placeholder="Insert Cover" name="path_cover" value="{{ $book->path_cover }}">
                    @error('path_cover')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button style="width: 15%;" class="btn btn-small btn-success btn-block" type="submit">
                    <i class="far fa-save"></i><span class="ml-2">save changes</span>
                </button>
            </form>
        </div>
    </div>
    <a href="/makanans" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection