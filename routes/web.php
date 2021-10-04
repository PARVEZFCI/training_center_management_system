<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\admin\adminloginController;
use App\Http\Controllers\admin\adminRegistrationController;
use App\Http\Controllers\admin\QuizController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\admin\EmployeeContoller;
use App\Http\Controllers\admin\StudentProfile;
use App\Http\Controllers\admin\ExpenseController;
use App\Http\Controllers\admin\AttendanceController;
use App\Http\Controllers\admin\ReportController; 
use App\Http\Controllers\admin\EarningController;  
use App\Http\Controllers\admin\BorrowingBookController;
use App\Http\Controllers\admin\BankController;  
use App\Http\Controllers\admin\TransferBatchController;
use App\Http\Controllers\admin\UpdateuserController;

//Route::get('/',[homeController::class, 'home'])->name('home');
Route::get('/',[adminloginController::class, 'login'])->name('login');
Route::post('/admin_login_action',[adminloginController::class, 'admin_login_action'])->name('admin_login_action');
Route::get('/ragisterlogin',[adminRegistrationController::class, 'register'])->name('register');
Route::post('/ragisterloginaction',[adminRegistrationController::class, 'ragisterloginaction'])->name('ragisterloginaction');

Route::group(['middleware'=>'admin_auth','as'=>'Admin.', 'prefix'=>'admin', 'namespace'=>'Admin'],function(){
	
	Route::get('/deshboard',[homeController::class, 'deshboard'])->name('deshboard');
	Route::get('/home',[homeController::class, 'home'])->name('home');
	Route::get('/adminlogout',[homeController::class, 'adminlogout'])->name('adminlogout');  
    
    Route::get('/branch',[homeController::class, 'branch'])->name('branch');   
    Route::get('/addbranch',[homeController::class, 'addbranch'])->name('addbranch');
    Route::post('/storebranch',[homeController::class, 'storebranch'])->name('storebranch'); 
    Route::get('/editbranch/{id}',[homeController::class, 'editbranch'])->name('editbranch');

    Route::get('/changepassword',[UpdateuserController::class, 'changepassword'])->name('changepassword');  
    Route::post('/updatepass',[UpdateuserController::class, 'updatepass'])->name('updatepass'); 
	//category Controller  
	Route::get('/allcategory',[CategoryController::class, 'allcategory'])->name('allcategory');
	Route::get('/addcategory',[CategoryController::class, 'addcategory'])->name('addcategory');
	Route::post('/storecategory',[CategoryController::class, 'storecategory'])->name('storecategory');
	Route::get('/categorydlt/{id}',[CategoryController::class, 'categorydlt'])->name('categorydlt');
    Route::get('/editcategory/{id}',[CategoryController::class, 'editcategory'])->name('editcategory');
	Route::post('/updatecategory',[CategoryController::class, 'updatecategory'])->name('updatecategory');
	//course Controller
	Route::get('/allcourse',[CourseController::class, 'allcourse'])->name('allcourse');
	Route::get('/addcourse',[CourseController::class, 'addcourse'])->name('addcourse');
	Route::post('/storecourse',[CourseController::class, 'storecourse'])->name('storecourse');
    Route::get('/coursedelete/{id}',[CourseController::class, 'coursedelete'])->name('coursedelete');
	Route::get('/editcourse/{id}',[CourseController::class, 'editcourse'])->name('editcourse');  
	Route::post('/updatecourse',[CourseController::class, 'updatecourse'])->name('updatecourse'); 
    
    //shiftbatch controller 
    Route::get('/shiftbatch',[TransferBatchController::class, 'shiftbatch'])->name('shiftbatch');
    Route::get('/addshiftbatch',[TransferBatchController::class, 'addshiftbatch'])->name('addshiftbatch');
    Route::post('/storeshiftbatch',[TransferBatchController::class, 'storeshiftbatch'])->name('storeshiftbatch');

    //shift Batch attendance controller attendance
   Route::get('/shiftbatchattendance/{id}',[TransferBatchController::class, 'shiftbatchattendance'])->name('shiftbatchattendance');
   Route::post('/storeshiftbatchattendance',[TransferBatchController::class, 'storeattendance'])->name('storeattendance');

	Route::get('/coursestatusde/{id}',[CourseController::class, 'coursestatusde'])->name('coursestatusde');
	Route::get('/coursestatusac/{id}',[CourseController::class, 'coursestatusac'])->name('coursestatusac');

	Route::get('/employeemoneyhistory/{id}',[CourseController::class, 'employeemoneyhistory'])->name('employeemoneyhistory');
	//Student Controller
	Route::get('/allstudent',[StudentController::class, 'allstudent'])->name('allstudent');
	Route::get('/addstudent',[StudentController::class, 'addstudent'])->name('addstudent');
	Route::post('/storestudent',[StudentController::class, 'storestudent'])->name('storestudent');
	Route::get('/course_details',[StudentController::class, 'course_details'])->name('course_details');  
    Route::get('/studetails',[StudentController::class, 'studetails'])->name('studetails');   
	Route::get('/studentid/{id}',[StudentController::class, 'studentid'])->name('studentid');  
    Route::get('/studentform/{id}',[StudentController::class, 'studentform'])->name('studentform');

    Route::get('/deactivestu/{id}',[StudentController::class, 'deactivestu'])->name('deactivestu');
	Route::get('/activestu/{id}',[StudentController::class, 'activestu'])->name('activestu');
	Route::get('/studentedit/{id}',[StudentController::class, 'studentedit'])->name('studentedit'); 
    Route::post('/updatestudent',[StudentController::class, 'updatestudent'])->name('updatestudent');

    Route::get('/studenthomework',[StudentController::class, 'studenthomework'])->name('studenthomework');
	Route::post('/studentworkdetails',[StudentController::class, 'studentworkdetails'])->name('studentworkdetails');

	Route::get('/cat_details',[StudentController::class, 'cat_details'])->name('cat_details');  

	Route::get('/todaydue',[StudentController::class, 'todaydue'])->name('todaydue');  
     
	//settings 
	Route::get('/settings',[homeController::class,'settings'])->name('settings');
	Route::post('/storesettings',[homeController::class,'storesettings'])->name('storesettings');

	//studentfee collection

	Route::get('/studentfee',[StudentController::class, 'studentfee'])->name('studentfee');
	Route::post('/storestupayment',[StudentController::class, 'storestupayment'])->name('storestupayment'); 
	Route::get('/studetailsforfee',[StudentController::class, 'studetailsforfee'])->name('studetailsforfee');
	//employee controller
	Route::get('/allemployee',[EmployeeContoller::class, 'allemployee'])->name('allemployee');
	Route::get('/addemployee',[EmployeeContoller::class, 'addemployee'])->name('addemployee');
	Route::post('/storeemployee',[EmployeeContoller::class, 'storeemployee'])->name('storeemployee');

	Route::get('/money_add/{id}',[EmployeeContoller::class, 'money_add'])->name('money_add');  
    Route::get('/employee_data',[EmployeeContoller::class, 'employee_data'])->name('employee_data');
	//Student deshboard controller
	Route::get('/addwork',[StudentProfile::class, 'addwork'])->name('addwork');
	Route::post('/storework',[StudentProfile::class, 'storework'])->name('storework');
	Route::get('/studentprofile',[StudentProfile::class, 'studentprofile'])->name('studentprofile');
	Route::get('/allworkstudent',[StudentProfile::class, 'allworkstudent'])->name('allworkstudent');
	Route::get('/studentreport',[StudentProfile::class, 'studentreport'])->name('studentreport');  
    Route::get('/studetails',[StudentProfile::class, 'studetails'])->name('studetails');
	
	
   //expense manage Controller  
   //Route::get('/expense',[ExpenseController::class, 'expense'])->name('expense');
   Route::get('/expensename',[ExpenseController::class, 'expensename'])->name('expensename');
   Route::get('/expensenameadd',[ExpenseController::class, 'expensenameadd'])->name('expensenameadd');
   Route::post('/expensenamestore',[ExpenseController::class, 'expensenamestore'])->name('expensenamestore');
   
   Route::get('/expense',[ExpenseController::class, 'expense'])->name('expense');
   Route::get('/expenseadd',[ExpenseController::class, 'expenseadd'])->name('expenseadd');
   Route::post('/storeexpense',[ExpenseController::class, 'storeexpense'])->name('storeexpense');

   //earninig manage Controller 
   Route::get('/earningname',[EarningController::class, 'earningname'])->name('earningname');
   Route::get('/earningnameadd',[EarningController::class, 'earningnameadd'])->name('earningnameadd');
   Route::post('/earningnamestore',[EarningController::class, 'earningnamestore'])->name('earningnamestore');
   
   Route::get('/earning',[EarningController::class, 'earning'])->name('earning');
   Route::get('/earningadd',[EarningController::class, 'earningadd'])->name('earningadd');
   Route::post('/storeearning',[EarningController::class, 'storeearning'])->name('storeearning');   
   Route::get('/moneyreceipt/{id}',[EarningController::class, 'moneyreceipt'])->name('moneyreceipt');
   //attendance controller attendance
   Route::get('/attendance/{id}',[AttendanceController::class, 'attendance'])->name('attendance');
   Route::post('/storeattendance',[AttendanceController::class, 'storeattendance'])->name('storeattendance');

   //report 
   Route::get('/dailystatementdate',[ReportController::class, 'dailystatementdate'])->name('dailystatementdate');
   Route::post('/dailystatement',[ReportController::class, 'dailystatement'])->name('dailystatement');
   Route::get('/monthlystatementdate',[ReportController::class, 'monthlystatementdate'])->name('monthlystatementdate');
   Route::post('/monthlystatement',[ReportController::class, 'monthlystatement'])->name('monthlystatement');
   Route::get('/totalcostearn',[ReportController::class, 'totalcostearn'])->name('totalcostearn');

   Route::get('/datewiseexpanse',[ReportController::class, 'datewiseexpanse'])->name('datewiseexpanse');
   
   Route::get('/earningnamewise',[ReportController::class, 'earningnamewise'])->name('earningnamewise');
   Route::post('/earningnamewisestatement',[ReportController::class, 'earningnamewisestatement'])->name('earningnamewisestatement');

   Route::get('/profitedaterange',[ReportController::class, 'profitedaterange'])->name('profitedaterange');
   Route::post('/profitedaterangestatement',[ReportController::class, 'profitedaterangestatement'])->name('profitedaterangestatement');

   Route::get('/employeepayment',[EmployeeContoller::class, 'employeepayment'])->name('employeepayment');
   Route::post('/storeemployeepayment',[BorrowingBookController::class, 'storeemployeepayment'])->name('storeemployeepayment');

   //purchasebook
   Route::get('/bookrcv/{id}',[BorrowingBookController::class, 'bookrcv'])->name('bookrcv'); 
   Route::get('/allborrowingbook',[BorrowingBookController::class, 'allborrowingbook'])->name('allborrowingbook'); 
   Route::get('/Borrowing_books',[BorrowingBookController::class, 'Borrowing_books'])->name('Borrowing_books');  
   Route::post('/storeborrowingbook',[BorrowingBookController::class, 'storeborrowingbook'])->name('storeborrowingbook');

   Route::get('/booksetup',[BorrowingBookController::class, 'booksetup'])->name('booksetup');
   Route::get('/addbooksetup',[BorrowingBookController::class, 'addbooksetup'])->name('addbooksetup');
   Route::post('/storebooksetup',[BorrowingBookController::class, 'storebooksetup'])->name('storebooksetup');  
   Route::get('/book_details',[BorrowingBookController::class, 'book_details'])->name('book_details'); 
   //bank setup
   Route::get('/branchname',[BankController::class, 'branchname'])->name('branchname'); 
   Route::get('/addbranchname',[BankController::class, 'addbranchname'])->name('addbranchname');
   Route::post('/storebranchname',[BankController::class, 'storebranchname'])->name('storebranchname');

   Route::get('/banknamesetup',[BankController::class, 'banknamesetup'])->name('banknamesetup'); 
   Route::get('/addbanknamesetup',[BankController::class, 'addbanknamesetup'])->name('addbanknamesetup'); 
   Route::post('/storebanknamesetup',[BankController::class, 'storebanknamesetup'])->name('storebanknamesetup');
   Route::get('/bankname_delete/{id}',[BankController::class, 'bankname_delete'])->name('bankname_delete');  
   Route::get('/editbankname/{id}',[BankController::class, 'editbankname'])->name('editbankname');   
   Route::post('/updatebanknamesetup',[BankController::class, 'updatebanknamesetup'])->name('updatebanknamesetup');  

   Route::get('/banksetup',[BankController::class, 'banksetup'])->name('banksetup'); 
    Route::get('/addbanksetup',[BankController::class, 'addbanksetup'])->name('addbanksetup'); 
   Route::post('/storebanksetup',[BankController::class, 'storebanksetup'])->name('storebanksetup');
//    Route::get('/bankname_delete/{id}',[BankController::class, 'bankname_delete'])->name('bankname_delete');  
   Route::get('/editbank/{id}',[BankController::class, 'editbank'])->name('editbank');   
//    Route::post('/updatebanknamesetup',[BankController::class, 'updatebanknamesetup'])->name('updatebanknamesetup');
   Route::get('/storebanksetup',[BankController::class, 'storebanksetup'])->name('storebanksetup');
   Route::get('/deposit',[BankController::class, 'deposit'])->name('deposit');
   Route::get('/adddeposit',[BankController::class, 'adddeposit'])->name('adddeposit');   
   Route::post('/sotredeposit',[BankController::class, 'sotredeposit'])->name('sotredeposit');

});

Route::get('loginuser',[UserController::class,'loginuser'])->name('loginuser');
Route::get('userregistration',[UserController::class,'userregistration'])->name('userregistration');
Route::post('storeUser',[UserController::class,'storeUser'])->name('storeUser');
Route::post('userlogin',[UserController::class,'userlogin'])->name('userlogin');

Route::group(['middleware'=>'auth'],function(){

	Route::get('userdeshboard',[UserController::class,'userdeshboard'])->name('userdeshboard');

	Route::post('userlogout',[UserController::class,'userlogout'])->name('userlogout');

});
