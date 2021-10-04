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
        
<br>
      

        <!-- <div class="col-md-2"></div> -->
<br>

        <div class="col-md-12">

        <div class="card bg-white">
        
      		<div class="card-header border-0  text-white bg-info" >
                <i class="fa fa-user-circle"></i><span> All Report</span>
            </div>
            
          <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; Your Activity report
              </div> 


              <div style="display:inline-block;float: right; padding-top:5px;">
              
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered ">
              <thead>
                    <tr>
                      
                        <th> Name  </th>
                        <th>Due balance  </th>
                        <th>Total Present</th>
                        <th>Total Absent</th>
                        <th>Total Class</th>
                        <th width="" class="text-center">Status</th>
                    </tr>
                </thead>
               
                <tbody>
                	
                    <tr>
                      <td>{{$student->name}}</td>
                        <td>{{$payment_history}} Taka</td>
                        
                        <td>{{$present}}</td>
                        <td>{{$absent}}</td>
                         <td >
                           @php 
                         $all =   ($present * 100)/$ck;
                           
                         $taka = number_format($all, 2);
                           @endphp 
                          {{$ck}}
                          </td>
                          <td>{{$taka}}%</td>
                    </tr>

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

  <script type="text/javascript">
    
  </script>


  @endsection
 