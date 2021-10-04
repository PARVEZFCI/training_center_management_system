<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\models\Course;
use App\models\Category;
use App\models\Admin\Admin; 
use App\models\Employee;
use DB;
use Auth;

class CourseController extends Controller
{
    public function allcourse(){
         
        $data['allcourse'] = DB::table('courses')
        ->join('categories','courses.category_id','categories.id')
        ->select('courses.*','categories.category_name')->get();
       return view('backend.course.allcourse',$data);
   }

   public function addcourse(){
     $data['teacher'] = Employee::all();
       $data['category'] = Category::all();
       return view('backend.course.addcourse',$data);
   }

   public function storecourse(Request $request){
       $branch_id = Auth::guard('admin')->user()->id;
      
          
       $data= [
         'branch_id'=>$branch_id,
         'course_teacher'=>$request->course_teacher,
         'category_id'=>$request->category_id,
         'course_name' =>$request->course_name,
         'course_fee' =>$request->course_fee,
         'discount' =>$request->discount,
         'starting_date'=>$request->starting_date
       ];
       Course::create($data); 
       $flashdata = ['class'=>'success', 'message'=>"Data Insert Successfull "];
       return redirect()->back()->with($flashdata);
   }

   public function coursedelete($id){
       Course::find($id)->delete();
       $flashdata = ['class'=>'success', 'message'=>"Course delete Successfull "];
       return redirect()->back()->with($flashdata);
   }

   public function editcourse($id){
     $data['teacher'] = DB::table('employees')->orderBy('id','DESC')->get();
       $data['category'] = DB::table('categories')->get();
       $data['course'] = DB::table('courses')
       ->join('categories','courses.category_id','categories.id')
       ->join('employees','courses.course_teacher','employees.id')
       ->select('categories.category_name','courses.*','employees.name')
       ->where('courses.id',$id)->first();
       return view('backend.course.editcourse',$data);
   }
   public function updatecourse(Request $request){
    
    $data= [
         
         'course_teacher'=>$request->course_teacher,
        'category_id'=>$request->category_id,
        'course_name' =>$request->course_name,
        'course_fee' =>$request->course_fee,
        'discount' =>$request->discount,
        'starting_date'=>$request->starting_date
      ];

      Course::where('id',$request->id)->update($data);
        // DB::table('courses')->where('id',$request->id)->update($data); 

      $flashdata = ['class'=>'success', 'message'=>"Data Insert Successfull "];
      return redirect()->back()->with($flashdata);

   }

  public function coursestatusde($id){

    $data = [

        'status'=>0
    ];

    DB::table('courses')->where('id',$id)->update($data);
    return redirect()->back();
  }

  public function coursestatusac($id){
    $data = [

        'status'=>1
    ];

    DB::table('courses')->where('id',$id)->update($data);
    return redirect()->back();

  }

  public function employeemoneyhistory($id){

    $ck = $data['course'] = DB::table('courses')->where('id',$id)->first();

    $data['employee'] = DB::table('employees')->where('id',$ck->course_teacher)->first();

    $data['history'] = DB::table('expenses')->where('course_id',$id)->get();
    $data['total_asset'] = DB::table('earnings')->where('course_id',$id)->sum('amount');

    return view('backend.course.paymenthistory',$data);
  }


}
