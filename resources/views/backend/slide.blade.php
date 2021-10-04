<div class="sidebar">
    <!-- start with head -->
    @php 
         $data = DB::table('settings')->orderBy('id','DESC')->first();
       
    @endphp
    <div class="head">
      <div class="logo">
        @if(isset($data))
        <img style="margin-left:-78px" width="200" height="200px" src="{{url($data->logo)}}" alt="">
        @endif
      </div>
      @if(isset($data))
      <a href="#" class="btn btn-danger">{{$data->company_name}}</a>
      @endif
    </div>
    <!-- end with head -->
    <!-- start the list -->
    <div id="list">
      <ul class="nav flex-column">
        
      
        @php
        $user_data = Auth::guard('admin')->user();
       
        @endphp
      @if($user_data->admin == 1)
      <li class="nav-item"><a href="{{route('Admin.deshboard')}}" class="nav-link" ><i class="fa fa-adjust"></i>Dashboard</a></li>
        <li class="nav-item"><a href="{{route('Admin.allcategory')}}" class="nav-link"><i class="fa fa-folder-open"></i>Course Department Setup</a></li>
        <li class="nav-item"><a href="{{route('Admin.allcourse')}}" class="nav-link"><i class="fa fa-inbox"></i>Batch Setup</a></li>

        <li class="nav-item"><a href="{{route('Admin.shiftbatch')}}" class="nav-link"><i class="fa fa-inbox"></i>Shift Batch</a></li>
        

        <li class="nav-item"><a href="#menu7" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-user-plus"></i>Student Management<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <li class="sub collapse" id="menu7">
            <a href="{{route('Admin.allstudent')}}" class="nav-link" data-parent="#menu7">All Student</a>
            <a href="{{route('Admin.studenthomework')}}" class="nav-link" data-parent="#menu7">Student Home work</a>
            <a href="{{route('Admin.studentfee')}}" class="nav-link" data-parent="#menu7">Student Fee Collection</a>
            <a href="{{route('Admin.todaydue')}}" class="nav-link" data-parent="#menu7">Today Deu payment Student</a>

        </li>


        <!-- <li class="nav-item"><a href="{{route('Admin.allstudent')}}" class="nav-link"><i class="fa fa-users"></i>Student</a></li> -->
        <!-- <li class="nav-item"><a href="{{route('Admin.studenthomework')}}" class="nav-link"><i class="fa fa-users"></i>Student Home work</a></li> -->
    <!-- <li class="nav-item"><a href="{{route('Admin.studentfee')}}" class="nav-link"><i class="fa fa-comments-dollar"></i>Student Fee Collection</a></li>
    <li class="nav-item"><a href="{{route('Admin.todaydue')}}" class="nav-link"><i class="fa fa-comments-dollar"></i>Today Deu payment Student</a></li> -->

        <li class="nav-item"><a href="#menu3" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-fire"></i>Expense<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <li class="sub collapse" id="menu3">
            <a href="{{route('Admin.expensename')}}" class="nav-link" data-parent="#menu3">Expense Name</a>
            <a href="{{route('Admin.expense')}}" class="nav-link" data-parent="#menu3">Expense Add</a>
            
        </li>

         <!-- employee  -->
        <li class="nav-item"><a href="#menu5" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-user-plus"></i>Employee<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <li class="sub collapse" id="menu5">
            <a href="{{route('Admin.allemployee')}}" class="nav-link" data-parent="#menu5">All Employee</a>
            <a href="{{route('Admin.employeepayment')}}" class="nav-link" data-parent="#menu5">Employee Payment History</a>
            
        </li>

        <!-- end Employee -->
     
        <li class="nav-item"><a href="#menu4" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-dollar-sign"></i>Earning<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <li class="sub collapse" id="menu4">
            <a href="{{route('Admin.earningname')}}" class="nav-link" data-parent="#menu4">Earning Name</a>
            <a href="{{route('Admin.earning')}}" class="nav-link" data-parent="#menu4">Earning</a>
            
        </li>

        <!-- <li class="nav-item"><a href="{{route('Admin.allemployee')}}" class="nav-link"><i class="fa fa-user-plus"></i>Employee</a></li> -->
        <li class="nav-item"><a href="#menu2" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-fire"></i>Report<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <li class="sub collapse" id="menu2">
            <a href="{{route('Admin.dailystatementdate')}}" class="nav-link" data-parent="#menu2">Daily Earninig statement</a>
            <a href="{{route('Admin.monthlystatementdate')}}" class="nav-link" data-parent="#menu2">Date wise Earninig Statement</a>
            <a href="{{route('Admin.expense')}}" class="nav-link" data-parent="#menu2">Yearly Earninig Statement</a>
            <a href="{{route('Admin.totalcostearn')}}" class="nav-link" data-parent="#menu2">Total Profite</a>
              
            <a href="{{route('Admin.datewiseexpanse')}}" class="nav-link" data-parent="#menu2">Date wise Earninig Statement</a>

            <a href="{{route('Admin.profitedaterange')}}" class="nav-link" data-parent="#menu2">Total Profite with Date range</a>
            <a href="{{route('Admin.earningnamewise')}}" class="nav-link" data-parent="#menu2">Name wise earning Statement</a>

        </li>

        <li class="nav-item"><a href="#menu8" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-dollar-sign"></i>Library Managment<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <li class="sub collapse" id="menu8">
            <a href="{{route('Admin.allborrowingbook')}}" class="nav-link" data-parent="#menu8">Borrowing Book</a>
            <a href="{{route('Admin.booksetup')}}" class="nav-link" data-parent="#menu8">All Book</a>
            
        </li>  

        <li class="nav-item"><a href="#menu9" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-dollar-sign"></i>Bank Management<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <li class="sub collapse" id="menu9">
            <a href="{{route('Admin.banknamesetup')}}" class="nav-link" data-parent="#menu9">Bank Name SetUp</a>
            <a href="{{route('Admin.branchname')}}" class="nav-link" data-parent="#menu9">Bank Branch Name</a>
            <a href="{{route('Admin.banksetup')}}" class="nav-link" data-parent="#menu9">Bank Setup</a>
            <a href="{{route('Admin.deposit')}}" class="nav-link" data-parent="#menu9">Deposit</a>
            
        </li>

        <!-- <li class="nav-item"><a href="{{route('Admin.employeepayment')}}" class="nav-link"><i class="fa fa-cog"></i>Employee Payment History</a></li> -->
        <!-- <li class="nav-item"><a href="{{route('Admin.totalcostearn')}}" class="nav-link"><i class="fa fa-cog"></i>Total Profite</a></li> -->
        <li class="nav-item"><a href="{{route('Admin.settings')}}" class="nav-link"><i class="fa fa-cog"></i>Settings</a></li>
        <li class="nav-item"><a href="{{route('Admin.branch')}}" class="nav-link"><i class="fa fa-cog"></i>Branch Setup</a></li>

        
        
        @endif

        @if($user_data->student == 1)
        <li class="nav-item"><a href="{{route('Admin.addwork')}}" class="nav-link"><i class="fa fa-inbox"></i>Add Wrok</a></li>
        <li class="nav-item"><a href="{{route('Admin.allworkstudent')}}" class="nav-link"><i class="fa fa-inbox"></i>Your  Wrok</a></li>
        <li class="nav-item"><a href="{{route('Admin.studentreport')}}" class="nav-link"><i class="fa fa-folder-open"></i>Report</a></li>
        @endif

        @if($user_data->employee == 1)  
        <li class="nav-item"><a href="{{route('Admin.addwork')}}" class="nav-link"><i class="fa fa-user"></i>Profile</a></li>
        <li class="nav-item"><a href="{{route('Admin.allworkstudent')}}" class="nav-link"><i class="fa fa-folder-open"></i>Report</a></li>
        <li class="nav-item"><a href="{{route('Admin.allworkstudent')}}" class="nav-link"><i class="fa fa-database"></i>Payment History</a></li>
        @endif
        <li class="nav-item"><a href="{{url('admin/adminlogout')}}" class="nav-link"><i class="fa fa-logout"></i>Logout</a></li>
      </ul>
    </div>
    <!-- end the list -->
  </div>
  