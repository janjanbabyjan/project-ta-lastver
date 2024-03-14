@extends('layouts.user-selectsubject')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">เลือกรายวิชาที่ต้องการสมัคร</div>
                <div class="card-body">
                    <div class=”panel-heading”>

                        <!-- @foreach($courses as $course)
                        <div class="row align-items-center p">
                            <p class="col-2">1</p>
                            <p class="col-2">{{ $course->course_code }}</p>
                            <p class="col-5">{{ $course->course_name_thai }}</p>
                            <p class="col-1"><strong></strong>{{ $course->year }}</p>
                            <p class="col-3">{{ $course->professor_id }}</p>
                            
                            
                        </div>
                        @endforeach -->

                        <table class="table">
                            <tr>
                                <th>รหัสนักศึกษา</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>รายวิชาที่สมัคร</th>
                                <th>วันที่สมัคร</th>
                                <th>สถานะการสมัคร</th>
                                <th>วันที่อนุมัติ</th>
                                <th>ความคิดเห็น</th>
                            </tr>
                            <!-- @foreach($courses as $course) -->
                            <tr>
                                <td>643021342-5</td>
                                <td>สุพัตรา แพงจันทร์</td>
                                <td>{{ $course->course_code }}</td>
                                <td>{{ $course->course_name_english }}</td>
                                <td>10-03-2567</td>
                                <td>อนุมติ</td>
                                <td></td>
                            </tr>
                            <!-- @endforeach -->
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