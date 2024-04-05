<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class SupplierTable extends Component
{
    public function render()
    {
        $suppliers = Supplier::all(); // Fetch all suppliers from the database
        return view('layouts.supplier-table', compact('suppliers'));
    }
}