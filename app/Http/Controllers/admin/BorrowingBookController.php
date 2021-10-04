<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Borrowingbook;
use DB;
use App\Models\Booksetup;

class BorrowingBookController extends Controller
{
    
    public function booksetup(){
        $data['booksetup'] = Booksetup::all();
        return view('backend.librarymanagement.booksetup',$data); 
    }

    public function addbooksetup(){
        return view('backend.librarymanagement.addbooksetup');
    }

    public function allborrowingbook(){

        $data['Borrowingbook'] = DB::table('borrowingbooks')
        ->join('students','borrowingbooks.student_id','students.id')
        ->join('booksetups','borrowingbooks.book_id','booksetups.id')
        ->select('borrowingbooks.*','students.name','booksetups.book_name')->orderBy('status','ASC')->get();
         
        return view('backend.librarymanagement.allborrowingbook',$data);

    }
    
    public function Borrowing_books(){
      
        $data['book'] = DB::table('booksetups')->get();

        $data['student'] = DB::table('students')->orderBy('id','DESC')->get();

        $data['borrowingbooks'] = DB::table('borrowingbooks')
        
        ->orderBy('id','DESC')->get();
        
        return view('backend.librarymanagement.borrowingbook',$data);

    }

    public function storeborrowingbook(Request $request){

        date_default_timezone_set('Asia/Dhaka');
        $date = date("Y-m-d");
        $inputData = [
            'student_id'=>$request->student_id,
            'book_id'=>$request->book_id,
            'submission_date'=>$request->submission_date,
            'date'=>$date
        ];
        Borrowingbook::create($inputData);
        $flashdata = ['class'=>'success', 'message'=>"Data Insert Successfull "];
      return redirect()->back()->with($flashdata);


    }

    public function bookrcv($id){
        $updateData = [
            'status'=>1
        ];

        Borrowingbook::where('id',$id)->update($updateData);

      
      return redirect()->back();
    }
   
    public function storebooksetup(Request $request){

        $dataInput = [
            'book_name'=>$request->book_name,
            'writer_name'=>$request->writer_name,
            'publisher_name'=>$request->publisher_name,
            'price'=>$request->price
        ];


        Booksetup::create($dataInput);

        $flashdata = ['class'=>'success', 'message'=>"Data Insert Successfull "];
      return redirect()->back()->with($flashdata);
        
    }

    public function book_details(Request $request){

     $data = DB::table('booksetups')->where('id',$request->book_id)->first();

        return json_encode($data);

    }

    public function branchname(){
        
        return view('backend.bank.branchname',$data);
    }

    
}
