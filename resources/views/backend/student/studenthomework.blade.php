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
      <?php if (session('message')): ?>
        <div class="col-lg-12">
            <div class="alert alert-{{session('class')}} alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
              <div class="alert-message"><span>{{session('message')}}</span></div>
            </div>
        </div>
        <?php endif; ?>

        <!-- <div class="col-md-2"></div> -->
<br>
        <div class="col-md-12">

        <div class="card bg-white">
        
      		<div class="card-header border-0  text-white bg-info" >
                <i class="fa fa-user-circle"></i><span> Find student work</span>
            </div>

            <div class="card">
            <div class="card-header bg-white">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; Student work
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                

       
              </div> 

            </div>
            <div class="card-body">


            <form action="{{url('admin/studentworkdetails')}}" id="qcat" method="post" enctype="multipart/form-data">
              @csrf

              <div class="row">

                <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Select Student</label>
                          <select class="form-control single-select" name="student_id">
                             <option>Select Student </option>
                             @foreach($student as $row)
                             <option value="{{$row->student_id}}">{{$row->name}}-{{$row->student_id}}-{{$row->number}}</option>
                             @endforeach
                          </select>
                      </div>
                  </div>

                
                  
                  
                   
                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="{{url('admin/membermanage')}}" class="btn btn-danger btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
                  </div>

                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Save
                    </button>
                  </div>

              </div>

            </form>
              
            </div>
          </div>
               
          </div>
         
        </div>
        

      

      </div><!-- /.container-fluid -->

    <!-- /.content -->
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

      

        $(document).ready(function() {
            $('.single-select').select2();
        });


</script>


  @endsection
 