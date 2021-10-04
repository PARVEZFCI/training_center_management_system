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
                <i class="fa fa-user-circle"></i><span> Today Payment</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; Today Due payment 
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
       
              </div> 

            </div>
            <div class="card-body">
               <br>
              <table id="example"   style="width:100%">
              <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Student Name</th>
                        <th>Number</th>
                        
                        <th>Batch Name</th>
                        <th>Course Fee</th>
                        <th>Discount Fee</th>
                        <th>Total Pay</th>
                        <th>Due </th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                	@php $i=1;
               
             @endphp
               @foreach($dueinfo as $row)
                    
               @php
               
               $total_pay = DB::table('earnings')->where('student_id',$row->student_id)->sum('amount');
                 
               @endphp

   
                    <tr>
                        <td>{{$i++}}</td>
                         
                         <td>{{$row->name}}</td>
                          <td>{{$row->number}}</td>
                       
                          <td>{{$row->course_name}}</td>
                         <td>{{$row->course_fee}}</td>
                         <td>{{$row->fee}}</td>
                          <td>{{$total_pay}}</td>
                          <td>
                         
                          {{$row->due}}
                          </td>
                          <td>
                          <a href="{{url('admin/studentid/'.$row->id)}}" target="_blank" class="btn btn-info"> <i class="fa fa-id-card"></i> </a>
                          </td>
                         
                    </tr>
                      
                @endforeach
                </tbody>
            </table>
            
            <!-- end table -->
          
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
 