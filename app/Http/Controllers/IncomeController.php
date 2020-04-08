<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::all();
        return response()->json(['incomes' => $incomes]);
    }

    public function show($id)
    {
        $income = Income::findOrFail($id);
        
        return response()->json([
            'success' => true,
            'income' => $income
        ]);
    }

    public function store(Request $request)
    {
        $income = new Income();
        $inputs = $request->all();
        $income->fill($inputs);

        $income->save();
    }

    public function destroy($id)
    {
        $income = Income::findOrFail($id);
        $income->delete();
    }

    public function update(Request $request, $id)
    {
        $income = Income::findOrFail($id);
        $inputs = $request->all();
        $income->update($inputs);

        return response()->json([
            'success' => true,
            'id' => $income->id
        ]);
    }
}
