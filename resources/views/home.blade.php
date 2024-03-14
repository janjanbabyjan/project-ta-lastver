@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="padding:50px;">
                <h3>ยื่นคำร้องสมัครผู้ช่วยสอน</h3>
                <form action="/submit_application" method="post" enctype="multipart/form-data">
                    <label for="course_id">รายวิชาที่ต้องการสมัคร</label>
                    <select name="course_id" id="course_id" class="form-control">
                        <option value="">เลือกรายวิชาที่ต้องการสมัคร</option>
                        <option value="1">CS - Object Oriented Programming</option>
                        <option value="2">CS - Database Management System and Database Design</option>
                        <option value="3">IT - Introduction to Computer Networking</option>
                        <option value="3">IT - Introduction to Computer Organization and Architecture</option>
                    </select>
                    <br>
                    <br>
                    <input type="radio" name="applicant_type" value="existing" id="existing_applicant">
                    <label for="existing_applicant">ผู้สมัครรายเดิม</label>
                    <br>
                    <input type="radio" name="applicant_type" value="new" id="new_applicant">
                    <label for="new_applicant">ผู้สมัครรายใหม่</label>
                    <br>
                    <br>
                    <label for="schedule_file">อัพโหลดตารางเรียน</label><br>
                    <input type="file" name="schedule_file" id="schedule_file" class="form-control-file">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">ยืนยันการสมัคร</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
