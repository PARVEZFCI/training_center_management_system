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
                <i class="fa fa-user-circle"></i><span> Add Course</span>
            </div>

            <div class="card">
            <div class="card-header bg-white">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; Add Course
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                

       
              </div> 

            </div>
            <div class="card-body">


            <form action="{{url('admin/updatecourse')}}" id="qcat" method="post" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <br><br><br>
                <div class="col-md-6">
                <br>
                      <div class="form-group">
                          <label for="name"> Category Name </label>
                          <select class="form-control" name="category_id">
                            <option>{{$course->category_name}}</option>
                            @foreach($category as $row)
                            <option value="{{$row->id}}">{{$row->category_name}}</option>
                            @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                  <br>
                      <div class="form-group">
                          <label for="name"> Course Teacher </label>
                          <select class="form-control" name="course_teacher">
                            <option>{{$course->name}}</option>
                            @foreach($teacher as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                          </select>
                      </div>
                  </div>
                  <input value="{{$course->id}}" type="hidden" class="form-control"  name="id" placeholder="Enter Course Name">
                  <div class="col-md-6">
                  <br>
                      <div class="form-group">
                          <label for="name"> Course Name </label>
                          <input required="" value="{{$course->course_name}}" type="text" class="form-control"  name="course_name" placeholder="Enter Course Name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Course Fee </label>
                          <input required="" type="number" value="{{$course->course_fee}}" class="form-control"  name="course_fee" placeholder="Enter Course Fee">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Discount</label>
                          <input required="" type="number" value="{{$course->discount}}" class="form-control"  name="discount" placeholder="Enter Discount">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Starting Date </label>
                          <input required="" type="text" class="form-control" value="{{$course->starting_date}}"  name="starting_date" placeholder="Enter Starting Date">
                      </div>
                  </div>
                   
                   
                  <div class="col-md-12">
                  </div>
                      <br>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Save
                    </button>
                  </div>
                  
                  <div class="col-md-6">
                    <a href="{{url('admin/allcategory')}}" class="btn btn-danger btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
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

  <script type="text/javascript">
    
  </script>


  @endsection
 