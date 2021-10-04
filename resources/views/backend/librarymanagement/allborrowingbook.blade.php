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
                <i class="fa fa-user-circle"></i><span> All Borrowing Book</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; All Borrowing Book
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                <a href="{{url('admin/Borrowing_books')}}" class="btn btn-dark">+add new</a>

       
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <br>
              <table id="example" class="table table-bordered text-center">
              <thead>
                    <tr>
                        <th width="">SN</th>
                        <th>Date</th>
                        <th>Student Name</th>
                        <th>Book Name </th>
                        <th>Return Date</th>
                        
                        <th width="" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php $i=1;
               
             @endphp
               @foreach($Borrowingbook as $row)
                  
   
                    <tr>
                        <td>{{$i++}}</td>
                       
                        <td>{{$row->date}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->book_name}}</td>
                        <td>{{$row->submission_date}}</td>

           
                         <td > 
                        
                         @if($row->status==0)
                          <a href="{{url('admin/bookrcv/'.$row->id)}}" class="btn btn-danger"> active </a>
                          @else
                         
                          <span style="color:red">Return</span>
                          @endif
                          <!-- <a href="{{url('admin/editWithdraw/'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                          <a href="{{url('admin/moneyreceipt/'.$row->id)}}" target="_blank" class="btn btn-info"> <i class="fa fa-print"></i> </a> -->

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
 