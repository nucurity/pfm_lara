<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Debit;
use App\Credit;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function debit()
    {
        $categories = Category::where('categoryType', '=', 'debit')->get();
        return view('pages.debit', ['categories' => $categories]);
    }

    public function credit()
    {
        $categories = Category::where('categoryType', '=', 'credit')->get();
        return view('pages.credit', ['categories' => $categories]);
    }

    public function addDebit(Request $request)
    {

        //dd($request);
        $this->validate($request,
            [
                'debitAmount' => 'required|numeric',
                'debitName' => 'required',
                'debitCategoryId' => 'required|integer',
                'debitUserId' => 'required'
            ]
        );

        $debit =  new Debit;
        $debit->debitAmount = $request->debitAmount;
        $debit->debitName =$request->debitName;
        $debit->debitCategoryId = $request->debitCategoryId;
        $debit->debitUserId = $request->debitUserId;

        $debit->save();

        return Redirect('dashboard');
    }

    public function addCredit(Request $request)
    {

        //dd($request);
        $this->validate($request,
            [
                'creditAmount' => 'required|numeric',
                'creditName' => 'required',
                'creditCategoryId' => 'required|integer',
                'creditUserId' => 'required'
            ]
        );

        $credit =  new Credit;
        $credit->creditAmount = $request->creditAmount;
        $credit->creditName =$request->creditName;
        $credit->creditCategoryId = $request->creditCategoryId;
        $credit->creditUserId = $request->creditUserId;

        $credit->save();

        return Redirect('dashboard');
    }
}
