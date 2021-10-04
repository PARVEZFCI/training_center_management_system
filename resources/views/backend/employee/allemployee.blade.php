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
                <i class="fa fa-user-circle"></i><span> All Employee</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; All Employee
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                <a href="{{url('admin/addemployee')}}" class="btn btn-dark">+add new</a>

       
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered text-center">
              <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Employee Name</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Fathers Name </th>
                        <th>Designation</th>
                        <th>Salary </th>
                        <th>Image </th>
                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                  $i=1;
                  @endphp
            @foreach($employees as $row)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->number}}</td>
                 
                  <td>{{$row->address}}</td>
                  <td>{{$row->f_name}}</td>
                  <td>{{$row->designation}}</td>
                  <td>{{$row->salary}}</td>
                  <td><img height="70" width="100" src="{{url($row->image)}}"> </td>
                  <td>
                    <a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> </a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
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

  @endsection
 