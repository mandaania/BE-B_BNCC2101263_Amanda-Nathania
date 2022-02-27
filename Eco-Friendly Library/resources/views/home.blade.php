@extends('layouts/app')

@section('title', 'Eco Friendly Library')

@section('content')
    <!-- BANNER -->
    <div class="container banner mt-4">
        <h1>Welcome to the Library<i class="uil uil-pagelines"></i></h1>
        <p>The Library which you can access anywhere, anytime, and most importantly eco-friendly!</p>
        <a href="{{ url('/books') }}" class="btn book-list-btn me-3">More Books</a>
        <a href="{{ url('/contact-us') }}" class="btn contact-us">Contact Us</a>
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