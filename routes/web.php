<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\AdvancedSalaryController;
use App\Http\Controllers\IncrementSalaryController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LeavetypeController;
use App\Http\Controllers\AttendanceController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AccountController;

use App\Models\Product;
use App\Models\Department;
use App\Models\Designation;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::resource('/', TemplateController::class);

Route::resource('department', DepartmentController::class);
Route::resource('employee', EmployeeController::class);


Route::controller(EmployeeController::class)->group(function () {
  Route::get('designation','DesignationAll')->name('employee.designation');
  Route::post('designation-save','DesignationStore')->name('designation.save');
  Route::get('designation-edit/{id}','DesignationEdit')->name('designation.editdata');
  Route::post('designation-update/{id}','DesignationUpdate')->name('designation.updatedata');
  Route::get('designation-delete/{id}','DesignationDelete')->name('designation.deletedata');
});


Route::resource('all-employee-salary', SalaryController::class);
Route::get('all-salary/{salary_month}/{salary_year}', [SalaryController::class,'AllSalary'])->name('all.salary');
Route::get('indivisual-salary/{salary_month}/{salary_year}', [SalaryController::class,'IndivisualSalary'])->name('indivisual.salary');
Route::get('pay-slip/{emp_id}/{salary_month}/{salary_year}', [SalaryController::class,'PaySlip'])->name('pay.slip');
Route::get('viewpay-slip/{emp_id}/{salary_month}/{salary_year}', [SalaryController::class,'ViewPaySlip'])->name('viewpay.slip');


Route::resource('advanced-salary', AdvancedSalaryController::class);
Route::resource('increment-salary', IncrementSalaryController::class);
Route::resource('leave', LeaveController::class);
Route::controller(LeaveController::class)->group(function () {
	Route::get('check-availability', 'CheckAvailability')->name('check.availability');
});

Route::resource('leave-type', LeavetypeController::class);


Route::resource('customer', CustomerController::class);
Route::resource('pos', PosController::class);
Route::resource('add-cart', CartController::class);
Route::resource('product', ProductController::class);
Route::get('barcode', [ProductController::class,'GetProductBarcodes'])->name('products.barcode');

Route::controller(AttendanceController::class)->group(function () {
	Route::get('new-attendance', 'NewAttendance')->name('new.attendance');
	Route::post('insert-attendance','InsertAttendance')->name('insert.attendance');
	Route::get('all-attendance','AllAttendance')->name('all.attendance');
	Route::get('view-attendance/{att_date}','ViewAttendance')->name('edit.attendance');
	Route::get('edit/{id}','Edit')->name('edit');
	Route::post('update/{id}','UpdateAttendance')->name('update');
	Route::get('monthly.attendance','MonthlyAttendance')->name('monthly.attendance');
	Route::get('january-attendance','JanuaryAttendance')->name('january.attendance');
	Route::get('february-attendance','FebruaryAttendance')->name('february.attendance');
	Route::get('march-attendance','MarchAttendance')->name('march.attendance');
	Route::get('april.attendance','AprilAttendance')->name('april.attendance');
	Route::get('may-attendance','MayAttendance')->name('may.attendance');
	Route::get('june-attendance','JuneAttendance')->name('june.attendance');
	Route::get('july-attendance','JulyAttendance')->name('july.attendance');
	Route::get('august.attendance','AugustAttendance')->name('august.attendance');
	Route::get('september-attendance','SeptemberAttendance')->name('september.attendance');
	Route::get('october-attendance','OctoberAttendance')->name('october.attendance');
	Route::get('november-attendance','NovemberAttendance')->name('november.attendance');
	Route::get('december-attendance','DecemberAttendance')->name('december.attendance');
	Route::POST('import-attendance','ImportAttendance')->name('import.attendance');
	Route::get('export-attendance','ExportAttendance')->name('export.attendance');
	Route::get('export-attendance_in_csv','ExportAttendanceInCsv')->name('export.attendance_in_csv');
	Route::get('export-attendance_in_pdf','ExportAttendanceInPdf')->name('export.attendance_in_pdf');
	
	Route::get('attendance-intime','AttendanceIntime')->name('attendance.intime');
	Route::get('attendance-outtime','AttendanceOuttime')->name('attendance.outtime');

	Route::get('attendance-overtime','AttendanceOvertime')->name('attendance.overtime');
	Route::POST('import-attendance_intime','ImportAttendanceInTime')->name('import.attendance_intime');
	Route::POST('import-attendance_outtime','ImportAttendanceOutTime')->name('import.attendance_outtime');
	
});







Route::post('add-cart', [CartController::class,'Index'])->name('add.cart');
Route::post('cart-update/{rowId}',[CartController::class,'CartUpdate'])->name('cartupdate');
Route::get('cart-remove/{rowId}',[CartController::class,'CartRemove'])->name('cartremove');
Route::post('create-invoice', [CartController::class,'CreateInvoice'])->name('create.invoice');





Route::resource('order', OrderController::class);
Route::controller(OrderController::class)->group(function () {
	Route::get('delivery-order', 'DeliveryOrder')->name('delivery.order');
	Route::get('all-customer', 'AllCustomer')->name('all.customer');
	Route::get('add-customer', 'ADDCustomer')->name('add.customer');
	Route::get('edit.customer', 'EditCustomer')->name('edit.customer');
	Route::get('view.customer', 'ViewCustomer')->name('view.customer');
	Route::get('customer-list', 'CustomerList')->name('customer.list');
	Route::get('delivery-product', 'DeliveryProduct')->name('delivery.product');
  Route::get('view-order', 'ViewOrder')->name('view.order');
	Route::get('edit-order', 'EditOrder')->name('edit.order');
  Route::get('order-list', 'OrderList')->name('order.list');
  Route::get('completed-order', 'CompletedOrder')->name('completed.order');
	Route::get('processing-order', 'ProcessingOrder')->name('processing.order');
	Route::get('waiting-order', 'WaitingOrder')->name('waiting.order');
	Route::get('work-order', 'WorkOrder')->name('work.order');

	
});

Route::resource('purchase', PurchaseController::class);
Route::controller(PurchaseController::class)->group(function () {
	Route::get('purchase.requisition', 'PurchaseRequisition')->name('purchase.requisition');
  Route::get('view_requisition', 'ViewRequisition')->name('view.requisition');
	Route::get('edit_requisition', 'EditRequisition')->name('edit.requisition');

	Route::get('view.purchase', 'ViewPurchase')->name('view.purchase');
	Route::get('edit.purchase', 'EditPurchase')->name('edit.purchase');
	Route::get('all-supplier', 'AllSupplier')->name('all.supplier');
	Route::get('add-supplier', 'AddSupplier')->name('add.supplier');
	Route::get('supplier-list', 'SupplierList')->name('supplier.list');
	Route::get('view-supplier', 'ViewSupplier')->name('view.supplier');
  Route::get('edit-supplier', 'EditSupplier')->name('edit.supplier');
  Route::get('purchase-list', 'PurchaseList')->name('purchase.list');

});

Route::resource('production', ProductionController::class);
Route::controller(ProductionController::class)->group(function () {
	Route::get('stock', 'Stock')->name('all.stock');
	Route::get('fabric-type', 'FabricType')->name('fabric.type');
	Route::get('fabric-category', 'FabricCategory')->name('fabric.category');
	Route::get('view-production', 'ViewProduction')->name('view.production');
	Route::get('production-list', 'ProductionList')->name('production.list');
	Route::get('edit-production', 'EditProduction')->name('edit.production');
});
Route::resource('item', ItemController::class);
Route::controller(ItemController::class)->group(function () {
	Route::get('view-item', 'ViewItem')->name('view.item');
	Route::get('edit-item', 'EditItem')->name('edit.item');
	
	Route::get('item-category', 'ItemCategory')->name('item.category');
	Route::get('item-type', 'ItemType')->name('item.type');
	Route::get('item-color', 'ItemColor')->name('item.color');
	Route::get('item-size', 'ItemSize')->name('item.size');
});

Route::resource('sale', SaleController::class);

Route::resource('account', AccountController::class);
Route::controller(AccountController::class)->group(function () {
	Route::get('edit-account', 'EditAccount')->name('edit.account');
	Route::get('head-account', 'HeadAccount')->name('head.account');
	Route::get('account-details', 'AccountDetails')->name('account.details');
	Route::get('bank-name', 'BankName')->name('bank.name');
	Route::get('account-type', 'AccountType')->name('account.type');
	Route::get('all-voucher', 'AllVoucher')->name('all.voucher');
	Route::get('voucher-type', 'VoucherType')->name('voucher.type');
  Route::get('view-voucher', 'ViewVoucher')->name('view.voucher');
	Route::get('edit-voucher', 'EditVoucher')->name('edit.voucher');
	Route::get('voucher-list', 'VoucherList')->name('voucher.list');
  Route::get('credit-voucher', 'CreditVoucher')->name('credit.voucher');
  Route::get('debit-voucher', 'DebitVoucher')->name('debit.voucher');
	Route::get('journal-voucher', 'JournalVoucher')->name('journal.voucher');
	Route::get('income-statements', 'IncomeStatements')->name('income.statements');
	Route::get('income-list', 'IncomeList')->name('income.list');
	Route::get('expenses-statements', 'ExpensesStatements')->name('expenses.statements');
	Route::get('expense-list', 'ExpensesList')->name('expense.list');
  Route::get('balance-sheet', 'BalanceSheet')->name('balance.sheet');
  Route::get('balance-statement', 'BalanceStatement')->name('balance.statement');
  Route::get('acceptance-requisition', 'AcceptanceRequisition')->name('acceptance.requisition');
  Route::get('change-requisition', 'ChangeRequisition')->name('change.requisition');
   
});


 