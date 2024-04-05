<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class MainPage extends Component
{
    public function render()
    {
        return view('livewire.main-page');
    }

    public function navigateToSignIn()
    {
        return redirect()->route('signin');
    }

    public function goToSuppliersDatabase()
    {
        return redirect(route('suppliers.database'));
    }
}