@extends('layouts/app')

@section('title', 'Edit Book')

@section('content')
    <div class="container mt-4 manage">
        <h1>Edit Book<i class="uil uil-pagelines"></i></h1>
        <hr>
        <form action="{{ url('books/' . $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Book Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter book title" value="{{ $book->judul }}">
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" placeholder="Enter author's name" value="{{ $book->penulis }}">
                @error('author') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Publication Year</label>
                <input type="number" class="form-control @error('publication_year') is-invalid @enderror" name="publication_year" placeholder="Enter year of publication" value="{{ $book->tahun_terbit }}">
                @error('publication_year') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Pages</label>
                <input type="number" class="form-control @error('number_of_pages') is-invalid @enderror" name="number_of_pages" placeholder="Enter number of pages" value="{{ $book->jumlah_halaman }}">
                @error('number_of_pages') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn me-1 submit-add-book" onclick="return confirm ('Save changes?')">Submit</button>
            <a href="{{ url('/books/manage') }}" class="btn submit-add-book" onclick="return confirm ('Discard changes?')">Cancel</a>
        </form>
    </div>
@endsection