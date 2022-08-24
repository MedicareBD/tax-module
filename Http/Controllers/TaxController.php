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
            'taxes' => ['required', 'array', 'min:1'],
            'taxes.*.start_amount' => ['required', 'numeric','min:1'],
            'taxes.*.end_amount' => ['required', 'numeric','gte:taxes.*.start_amount'],
            'taxes.*.rate' => ['required', 'numeric'],
        ], [
            'taxes.*.start_amount.required' => __('validation.required', ['attribute' => __('start amount')]),
            'taxes.*.start_amount.numeric' => __('validation.numeric', ['attribute' => __('start amount')]),
            'taxes.*.start_amount.min' => __('validation.min.numeric', ['attribute' => __('start amount')]),
            'taxes.*.end_amount.required' => __('validation.required', ['attribute' => __('start amount')]),
            'taxes.*.end_amount.numeric' => __('validation.numeric', ['attribute' => __('start amount')]),
            'taxes.*.end_amount.gte' => __('validation.gte.numeric', ['attribute' => __('start amount')]),
            'taxes.*.rate.required' => __('validation.required', ['attribute' => __('rate')]),
            'taxes.*.rate.numeric' => __('validation.numeric', ['attribute' => __('rate')]),
        ]);

        foreach ($request->input('taxes') as $index => $item) {
            Tax::create([
                'start_amount' => $item['start_amount'],
                'end_amount' => $item['end_amount'],
                'rate' => $item['rate'],
            ]);
        }

        return response()->json([
            'message' => __("Tax Created Successfully"),
            'redirect' => route('admin.taxes.index')
        ]);
    }

    public function show(Tax $tax)
    {
        return view('tax::show', compact('tax'));
    }

    public function edit(Tax $tax)
    {
        return view('tax::edit', compact('tax'))->render();
    }

    public function update(Request $request, Tax $tax)
    {
        $validated = $request->validate([
            'start_amount' => ['required', 'numeric','min:1'],
            'end_amount' => ['required', 'numeric','gte:start_amount'],
            'rate' => ['required', 'numeric'],
        ]);

        $tax->update([
            'start_amount' => $validated['start_amount'],
            'end_amount' => $validated['end_amount'],
            'rate' => $validated['rate'],
        ]);

        return response()->json([
            'message' => __("Tax Updated Successfully"),
            'redirect' => route('admin.taxes.index')
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
