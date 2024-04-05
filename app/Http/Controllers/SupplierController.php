<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $suppliers = Supplier::paginate(20); // Fetch 20 suppliers per page
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        //
        return view ('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param
     * @return
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'supplierName' => 'required',
            'category' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'repName' => 'required',
            'repEmail' => 'required',
            'repContact' => 'required'
        ]);

        $supplier = new Supplier([
            'Supplier_Name' => $request->get('supplierName'),
            'Category' => $request->get('category'),
            'Email' => $request->get('email'),
            'Contact' => $request->get('contact'),
            'Address' => $request->get('address'),
            'Rep_Name' => $request->get('repName'),
            'Rep_Email' => $request->get('repEmail'),
            'Rep_Contact' => $request->get('repContact')
        ]);

        $supplier->save();

        return redirect()->route('suppliers.create')->with('success', 'Data has been added successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param
     * @return
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param
     * @return
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param
     * @param
     * @return
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return
     */
    public function destroy(string $id)
    {
        //
    }
}