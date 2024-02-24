@extends('layouts.user-selectsubject')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">เลือกรายวิชาที่ต้องการสมัคร</div>
                <div class="card-body">
                    <div class=”panel-heading”>

                        @foreach($books as $book)
                        <div class="row align-items-center p">
                            <p class="col-2">{{ $book->subject_id }}</p>
                            <p class="col-5">{{ $book->name }}</p>
                            <p class="col-1"><strong></strong>{{ $book->semester_id }}</p>
                            <p class="col-3">{{ $book->author }}</p>
                            <p class="col-1"><a href="{{ route('addbook.to.cart', $book->id) }}"
                                    class="btn btn-outline-success">เลือก</a> </p>
                        </div>
                        @endforeach
                        <div class="row justify-content-end col-2">
                            <a class="btn btn-outline-primary" href="{{ route('user.complaint') }}">
                                ดูรายวิชาที่เลือก
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection