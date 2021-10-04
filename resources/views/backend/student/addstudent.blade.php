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
                <i class="fa fa-user-circle"></i><span> Add Student</span>
            </div>

            <div class="card">
            <div class="card-header bg-white">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; Add Student
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                

       
              </div> 

            </div>
            <div class="card-body">


            <form action="{{url('admin/storestudent')}}" id="qcat" method="post" enctype="multipart/form-data">
              @csrf

              <div class="row">

              <div class="col-md-6">
                      <label>Date</label>
                      <input type="date" name="date" id="date" class="form-control">
                  </div>

                <div class="col-md-6">
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
                          <input type="number" readonly="" name="regular_fee" id="course_fee" class="form-control">
                      </div>
                  </div>
                   
                 <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Discount Fee </label>
                          <input type="number" readonly="" name="discount_fee" id="discount_fee" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Starting Date</label>
                          <input type="text" readonly="" name="" id="starting_date" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Student Name </label>
                          <input type="text"  name="name" id="name" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Student Email </label>
                          <input type="email"  name="email" id="email" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Student Address </label>
                          <input type="text"  name="address" id="address" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Number </label>
                          <input type="text"  name="number" id="starting_date" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Fathers Name </label>
                          <input type="text"  name="fathers_name" id="fathers_name" class="form-control">
                      </div>
                  </div>

                 <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Mothers Name </label>
                          <input type="text"  name="mothers_name" id="mothers_name" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Education </label>
                          <input type="text"  name="education" id="education" class="form-control">
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
                          <label for="session"> Session </label>
                          <input type="text"  name="session"  class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Blood Group </label>
                          <input type="text"  name="b_group"  class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Nid(if any) </label>
                          <input type="file"  name="nid"  class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Certificate </label>
                          <input type="file"  name="certificate"  class="form-control">
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Payment </label>
                          <input type="number"  name="payment"  class="form-control">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Special Discount </label>
                          <input type="text"  name="special_discount"  class="form-control">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Next Payment Date </label>
                          <input type="date"  name="next_payment_date"  class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Password </label>
                          <input type="password"  name="password"  class="form-control">
                      </div>
                  </div>

                 

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="education"> Earning Name </label>
                          <select name="earning_name" class="form-control">

                          <option>Select Earn Name</option>
                          @foreach($earnname as $row)
                             <option value="{{$row->id}}">{{$row->earning_name}}</option>
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

                      discout = (data.course_fee * data.discount)/100;
                      discout_fee = (data.course_fee - discout)
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
 