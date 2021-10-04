<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 style="text-align:center">All Payment</h2>
<h2 style="text-align:center">Course Teacher : {{$employee->name}}</h2>
<h2 style="text-align:center"> Batch Name : {{$course->course_name}}</h2>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
<th style="border-left: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-top: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">SL</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Date</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Payment</th>
<!-- <th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Balance</th> -->
</tr>
@php 
 $i = 1;
 $total = 0;
 $asset =  ($total_asset*40)/100;
@endphp
@foreach($history as $row)
@php 
$total +=$row->amount;
@endphp
<tr>  
    <td  style="border-left: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$i++}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->date}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->amount}}</td>

</tr>

@endforeach

<tr>
    <td  style="border-left: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>

    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Total</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$total}}</td>
</tr>


</table>

<br>
<br>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
<th style="border-left: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-top: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">SL</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Total Asset</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Total Payment</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Due</th>
</tr>

<tr>  
    <td  style="border-left: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$asset}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$total}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$asset-$total}}</td>


</tr>





</table>


    
</body>
</html>