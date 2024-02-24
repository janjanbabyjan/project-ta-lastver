<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Book;
 
class BookController extends Controller
{
    public function selectSubject()
    {
        $books = Book::all();
        return view('selectSubject', compact('books'));
    }
   
    public function userComplaint()
    {
        return view('userComplaint');
    }
    public function addBooktoCart($id)
    {
        $book = Book::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "subject_id" => $book->subject_id,
                "name" => $book->name,
                "quantity" => 1,
                "semester_id" => $book->semester_id,
                "author" => $book->author,
                "price" => $book->price,
                "image" => $book->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('เลือกวิชาที่ต้องการสมัครเรียบร้อย!');
    }
     
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('อัพเดตวิชาที่ต้องการสมัครแล้ว!');
        }
    }
   
    public function deleteProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('ลบวิชาที่ต้องการสมัครแล้ว!');
        }
    }
}