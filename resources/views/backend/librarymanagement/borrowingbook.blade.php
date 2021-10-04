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
                <i class="fa fa-user-circle"></i><span> Borrowing Book </span>
            </div>

            <div class="card">
            <div class="card-header bg-white">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; Borrowing Book 
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
              </div> 

            </div>
            <div class="card-body">


            <form action="{{url('admin/storeborrowingbook')}}" id="qcat" method="post" enctype="multipart/form-data">
              @csrf

              <div class="row">
       
               
              <div class="col-md-6">
              
                      <div class="form-group">
                          <label for="name"> Student Name </label>
                          <select class="form-control single" name="student_id" >
                            <option>Select Student Name</option>
                            @foreach($student as $row)
                             <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach

                          </select>
                      </div>
                  </div>
                      <div class="col-md-6">
                      <div class="form-group">
                              <label for="name"> Book  Name </label>
                              <select class="form-control sngl" name="book_id">
                                <option>Select Book Name</option>
                                @foreach($book as $row)
                                <option value="{{$row->id}}">{{$row->book_name}}</option>
                                @endforeach

                              </select>
                          </div>
                      </div>

                      <div class="col-md-6">
                  
                      <div class="form-group">
                          <label for="name">Writter Name</label>
                          <input type="text" id="writer_name" readonly name="writer_name" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                  
                      <div class="form-group">
                          <label for="name">Publisher Name</label>
                          <input type="text" id="publisher_name" readonly name="publisher_name" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                  
                      <div class="form-group">
                          <label for="name">Price</label>
                          <input type="text" id="price" readonly name="price" class="form-control">
                      </div>
                  </div>


                  <div class="col-md-6">
                  
                      <div class="form-group">
                          <label for="name">Return Date</label>
                          <input type="date" name="submission_date" class="form-control">
                      </div>
                  </div>

                 <!-- <div class="col-md-6">
                
                      <div class="form-group">
                          <label for="name"> Book Name </label>
                          <input type="text" name="bookname" placeholder="Enter Book Name" class="form-control">
                      </div>
                  </div> -->
                   
                  <div class="col-md-12">
                  </div>
                      <br>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Save
                    </button>
                  </div>
                  
                  <div class="col-md-6">
                    <a href="{{url('admin/expense')}}" class="btn btn-danger btn-block col-md-offset-2">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
        $(document).ready(function() {
            $('.single').select2();
        });

        $(document).ready(function() {
            $('.sngl').select2();
        });

        $(document).ready(function() {
         $('select[name="book_id"]').on('change', function(){
             var book_id = $(this).val();
           
             console.log(book_id);
             
             if(book_id) {
                 $.ajax({
                     url: "{{  url('admin/book_details') }}",
                     data : {book_id:book_id},
                     type:"GET",
                     dataType:"json",
                     success:function(data) {

                           $('#writer_name').val(data.writer_name);
                           $('#publisher_name').val(data.publisher_name);
                           $('#price').val(data.price);
  
                          },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });


</script>


  @endsection
 