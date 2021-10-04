@extends('backend.admin-layout')
@section('title', 'Dashboard - ')
@section('content')
<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">


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

<?php if (session('message')): ?>
        <div class="col-lg-12">
            <div class="alert alert-{{session('class')}} alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
              <div class="alert-message"><span>{{session('message')}}</span></div>
            </div>
        </div>
        <?php endif; ?>

        <div class="col-md-12">

        <div class="card bg-white">
        
      		<div class="card-header border-0  text-white bg-info" >
                <i class="fa fa-user-circle"></i><span> All Branch</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; All Branch
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                <a href="{{url('admin/addbranch')}}" class="btn btn-dark">+add new</a>

       
              </div> 

            </div>
            <div class="card-body">
              <br>
              <div class="table-responsive">
              <table id="example" class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th width="5%">SN</th>
                        
                        <th>Branch Name</th>
                        <th width="40%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php 
                  $i =1;      
             @endphp
               @foreach($branch as $row)
                   
              
   
                    <tr>
                        <td>{{$i++}}</td>
                        <td class="text-left">{{$row->branch_name}}</td>                      
                         <td > 
                         
                         <a href="{{url('admin/editbranch/'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                       

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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>


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
 