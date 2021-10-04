<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\models\Attendance;

class AttendanceController extends Controller
{
    public function attendance($id){
        $data['student'] = DB::table('students')->where('course_id',$id)->get();
        $data['course'] = DB::table('courses')->where('id',$id)->first();
       $data['ck']= Attendance::get()->unique('date')->where('course_id',$id)->count();
        return view('backend.attendance.attendance',$data);
    }

    public function storeattendance(Request $request){

        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");
        $check = DB::table('attendances')->where('course_id',$request->course_id)->where('date',$date)->get();
        if(count($check)==0){
        
        foreach ($request->attendance as $key => $unit) {

            Attendance::create([
               'course_id'=>$request->course_id,
               'student_id' => $request->id[$key],
               'attendance' => $request->attendance[$key],
               'date' =>$date,
               'created_at' => now() // this could be in model events / observers
           ]);
   
   
           }
           $flashdata = ['class'=>'success', 'message'=>" attendance submited successfully"];
           return \redirect()->back()->with($flashdata);

        }else{

            $flashdata = ['class'=>'success', 'message'=>"sorry attendance already submited "];
           return redirect()->back()->with($flashdata);

        }
    }
}
