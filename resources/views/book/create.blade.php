@extends('layouts/main')

@section('title', 'Add Article Data')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Add Article</h6>
        </div>
        <div class="card-body">
            <form class=" form-signin" action="/dokumentasi" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control @error('judul_artikel') is-invalid @enderror" id="judul_artikel"
                        placeholder="Masukan Judul" name="judul_artikel" value="{{ old('judul_artikel') }}">
                    @error('judul_artikel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="isi_artikel">Isi Artikel</label>
                    <input type="text" class="form-control @error('isi_artikel') is-invalid @enderror" id="isi_artikel"
                        placeholder="Isi Artikel" name="isi_artikel" value="{{ old('isi_artikel') }}">
                    @error('isi_artikel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gambar_artikel">Gambar Artikel</label>
                    <input style="height: 30%;" type="file" class="form-control @error('gambar_artikel') is-invalid @enderror" id="gambar_artikel"
                        placeholder="Masukan Gambar" name="gambar_artikel" value="{{ old('gambar_artikel') }}">
                    @error('gambar_artikel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button style="width: 25%; " class="btn btn-small btn-success btn-block" type="submit"><i
                        class="far fa-save"></i><span class="ml-2">save changes</span></button>
            </form>
        </div>
    </div>
    <a href="/admin" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection