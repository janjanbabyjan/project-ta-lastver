@extends('layouts.shop')
    
@section('content')
     
<div class="row">
    @foreach($books as $book)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                <p>{{ $book->subject_id }}</p>
                    <p class="card-title">{{ $book->name }}</p>
                    <p>{{ $book->author }}</p>
                    <p class="card-text"><strong></strong>{{ $book->semester_id }}</p>
                    <p class="btn-holder"><a href="{{ route('addbook.to.cart', $book->id) }}" class="btn btn-outline-danger">Save</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
     
@endsection