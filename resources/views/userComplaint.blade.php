@extends('layouts.user-selectsubject')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel-heading">
                        <div class="row align-items-center p">
                            <p class="col-2">รหัสวิชา</p>
                            <p class="col-4">ชื่อวิชา</p>
                            <p class="col-2">ปีการศึกษา</p>
                            <p class="col-3">อาจารย์ผู้สอน</p>
                            <p class="col-1"></p>
                        </div>
                        @php $total = 0 @endphp
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <div class="row align-items-center p">
                            <p class="col-2">{{ $details['course_code'] }}</p>
                            <p class="col-4">{{ $details['course_name_thai'] }}</p>
                            <p class="col-2">{{ $details['year'] }}</p>
                            <p class="col-3">{{ $details['professor_id'] }}</p>
                            <a class="btn btn-outline-danger btn-sm delete-product col-1"><i class="fa fa-trash-o"></i></a>
                        </div>
                        @endforeach
                        @endif
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-2">
                            <a href="{{ url('/user-selectsubject') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i>เลือกวิชา</a>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-2"></div>
                        <div class="col-3">
                            <button class="btn btn-info">อัพโหลดเอกสาร</button>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-success">บันทึก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">


    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.shopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("rowId"),
            },
            success: function (response) {
                       .location.reload();
        }
        });
    });

    $(".delete-product").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if (confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("div.row").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
