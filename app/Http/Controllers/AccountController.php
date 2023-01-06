<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('all_head_account');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view('edit_account');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
    public function HeadAccount()
    {
        return view('head_account');  
    }
    public function EditAccount()
    {
        return view('edit_account');  
    }
    
   public function BankName()
    {
        return view('bank_name');  
    }
   public function AccountType()
    {
        return view('account_type');  
    }

   
    public function AccountDetails()
    {
        return view('account_details');  
    }
    public function AllVoucher()
    {
        return view('all_voucher');  
    }
    public function VoucherType()
    {
        return view('voucher_type');  
    }
     public function ViewVoucher()
    {
        return view('view_voucher');  
    }
    public function EditVoucher()
    {
        return view('edit_voucher');  
    }
    public function VoucherList()
    {
        return view('pdf.voucher_list');  
    }
    

    public function CreditVoucher()
    {
        return view('credit_voucher');  
    }

    public function DebitVoucher()
    {
        return view('debit_voucher');  
    }

    public function JournalVoucher()
    {
        return view('journal_voucher');  
    }

    public function IncomeStatements()
    {
        return view('income_statements');  
    }
    
    public function ExpensesStatements()
    {
        return view('expenses_statements');  
    }

    public function BalanceSheet()
    {
        return view('balance_sheet');  
    }
    public function IncomeList()
    {
        return view('pdf.income_list');  
    }
     public function ExpensesList()
    {
        return view('pdf.expenses_list');  
    }
    public function BalanceStatement()
    {
        return view('pdf.balance_statement');  
    }
    
  public function AcceptanceRequisition()
    {
        return view('account_purchase_requisition');  
    }
  public function ChangeRequisition()
    {
        return view('change_purchase_requisition');  
    }

    
}
