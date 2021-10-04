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


            <form action="{{url('admin/storeemployee')}}" id="qcat" method="post" enctype="multipart/form-data">
              @csrf

              <div class="row">
               

                 <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Employee Name </label>
                          <input type="text"  name="name" id="name" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Employee Email </label>
                          <input type="email"  name="email" id="email" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Employee Address </label>
                          <input type="text"  name="address" id="address" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Employee Designation </label>
                          <input type="text"  name="designation" id="" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Number </label>
                          <input type="text"  name="number"  class="form-control">
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Joining Date </label>
                          <input type="date"  name="joining_date"  class="form-control">
                      </div>
                  </div>
                
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Fathers Name </label>
                          <input type="text"  name="f_name" id="f_name" class="form-control">
                      </div>
                  </div>

                 <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Status </label>
                          <select class="form-control" name="payment_status"> 
                              <option value="null">Select Status</option>
                              <option value="0">Salary Base</option>
                              <option value="1">Commission Base</option>
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Employee Status</label>
                          <input type="text"  name="m_name" id="m_name" class="form-control">
                      </div>
                  </div>

                  
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Student Image </label>
                          <input type="file"  name="image"  class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Certificate </label>
                          <input type="file"  name="certificate" id="certificate" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Employee Nid </label>
                          <input type="file"  name="nid" id="nid" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="session"> Reference Name </label>
                          <input type="text"  name="r_name"  class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Reference Nid </label>
                          <input type="file"  name="r_nid"  class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education">Password </label>
                          <input type="password"  name="password"  class="form-control">
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

     

</script>


  @endsection
 