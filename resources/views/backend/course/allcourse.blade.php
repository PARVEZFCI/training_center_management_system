@extends('backend.admin-layout')
@section('title', 'Dashboard - ')
@section('content')
@php

@endphp
<!-- <a href="{{route('Admin.home')}}">Home</a> -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- /.content-header -->
    <!-- Main content -->
    
  
      <div class="container-fluid">

        <!-- <div class="col-md-2"></div> -->
<br>
        <div class="col-md-12">

        <div class="card bg-white">
        
      		<div class="card-header border-0  text-white bg-info" >
                <i class="fa fa-user-circle"></i><span> All Batch</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; All Batch
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                <a href="{{url('admin/addcourse')}}" class="btn btn-dark">+add new</a>

       
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <br>
              <table id="example" class="table table-bordered text-center">
              <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Course Department Name</th>
                        <th>Batch Name</th>
                        <th>Course Fee</th> 
                        <th>Discount </th>
                        <th>Total Collection </th>
                        <th>Starting Date</th>
                        <th>Status</th>
                        <th width="20%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php $i=1;
               
             @endphp
               @foreach($allcourse as $row)
                  @php 

                   $total_collection = DB::table('earnings')->where('course_id',$row->id)->sum('amount');

                   $employee = DB::table('employees')->where('id',$row->course_teacher)->first();
                
                  @endphp
   
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->category_name}}</td>
                        <td>{{$row->course_name}}</td>
                        <td>{{$row->course_fee}}</td>
                        <td>{{$row->discount}}</td>
                        <td>{{ $total_collection }}</td>
                        <td>{{$row->starting_date}}</td>
                        <td>
                          @if($row->status==1)
                          <a href="{{url('admin/coursestatusde/'.$row->id)}}" class="btn btn-success">Active</a>
                          @else
                          <a href="{{url('admin/coursestatusac/'.$row->id)}}" class="btn btn-danger">DeActive</a>
                          @endif
                        </td>
                         <td> 
                         @php

                          $data = DB::table('students')->where('course_id',$row->id)->get();
                          $cou = count($data);
                      @endphp
                      @if($cou!=0)
                      @else
                        <a href="{{url('admin/coursedelete/'.$row->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                        @endif
                          <a href="{{url('admin/editcourse/'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                          <a href="{{url('admin/attendance/'.$row->id)}}" class="btn btn-info"> <i class="fa fa-clock"></i> </a>
                          &nbsp;
                          @if($employee->payment_status==1 && $row->money_status==1)
                          <a href="{{url('admin/money_add/'.$row->id)}}" class="btn btn-success">  <i class="fa fa-money-bill-alt"></i> <i class="fa fa-money" aria-hidden="true"></i> </a>
                          @endif

                          <a href="{{url('admin/employeemoneyhistory/'.$row->id)}}" class="btn btn-success">money status</a>


                          </td> 
                    </tr>
                    

                @endforeach
                </tbody>
            </table>
            </div>
            </div>
          </div>
               
          </div>
         
        </div>
        

      

      </div><!-- /.container-fluid -->

    <!-- /.content -->
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script> -->


  <script type="text/javascript">

    //   $(document).ready( function (){
    //     $('#example').DataTable( {
    //     dom: 'Bfrtip',
    //     buttons: [
    //         'print'
    //     ]
    // });
    //   });

    $(document).ready(function(){
      $("#example").DataTable();
    })

    </script>


  @endsection
 