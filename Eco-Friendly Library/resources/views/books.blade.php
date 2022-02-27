@extends('layouts/app')

@section('title', 'Books Page')

@section('content')
    <!-- PAGE TITLE -->
    <div class="container mt-4 book-lists-title">
        <h1>Book Lists<i class="uil uil-pagelines"></i></h1>
        <hr>
    </div>

    <!-- BOOK LISTS -->
    <div class="container mt-4">
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-3">
                    <div class="col-md-12 book-content">
                        <span class="judul"><b>{{ $book->judul }}</b></span><br>
                        <span class="tahun_terbit badge">Publication Year {{ $book->tahun_terbit }}</span><br>
                        <span class="penulis">By: {{ $book->penulis }}</span><br>
                        <span class="jumlah_halaman">Pages: {{ $book->jumlah_halaman }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection