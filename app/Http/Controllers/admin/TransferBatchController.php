<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Shiftbatch;
use App\models\Shiftbatchattandance;
use Auth;
use DB;

class TransferBatchController extends Controller
{
    public function shiftbatch(){
        $data['Shiftbatch'] = Shiftbatch::all();
        return view('backend.shiftbatch.shiftbatch',$data);
    }
    public function addshiftbatch(){
        return view('backend.shiftbatch.addshiftbatch');
    }

    public function storeshiftbatch(Request $request){

        $branch_id = Auth::guard('admin')->user()->id;

        $dataInput = [

            'branch_id'=>$branch_id,
            'batch_name'=>$request->batch_name
        ];

        Shiftbatch::create($dataInput);


        $flashdata = ['class'=>'success', 'message'=>"Data Insert Successfull "];
      return redirect()->back()->with($flashdata);

    }
    public function shiftbatchattendance($id){

        $data['student'] = DB::table('students')->where('shift_batch_id',$id)->get();
        $data['course'] = DB::table('shiftbatches')->where('id',$id)->first();
        $data['Shiftbatch'] = Shiftbatch::get()->where('status',0);
       $data['ck']= Shiftbatchattandance::get()->unique('date')->where('course_id',$id)->count();
        return view('backend.shiftbatch.shiftbatchattendance',$data);

    }
}
