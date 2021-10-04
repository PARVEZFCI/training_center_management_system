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


            <form action="{{url('admin/updatestudent')}}" id="qcat" method="post" enctype="multipart/form-data">
              @csrf

              <div class="row">

              <!-- <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Course Department Name</label>
                          <select class="form-control" name="category_id">
                             <option>Select Course </option>
                             @foreach($course as $row)
                             <option value="{{$row->id}}">{{$row->category_name}}</option>
                             @endforeach
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label>Batch Name</label>
                      <select name="course_id" class="form-control">
                      <option>Select Option</option>
                      </select>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Course Regular fee</label>
                          <input type="number"  readonly="" name="regular fee" id="course_fee" class="form-control">
                      </div>
                  </div>
                   
                 <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Discount Fee </label>
                          <input type="number" readonly="" name="regular fee" id="discount_fee" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Starting Date </label>
                          <input type="text" readonly="" name="" id="starting_date" class="form-control">
                      </div>
                  </div> -->


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Shift Batch Name</label>
                          <select class="form-control" name="shift_batch_id">
                              @if($studentedt->shift_batch_id !=NULL)
                              <option value="{{$studentedt->shift_batch_id}}">{{$studentedt->batch_name}}</option>
                              @else 
                             <option>Select Shift Batch </option>
                             @foreach($Shiftbatch as $row)
                             <option value="{{$row->id}}">{{$row->batch_name}}</option>
                             @endforeach

                             @endif
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Student Name </label>
                          <input type="hidden" value="{{$studentedt->id}}" name="id" >
                          <input type="text" value="{{$studentedt->name}}"  name="name" id="name" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Student Email </label>
                          <input type="email" value="{{$studentedt->email}}"  name="email" id="email" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Student Address </label>
                          <input type="text"  name="address" value="{{$studentedt->address}}"  id="address" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Number </label>
                          <input type="text"  name="number" value="{{$studentedt->number}}"  id="starting_date" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Fathers Name </label>
                          <input type="text"  name="fathers_name" value="{{$studentedt->fathers_name}}"  id="fathers_name" class="form-control">
                      </div>
                  </div>

                 <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Mothers Name </label>
                          <input type="text"  name="mothers_name" value="{{$studentedt->mothers_name}}"  id="mothers_name" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Education </label>
                          <input type="text"  name="education" value="{{$studentedt->education}}"  id="education" class="form-control">
                      </div>
                  </div>
                  

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="session"> Session </label>
                          <input type="text" value="{{$studentedt->session}}"  name="session"  class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Blood Group </label>
                          <input type="text" value="{{$studentedt->b_group}}"  name="b_group"  class="form-control">
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

        
     $(document).ready(function(){
         $('select[name="category_id"]').on('change',function(){
             var cat_id = $(this).val();

            if(cat_id) {
                $.ajax({
                    url:"{{url('admin/cat_details')}}",
                    data:{cat_id:cat_id},
                    type:"GET",
                    dataType:"json",
                 
                    success:function(data){

                   
                        //  $('.data').html(data);
                        //  $('.data').val(data);
                        var d =$('select[name="course_id"]').empty();
                        $('select[name="course_id"]').append('<option>select option</option>');
                           $.each(data, function(key, value){
                               $('select[name="course_id"]').append('<option value="'+ value.id +'">' + value.course_name + '</option>');

                           });

                    }
                })
            }
         })
     })
     
    
      $(document).ready(function() {
         $('select[name="course_id"]').on('change', function(){
             var course_id = $(this).val();
           
             console.log(course_id);
             
             if(course_id) {
                 $.ajax({
                     url: "{{  url('admin/course_details') }}",
                     data : {course_id:course_id},
                     type:"GET",
                     dataType:"json",
                     success:function(data) {

                      discout_fee = (data.course_fee * data.discount)/100;

                     // var d =$('select[name="grade"]').empty();

                           $('#course_fee').val(data.course_fee);
                           $('#discount_fee').val(discout_fee);
                           $('#starting_date').val(data.starting_date);
  
                          },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

    
    

</script>


  @endsection
 