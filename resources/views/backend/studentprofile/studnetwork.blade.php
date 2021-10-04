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

                <h3 style="color:red">
               
                Emergency HelpLine (24/7) Mobile : 01839424242 </h3>
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                <a href="{{url('admin/addcourse')}}" class="btn btn-dark">+add new</a>

       
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered text-center">
              <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Date </th>
                         <th>Class No</th>
                         <th>Video</th>
                         <th>Zip File</th>
                         <th>Image</th> 

                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php $i=1;
               
             @endphp
               @foreach($stuwork as $row)
                  
   
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->date}}</td>
                        <td>{{$row->class_no}}</td>
                        <td>@if($row->video)
                         <video width="220" height="140" controls>
                            <source src="{{url($row->video)}}" type="video/mp4">
                            
                         </video>
                              @endif </td>
                        <td>
                            @if($row->zipfile)
                            {{$row->zipfile}}
                            @endif
                        </td>
                        <td>
                            @if(isset($row->work))
                               <img height="140" width="140" src="{{url($row->work)}}"> 
                            @endif
                        </td>

           
                         <td > 
                        
                          <a href="{{url('admin/deletewithdraw/'.$row->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                          <a href="{{url('admin/editWithdraw/'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                  

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

  <script type="text/javascript">
    
  </script>


  @endsection
 