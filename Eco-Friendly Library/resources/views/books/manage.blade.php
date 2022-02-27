@extends('layouts/app')

@section('title', 'Manage Books')

@section('content')
   <div class="container mt-4 manage">
       <h1>Manage Books<i class="uil uil-pagelines"></i></h1>
       <span>Add more books to your library!</span><br>
       <a href="{{ url('books/add') }}" class="btn btn-sm mt-1 add-book"><i class="uil uil-plus"></i> Add Book</a>
       <hr>

       <!-- JIKA BERHASIL MENAMBAHKAN/MENGEDIT/MENGHAPUS BUKU -->
       @if(session('success'))
            <div class="alert add-alert p-1 m-1" role="alert">
                {{ session('success') }}
            </div>
       @endif

       <div class="table-wrapper">
           <table class="table table-hover mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Publication Year</th>
                        <th>Pages</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->penulis }}</td>
                            <td>{{ $book->tahun_terbit }}</td>
                            <td>{{ $book->jumlah_halaman }}</td>
                            <td>
                                <a href="{{ url('books/' . $book->id) }}" class="btn btn-sm me-1 edit-book-btn">
                                    <i class="uil uil-edit-alt"></i>
                                </a>
                                <a href="{{ url('books/' . $book->id) }}" class="btn btn-sm ms-1 delete-book-btn" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $book->id }}').submit();">
                                    <i class="uil uil-trash-alt"></i>
                                    <form id="delete-form-{{ $book->id }}" action="{{ url('books/' . $book->id) }}"
                                    method="POST"
                                    style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
       </div>
   </div>
@endsection