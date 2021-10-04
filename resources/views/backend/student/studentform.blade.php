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
  //  window.print();
</script>

<style>
@media print {
.noprint{
  display: none;
}
}
td{
  font-size: 25px;

 
}
th{
  text-align: top;
}
</style>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
    <tr>
        <td>
        "কারিগরি মানব সম্পদ , দক্ষ আই'টি প্রফেশনাল ও সফল ফ্রিল্যান্সার তৈরি করাই আমাদের লক্ষ " 
        </td>
    </tr>

    </table>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >

       <tr>
       
        <td style="text-align: center">
            <img src="{{url($settings->logo)}}" height="120px" width="700px">
        </td>
      </tr>
      
      <tr>
       
        <td style="text-align: center;padding-bottom: 30px;padding-top: 20px">
            <span style="color: white;background-color: red;padding: 20px;font-family:verdana;"><b>ADMISSION FORM</b></span>
        </td>
      </tr>
</table>
      <br><br>

<div style="min-height: 1000px">

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >

<tr>

<td style="padding-bottom: 20px">Student Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" value="{{$studentform->name}}" style="width: 700px;padding-bottom: 10px;padding-top: 10px"> </td>

</tr>

<tr>

<td style="padding-bottom: 20px;">Father Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input value="{{$studentform->fathers_name}}" type="text" style="width: 700px;padding-bottom: 10px;padding-top: 10px"> </td>

</tr>

<tr >

<td style="padding-bottom: 20px">Mother Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" value="{{$studentform->mothers_name}}" style="width: 700px;padding-bottom: 10px;padding-top: 10px"> </td>

</tr>

<tr>

<td style="padding-bottom: 20px">Mobile Number &nbsp;&nbsp;&nbsp;: <input value="{{$studentform->number}}"  type="text" style="width: 700px;padding-bottom: 10px;padding-top: 10px"> </td>

</tr>

<tr >

<td style="padding-bottom: 20px">Email Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input value="{{$studentform->email}}" type="text" style="width: 700px;padding-bottom: 10px;padding-top: 10px"> </td>

</tr>

<tr >

<td style="padding-bottom: 20px">Education  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: <input value="{{$studentform->education}}" type="text" style="width: 700px;padding-bottom: 10px;padding-top: 10px"> </td>

</tr>

<tr >

<td style="padding-bottom: 20px">Gender   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: <input style="width: 40px;" type="checkbox">Male <input style="width: 40px;" type="checkbox">FeMale </td>

</tr>

<tr >

<td style="padding-bottom: 20px">Previous Exprience : <input type="text" style="width: 700px;padding-bottom: 10px;padding-top: 10px">  </td>

</tr>







</table>


<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
<hr style="height: 2px;
  background-color: black;">
<tr >

<td >
  <span style="color: white;background-color: black;padding: 20px">
 Turm Of Condition ||
 
    </span>

 </td>
 
 <td style="text-align: left">
     <ol style="text-align: left">
         <li>ভর্তি কোন ভাবেই বাতিল যোগ্য নহে এবং কোর্স ফি ফেরত যোগ্য নহে  </li>
         <li>৯০% ক্লাসে অনুপস্থিত থাকলে ভর্তি বাতিল হয়ে যাবে </li>
         <li>এক মাসের মধ্যে ক্লসে না আসলে ভর্তি বাতিল হয়ে যাবে </li>
     </ol>
 </td>

</tr>

</table>

</div>

<table width="1200"  align="center">
  <tr>

     <td>
       <hr style="width: 200px;">
        <p style="text-align: center;"> Prepared By</p>
     </td>
    <td style="text-align: center;">

       <hr style="width: 200px;">
       <p style="text-align: center;"> Authorized Signature</p> 

    </td>

    <td>

     <hr style="width: 200px;">
     <p style="text-align: center;"> Checked By</p>

    </td>
    
  </tr>
</table>

<table width="1000"  align="center">
  <tr class="noprint">
    <td style="text-align: center;"> <a href="{{URL::to('admin/monthlystatementdate')}}" style="background: #db5246; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">back</a></td>

    <td>

      <button onclick="window.print()"  style="background: green; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">Print</button>
    </td>
    
  </tr>
</table>

    
</body>
</html>