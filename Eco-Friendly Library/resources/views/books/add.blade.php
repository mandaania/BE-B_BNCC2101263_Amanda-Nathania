@extends('layouts/app')

@section('title', 'Add Book')

@section('content')
    <div class="container mt-4 manage">
        <h1>Add Book<i class="uil uil-pagelines"></i></h1>
        <hr>
        <form action="{{ url('books/add') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Book Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter book title" value="{{ old('title') }}">
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" placeholder="Enter author's name" value="{{ old('author') }}">
                @error('author') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Publication Year</label>
                <input type="number" class="form-control @error('publication_year') is-invalid @enderror" name="publication_year" placeholder="Enter year of publication" value="{{ old('publication_year') }}">
                @error('publication_year') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Pages</label>
                <input type="number" class="form-control @error('number_of_pages') is-invalid @enderror" name="number_of_pages" placeholder="Enter number of pages" value="{{ old('number_of_pages') }}">
                @error('number_of_pages') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn me-1 submit-add-book" onclick="return confirm ('Save changes?')">Submit</button>
            <a href="{{ url('/books/manage') }}" class="btn submit-add-book" onclick="return confirm ('Discard changes?')">Cancel</a>
        </form>
    </div>
@endsection