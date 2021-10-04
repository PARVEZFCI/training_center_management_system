<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Branch;
use DB;


class homeController extends Controller
{
    public function home(){
    	return view('frontend.user_layout');
    }

    public function deshboard(){

    
        
    	return view('backend.deshboard');
    }
    public function adminlogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
    public function settings(){
        $data['settings'] = DB::table('settings')->orderBy('id','DESC')->first();
        return view('backend.settings.settings',$data);
    }

    public function storesettings(Request $request){
        $que = DB::table('settings')->orderBy('id','DESC')->first();
        //$old_image = $que->logo;

        $count = DB::table('settings')->count();
        if($count>0){

            if($photo = $request->file('logo')){

                request()->validate([
                    'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]);
    
    
                $photo = time().'.'.request()->logo->getClientOriginalExtension();
                request()->logo->move(public_path('/backend/img/logo/'), $photo);
                 
               
    
                 $data['logo'] = 'public/backend/img/logo/'.$photo;
                // unlink($old_image);
            }
            // company_name``email``phone``address``logo``favicon
            $data['company_name'] = $request->company_name;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['address'] = $request->address;
            $data['email'] = $request->email;
            $data['email'] = $request->email;

            $insert = DB::table('settings')->update($data);
            
            $flashdata = ['class'=>'success', 'message'=>"settings Update Successfull "];
        return redirect()->back()->with($flashdata);

        }else{

            if($photo = $request->file('logo')){

                request()->validate([
                    'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]);
    
    
                $photo = time().'.'.request()->logo->getClientOriginalExtension();
                request()->logo->move(public_path('/backend/img/logo/'), $photo);
                 
                // dd($photo);
    
                 $data['logo'] = 'public/backend/img/logo/'.$photo;
            }
           
            $data['company_name'] = $request->company_name;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['address'] = $request->address;
            $data['email'] = $request->email;
            $data['email'] = $request->email;

            $insert = DB::table('settings')->insert($data);

            $flashdata = ['class'=>'success', 'message'=>"Settings Insert Successfull "];
            return redirect()->back()->with($flashdata);
        }
    }

    public function branch(){
        $data['branch'] = Branch::all();
        return view('backend.branch.branch',$data);
    }

    public function addbranch(){
        return view('backend.branch.addbranch');
    }

    public function storebranch(Request $request){
        $dataInput = [
            'branch_name'=>$request->branch_name
        ];

        Branch::create($dataInput);
        
        $flashdata = ['class'=>'success', 'message'=>"Settings Insert Successfull "];
        return redirect()->back()->with($flashdata);

    }

    public function editbranch($id){
        $data['branch'] = DB::table('branches')->where('id',$id)->first();
        return view('backend.branch.edieditbrancht',$data);
    }

}
