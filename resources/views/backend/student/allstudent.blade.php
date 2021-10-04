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
                <i class="fa fa-user-circle"></i><span> All Category</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; All Category
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                <a href="{{url('admin/addstudent')}}" class="btn btn-dark">+add new</a>

       
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
                        <th>Address</th>
                        <th>Fathers Name </th>
                        <th>Course Name</th>
                        <th>Due </th>
                        <th>status</th>
                        <th width="20%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php $i=1;
               
             @endphp
               @foreach($student as $row)
                  
   
                    <tr>
                        <td>{{$i++}}</td>
                         
                         <td>{{$row->name}}</td>
                          <td>{{$row->number}}</td>
                          <td>{{$row->address}}</td>
                          <td>{{$row->fathers_name}}</td>
                          <td>{{$row->course_name}}</td>
                          <td>
                         
                          {{$row->due}}
                          </td>
                          <td>
                           
                          @if($row->status==1)
                          <a href="{{url('admin/deactivestu/'.$row->id)}}" class="btn btn-success"> Active </a>
                          @else
                          <a href="{{url('admin/activestu/'.$row->id)}}" class="btn btn-danger"> Deactive </a>
                          @endif
                          </td>
                         <td > 
                        
                          <a href="{{url('admin/deletewithdraw/'.$row->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>

                          <a href="{{url('admin/studentedit/'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>

                          <a href="{{url('admin/studentform/'.$row->id)}}" target="_blank" class="btn btn-success"> <i class="fa fa-eye"></i> </a>

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
 