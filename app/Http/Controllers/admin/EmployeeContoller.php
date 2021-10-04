<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;

class EmployeeContoller extends Controller
{
    public function allemployee(){

        $data['employees'] = DB::table('employees')->orderBy('id','ASC')->get();

        return view('backend.employee.allemployee',$data);
    }

    public function addemployee(){
        return view('backend.employee.addemployee');
    }

    public function storeemployee(Request $request){
        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");

        $branch_id = Auth::guard('admin')->user()->id;
     if($photo = $request->file('image')){

        // request()->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,zip',
        // ]);
        $photo = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('/backend/employeeimage/'), $photo);   
     
        $data['image'] = 'public/backend/employeeimage/'.$photo;
    }

    if($nid = $request->file('nid')){
        request()->validate([
            'nid' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $nid = time().'.'.request()->nid->getClientOriginalExtension();
        request()->nid->move(public_path('/backend/employee_nid/'), $nid);
         
     

         $data['nid'] = 'public/backend/employee_nid/'.$nid;
    }
    
    if($certificate = $request->file('certificate')){

        request()->validate([
            'certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $certificate = time().'.'.request()->certificate->getClientOriginalExtension();
        request()->certificate->move(public_path('/backend/employee_certificate/'), $certificate);
         
       

         $data['certificate'] = 'public/backend/employee_certificate/'.$certificate;
    }

    if($certificate = $request->file('r_nid')){

        request()->validate([
            'r_nid' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $r_nid = time().'.'.request()->r_nid->getClientOriginalExtension();
        request()->r_nid->move(public_path('/backend/r_nid/'), $r_nid);
         
       

         $data['r_nid'] = 'public/backend/r_nid/'.$r_nid;
    }
   
    $for_stu = DB::table('students')
        ->orderBy('id','desc')
        ->first();

        $data['branch_id'] = $branch_id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['number'] = $request->number;
        $data['address'] = $request->address;
        $data['designation'] = $request->designation;
   
        $data['joining_date'] = $request->joining_date;
        $data['f_name'] = $request->f_name;
        $data['m_name'] = $request->m_name;
        $data['r_name'] = $request->r_name;
        $data['payment_status'] = $request->payment_status;
       
        // $data['session'] = $request->session;
        // $data['b_group'] = $request->b_group;
        // $data['special_discount'] = $request->special_discount;
    	
    	
 DB::table('employees')->insert($data);


 $userData = [
    'name'=>$request->name,
    'email'=>$request->email,
    'address'=>$request->address,
    'password'=>Hash::make($request->password),
    'employee'=>1
];

DB::table('admins')->insert($userData);


 $flashdata = ['class'=>'success', 'message'=>"Data Insert Successfull "];
        return redirect()->back()->with($flashdata);

    }

    public function money_add($id){

        date_default_timezone_set('Asia/Dhaka');
        $date = date("Y-m-d");
        
        $course_data = DB::table('courses')->where('id',$id)->first();
        $dataup = ['money_status'=>0];
        DB::table('courses')->where('id',$id)->update($dataup);

        $data_que = DB::table('earnings')->where('course_id',$id)->sum('amount');
        
        $employee = DB::table('employees')->where('id',$course_data->course_teacher)->first();

        $add_amount = ($data_que * 40)/100;

        $update = [
            'balance' => $add_amount + $employee->balance
        ];

        DB::table('employees')->where('id',$employee->id)->update($update);

        $insert = [
            'employee_id'=>$course_data->course_teacher,
            'course_id'=>$id,
            'payment'=>$add_amount,
            'date'=>$date

        ];

        DB::table('payment_history')->insert($insert);

        return redirect()->back();

    }

    public function employee_data(Request $request){

        $employee_data = DB::table('employees')->where('id',$request->cat_id)->first();

        

            $data = DB::table('courses')->where('course_teacher',$request->cat_id)->get();
            return json_encode($data);
        
        
    }

    public function employeepayment(){
        $data['employee'] = DB::table('employees')->orderBy('id','DESC')->get();
        return view('backend.employee.employeedateselect',$data);
    }

    public function storeemployeepayment(Request $request){
        
        $from_date = $request->f_date;
        $to_date = $request->t_date;

        $data['expenses'] = DB::table('expenses')->where('employee_id',$request->id)->whereBetween('date', [$from_date, $to_date])->get();

        return view('backend.employee.viewemployeepayment',$data);


        

    }


}
