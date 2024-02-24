@extends('layouts.shop')

@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>รหัสวิชา</th>
            <th>ชื่อวิชา</th>
            <th>ปีการศึกษา</th>
            <th>อาจารย์ผู้สอน</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)

        <tr rowId="{{ $id }}">
            <td>{{ $details['subject_id'] }}</td>
            <td data-th="Price">{{ $details['name'] }}</td>
            <td>{{ $details['semester_id'] }}</td>
            <td>{{ $details['author'] }}</td>


            <td class="actions">
                <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/home') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i>เลือกวิชา</a>
                <button class="btn btn-danger">อัพโหลดเอกสาร</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.sopping.cart') }}',
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

    $delete-product").click(function (e) {
        e.preventDefault();

         ele = $(this);

        if nfirm("Do y ou really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                   id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection