<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bankname;
use App\Models\Banksetup;
use App\Models\Bankbranch;
use App\Models\Deposit;
use DB;

class BankController extends Controller
{
    public function banknamesetup(){

      $data['bankname'] = Bankname::all();

        return view('backend.bank.banknamesetup',$data);
    }

  public function addbanknamesetup(){
      return view('backend.bank.addbanknamesetup');
  }

  public function storebanknamesetup(Request $request){
      $inputData = ['bank_name'=>$request->bank_name];

      Bankname::create($inputData);

      $flashdata = ['class'=>'success', 'message'=>"Data Insert Successfull "];
      return redirect()->back()->with($flashdata);
  }

  public function bankname_delete($id){

    Bankname::where('id',$id)->delete();

    $flashdata = ['class'=>'success', 'message'=>"Delete Successfull "];
      return redirect()->back()->with($flashdata);
  }


  public function editbankname($id){

     $data['bankname'] = Bankname::where('id',$id)->first();

    return view('backend.bank.editbanknamesetup',$data);
  }

  public function updatebanknamesetup(Request $request){

    $inputData = ['bank_name'=>$request->bank_name];

      Bankname::where('id',$request->id)->update($inputData);

      $flashdata = ['class'=>'success', 'message'=>"Data Update Successfull "];
      return redirect()->back()->with($flashdata);
  
  }

  public function banksetup(){

    $data['banksetup'] = DB::table('banksetups')
    ->join('banknames','banksetups.bank_id','banknames.id')
    ->join('bankbranches','banksetups.branch_id','bankbranches.id')
    ->select('banknames.bank_name','banksetups.*','bankbranches.branch_name')->get();
      return view('backend.bank.banksetup',$data);
  }

  public function addbanksetup(){
    $data['bankname'] = Bankname::all();
    $data['bankbranch'] = Bankbranch::all();
    return view('backend.bank.addbanksetup',$data);
  }

  public function storebanksetup(Request $request){
    
    $dataInput = [
      'bank_id'=>$request->bank_id,
      'branch_id'=>$request->branch_id,
      'account_number'=>$request->account_number,
      'reg_no'=>$request->reg_no,
      'amount'=>$request->amount
    ];

    Banksetup::create($dataInput);

    $flashdata = ['class'=>'success', 'message'=>"Data Insert  Successfull "];
      return redirect()->back()->with($flashdata);
  }

  public function editbank($id){
    $data['bankname'] = Bankname::all();
    $data['bankdata']= DB::table('banksetups')
    ->join('banknames','banksetups.bank_id','banknames.id')
    ->select('banknames.bank_name','banksetups.*')
    ->where('banksetups.id',$id)->first();
    return view('backend.bank.editbank',$data);
  }

  public function branchname(){
     $data['bankbranch'] = Bankbranch::all();
    return view('backend.bank.branchname',$data);
  } 

  public function addbranchname(){
    return view('backend.bank.addbankbranch');
  }

  public function storebranchname(Request $request){

    $dataInput = [
      'branch_name'=>$request->branch_name
    ];

    Bankbranch::create($dataInput);

    $flashdata = ['class'=>'success', 'message'=>"Data Insert  Successfull "];
      return redirect()->back()->with($flashdata);

    
  }

  public function deposit(){

     $data['deposit'] = Deposit::all();

    return view('backend.bank.deposit',$data);
  }

  public function adddeposit(){
    $data['banksetup'] = DB::table('banksetups')
    ->join('banknames','banksetups.bank_id','banknames.id')
    ->join('bankbranches','banksetups.branch_id','bankbranches.id')
    ->select('banknames.bank_name','banksetups.*','bankbranches.branch_name')->get();
    return view('backend.bank.adddeposit',$data);
  }

  public function sotredeposit(Request $request)
  {
    $data =  DB::table('banksetups')->where('id',$request->bank_account)->first();
    $dataInput = [
      'bank_account'=>$request->bank_account,
      'amount'=>$request->amount,
      'date'=>$request->date
    ];

    $updateData = [
      'amount'=>$data->amount + $request->amount
    ];

    Deposit::create($dataInput);


   
    DB::table('banksetups')->where('id',$request->bank_account)->update($updateData);

    $flashdata = ['class'=>'success', 'message'=>"Data Insert  Successfull "];
      return redirect()->back()->with($flashdata);

  }


}
