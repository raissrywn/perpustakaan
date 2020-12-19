@extends('layouts/main')

@section('title', 'Book Table')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Flash Data -->
    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session('statusHapus'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('statusHapus') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Books
                <span>
                    <a href="/book/create" class="text-primary float-right">
                        <i class="fas fa-plus"><span class="ml-2">Add Book</span></i>
                    </a>
                </span>
            </h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No.</th>
                            <th scope="col" class="text-center">Category Id</th>
                            <th scope="col" class="text-center">ISBN</th>
                            <th scope="col" class="text-center">Title</th>
                            <th scope="col" class="text-center">Author</th>
                            <th scope="col" class="text-center">Page Count</th>
                            <th scope="col" class="text-center">Language</th>
                            <th scope="col" class="text-center">Path Cover</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book as $book)
                        <tr>
                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                            <td class="text-center">
                                @foreach ($book->kategoriBuku as $item)
                                    {{ $item->category }}
                                @endforeach
                            </td>
                            <td class="text-center">{{ $book->isbn }}</td>
                            <td class="text-center" width="150px">{{ $book->title }}</td>
                            <td class="text-center">{{ $book->author }}</td>
                            <td class="text-center">{{ $book->page_count }}</td>
                            <td class="text-center">{{ $book->language }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModalScrollable">
                                    Detail
                                </button>
                                <a href="/book/{{ $book->id }}/edit" class="btn btn-small text-success">
                                    <i class="fa fa-edit"></i><span class="ml-2">Edit</span>
                                </a>
                                <form action="/book/{{ $book->id }}" method="POST"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-small text-danger">
                                        <i class=" fa fa-trash"></i><span class="ml-2">Del</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Description</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div><td><img width="150px" src="{{ asset('image/'.$book->path_cover) }}"></td></div>
                                <td class="text-center">{{ $book->description }}</td>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
