<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script>
    window.print();
</script>

<style>
@media print {
.noprint{
  display: none;
}
}
td{
  font-size: 17px;

 
}
th{
  text-align: top;
}
</style>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >

<tr>
        <td colspan="4"><table width="900" height="100" border="0" cellpadding="0" cellspacing="0">
          <tr>
          <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td width="336" align="right" valign="middle"><span style="padding-top:40px;"><img src="{{url($settings->logo)}}" width="300" height="120" align="texttop" /></span></td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;</td>
           
            <td width="639" align="left" valign="middle">
        
              <p style="margin-top: 30px;"><strong style="font-size: 40px;" > {{$settings->company_name}}</strong> <br>
               <strong style="text-align:center;margin-left:60px;">{{$settings->address}}</strong><br><br>
                <strong style="text-align: center;margin-left:60px;">Telephone:{{$settings->phone}}</strong>
                <br>
              </p>
            </td>
          </tr>

          
         
        </table></td>
       
      </tr>
</table>
      <hr style="height: 2px;
  background-color: black;">

  <br>

  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>

  <td style="text-align:left" colspan="2">
  <h2>From Date : {{$newdate}}</h2>
</td>
<td style="text-align:right" colspan="2">
  <h2>To Date : {{$newdate}}</h2>
</td>
</tr>
<tr>
</table>

  <div style="min-height: 500px">
  <h2 style="text-align:center">All Earn</h2>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
<th style="border-bottom: 1px solid rgb(0,0,0);border-top: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">SL</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Date</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Name</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Balance</th>
</tr>
@php 
$i = 1;
$total_earn = 0;
@endphp
@foreach($earn as $row)
@php 
$total_earn +=$row->amount;
@endphp
<tr>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$i++}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->date}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->earning_name}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->amount}}</td>
</tr>
    
@endforeach

<tr>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Total</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$total_earn}}</td>
</tr>


</table>

<h2 style="text-align:center">All Expanse</h2>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
<th style="border-bottom: 1px solid rgb(0,0,0);border-top: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">SL</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Date</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Name</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Balance</th>
</tr>

@php 
$total_expanse = 0;
$i=1;
@endphp
@foreach($expenses as $row)
@php
$total_expanse +=$row->amount;
@endphp
<tr>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$i++}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->date}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "> {{$row->expensename}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->amount}}</td>
</tr>
    
@endforeach

<tr>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Total</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$total_expanse}}</td>
</tr>


</table>

<br><br>
   
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <th style="border-bottom: 1px solid rgb(0,0,0);border-top: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">total Earn</th>
        <th style="border-bottom: 1px solid rgb(0,0,0);border-top: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Total Expanse</th>
        <th style="border-bottom: 1px solid rgb(0,0,0);border-top: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Total profite</th>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$total_earn}}</td>
        <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$total_expanse}}</td>
        <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$total_earn - $total_expanse}}</td>
    </tr>

</table>

</div>

<table width="1000"  align="center">
  <tr class="noprint">
    <td style="text-align: center;"> <a href="{{route('Admin.deshboard')}}" style="background: #db5246; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">back</a></td>

    <td>

      <button onclick="window.print()"  style="background: green; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">Print</button>
    </td>
    
  </tr>
</table>
    
</body>
</html>