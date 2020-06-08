<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ExpenseController extends Controller
{
    public function expenseStore(Request $request)
    {
        $expense = new Expense();

        $expense->item = $request->input('item');
        $expense->description = $request->input('description');
        $expense->date = $request->input('date');
        $expense->cost = $request->input('cost');
        $expense->qty = $request->input('qty');
        $expense->other = $request->input('other');
        $expense->amountnote = $request->input('amountnote');

        $expense->save();
        Alert::success('Successful.', 'Done');

        return view('pages.expense')->with('pages.expense',$expense);
    }
}
