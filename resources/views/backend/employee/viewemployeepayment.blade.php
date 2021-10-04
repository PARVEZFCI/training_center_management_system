<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 style="text-align:center">All Earning</h2>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
<th style="border-bottom: 1px solid rgb(0,0,0);border-top: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">SL</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Date</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Name</th>
<th style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Balance</th>
</tr>
@foreach($expenses as $row)
<tr>  
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->expense_name}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->amount}}</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">{{$row->remarks}}</td>
</tr>

@endforeach

<tr>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Total</td>
    <td  style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "></td>
</tr>


</table>


    
</body>
</html>