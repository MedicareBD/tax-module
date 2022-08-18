<?php

namespace Modules\Tax\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Tax\DataTables\TaxDataTable;
use Modules\Tax\Entities\Tax;

class TaxController extends Controller
{
    public function index(TaxDataTable $dataTable)
    {
        return $dataTable->render('tax::index');
    }

    public function create()
    {
        return view('tax::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            //
        ]);

        return response()->json([
            'message' => __("Tax Created Successfully"),
            'redirect' => route('admin.tax.index')
        ]);
    }

    public function show(Tax $tax)
    {
        return view('tax::show', compact('tax'));
    }

    public function edit(Tax $tax)
    {
        return view('tax::edit', compact('tax'));
    }

    public function update(Request $request, Tax $tax)
    {
        $request->validate([
            //
        ]);

        $tax->update([
            //
        ]);

        return response()->json([
            'message' => __("Tax Updated Successfully"),
            'redirect' => route('admin.tax.index')
        ]);
    }

    public function destroy(Tax $tax)
    {
        $tax->delete();

        return response()->json([
            'message' => __("Tax Deleted Successfully"),
        ]);
    }
}
