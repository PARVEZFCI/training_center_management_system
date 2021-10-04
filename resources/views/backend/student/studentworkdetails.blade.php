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

        <div class="card bg-white" id="card2">
        
      		<div class="card-header border-0  text-white bg-info" >
                <i class="fa fa-user-circle"></i><span> Student Works Details</span>
            </div>

            <div class="card">
            <!-- <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>&nbsp; All Category
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
               
                <a href="{{url('admin/addstudent')}}" class="btn btn-dark">+add new</a>

       
              </div> 

            </div> -->
            <h2 class="text-center">Student Name    : {{$student->name}}</h2>
            <h2 class="text-center">Mobile Number : {{$student->number}}</h2>
            <h2 class="text-center">Batch Name : {{$student->course_name}}</h2>
            <div class="card-body">
           <div class="print">
              <table id="example"   style="width:100%">
              <thead>
                    <tr>
                        <th width="5%">SN</th>
                        
                        <th>Image </th>
                        <th>video </th>
                        <th>file </th>
                      
                    </tr>
                </thead>
                <tbody>
                	@php $i=1;
               
             @endphp
               @foreach($studectwork as $row)
                  
   
                    <tr>
                        <td>{{$i++}}</td>
                         
                         <td> 
                           @if(isset($row->work))
                           <img style="img-container" height="200" width="250" src="{{url($row->work)}}"> 
                           @endif </td>
                        <td>
                        @if(isset($row->video))
                        <video width="280" height="250" controls>
                          
                            <source src="{{url($row->video)}}" type="video/mp4">
                         
                         </video>
                         @endif
                        </td>
                       
                        <td>  @if(isset($row->zipfile)) <a target="_blank" href="{{$row->zipfile}}">file download</a> @endif</td>
                        
                          
                    </tr>
                    

                @endforeach
                </tbody>
            </table>
</div>
        
          
            
            <!-- end table -->
          
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script> -->

<script type="text/JavaScript">
   $(document).ready( function (){
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });
      });

        // $(document).ready(function() {
        //     htmlData = $("#example").html();
        // });

        // function prints() {
        //      $("#mydiv").html(htmlData);
        //     print(htmlData)
        // }


</script>

  @endsection
 