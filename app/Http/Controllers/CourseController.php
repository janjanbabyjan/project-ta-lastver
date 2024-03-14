<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function selectCourse()
    {
        $courses = Course::all();
        return view('selectSubject', compact('courses'));
    }
   
    public function userComplaint()
    {
        $courses = Course::all();
        return view('userComplaint', compact('courses'));
    }

    public function addToCart($id)
    {
        $course = Course::findOrFail($id);
        $course = Course::with('professor')->findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "course_code" => $course->course_code,
                "course_name_thai" => $course->course_name_thai,
                "course_name_english" => $course->course_name_english,
                "credits" => $course->credits,
                "year" => $course->year,
                "category_id" => $course->category_id,
                "branch_id" => $course->branch_id,
                "professor_id" => $course->professor_id,
                "created_at" => $course->created_at,
                "updated_at" => $course->updated_at,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'เพิ่มรายวิชาลงในตะกร้าเรียบร้อยแล้ว');
    }
     
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('message', 'อัพเดตรายวิชาในตะกร้าเรียบร้อยแล้ว');
        }
    }
   
    public function removeFromCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('message', 'ลบรายวิชาออกจากตะกร้าเรียบร้อยแล้ว');
        }
    }
}
