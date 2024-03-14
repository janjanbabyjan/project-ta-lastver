@extends('layouts.user-complaint')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>ข้อมูลรายวิชาผู้ช่วยสอน</h4></div>
                <div class="card-body">
                    <div class=”panel-heading”>


                        <table class="table">
                            <tr>
                                <th>รหัสวิชา</th>
                                <th>รายวิชา</th>
                                <th>ปีการศึกษา</th>
                                <th>อาจารย์ประจำวิชา</th>
                                <th>สาขา</th>
                                <th>โครงการ</th>
                                <th>ชั้นปี</th>
                                <th></th>
                            </tr>
                             @foreach($courses as $course)
                             
                                <!-- <td>643021342-5</td>
                                <td>สุพัตรา แพงจันทร์</td>
                                <td>{{ $course->course_code }} {{ $course->course_name_english }}</td>
                                <td>10-03-2567</td>
                                <td>อนุมติ</td>
                                <td>12-03-2567</td>
                                <td></td> -->


                                <td>{{ $course->course_code }} </td>
                                <td>{{ $course->course_name_english }}</td>
                                <td>{{$course->year}}</td>
                                <td>{{$course->professor_id}}</td>
                                <td>{{$course->branch_id}}</td>
                                <td>ปกติ</td>
                                <td>3</td>
                                <th><a href="">รายละเอียด</a></th>
                            </tr>
                            @endforeach
                        </table>
                        <!-- <div class="row justify-content-end col-2">
                            <a class="btn btn-outline-primary" href="{{ route('user.complaint') }}">
                                ดูรายวิชาที่เลือก
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection