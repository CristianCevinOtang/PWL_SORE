<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function index()
    {
        $details = TransactionDetail::all();

        return response()->json($details);
    }

    public function create()
    {
        return response()->json([
            'message' => 'Form Create Transaction Detail'
        ]);
    }

    public function store(Request $request)
    {
        $detail = TransactionDetail::create($request->all());

        return response()->json($detail, 201);
    }

    public function show($id)
    {
        $detail = TransactionDetail::findOrFail($id);

        return response()->json($detail);
    }

    public function edit($id)
    {
        $detail = TransactionDetail::findOrFail($id);

        return response()->json($detail);
    }

    public function update(Request $request, $id)
    {
        $detail = TransactionDetail::findOrFail($id);

        $detail->update($request->all());

        return response()->json($detail);
    }

    public function destroy($id)
    {
        $detail = TransactionDetail::findOrFail($id);

        $detail->delete();

        return response()->json([
            'message' => 'Transaction detail berhasil dihapus'
        ]);
    }
}