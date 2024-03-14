@extends('layouts.user')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <h1>ยื่นคำร้องสมัครผู้ช่วยสอน</h1>
  <form action="/submit_application" method="post" enctype="multipart/form-data">
    <label for="course_id">รายวิชาที่ต้องการสมัคร</label>
    <select name="course_id" id="course_id">
      <option value="">เลือกรายวิชาที่ต้องการสมัคร</option>
      <option value="1">วิชา 1</option>
      <option value="2">วิชา 2</option>
      <option value="3">วิชา 3</option>
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
    <label for="schedule_file">อัพโหลดตารางเรียน</label>
    <input type="file" name="schedule_file" id="schedule_file">
    <br>
    <br>
    <button type="submit">ยืนยันการสมัคร</button>
  </form>
            </div>
        </div>
    </div>
</div>
@endsection